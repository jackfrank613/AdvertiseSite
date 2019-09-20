<?php


namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\MessageSentEvent;
use Illuminate\Support\Facades\Session;
use App\JamiiUser;
use App\Message;
use App\PostedAdmob;
use App\MessageLogo;
class ChatController extends Controller
{
    // show chats
   
  public function getChatview(Request $request){
    
    $to_user=$request->user;
    $post_id=$request->post;
    $user_id=Session::get('user_id');
    if(empty($user_id)) return redirect()->back()->with('message', "You didn't register to our website.");;
   // $admob=PostedAdmob::where('id',$post_id)->first(); 
    return view('chat')->with(compact('to_user','post_id','user_id'));


    }
  public function index(){

      $messages=Message::all();
    //  print_r($messages);exit;
      return response()->json($messages);
  }

  public function getProduction(Request $request){
      $image_url= url('/img/picture');
      $current_url="http://localhost/jamii/public/img/picture/";
      $admob=PostedAdmob::where('id',$request->get('post_id'))->first();
      $images=explode(',',$admob['camera']);
      $temp=[];
      foreach($images as $item){
          
          $temp[]=$current_url.$item;
      }
      $admob['camera'] = $temp;     
      return response()->json($admob);
  }

  public function store(Request $request)
{
     
     $user_id=2;
     $body=$request->input('message');
     $to_user=$request->input('to');
     $input_message=array(
       'from_user'=>$user_id,
       'to_user'=>$to_user,
       'message'=>$body,
       'type'=>"me"
     );
     $m_id=Message::insertGetId($input_message);
     $result=Message::where('m_id',$m_id)->get();
     echo $result ;exit;
  
}
   public function getAllProduction(){
      $image_url= url('/img/picture/');
      $current_url="http://localhost/jamii/public/img/picture/";
     // $user_id=Session::get('user_id');
      $user_id=2;
      $result=[];
     
      $admobs=MessageLogo::where([['jamii_message_logo.l_user','=',$user_id],['jamii_postedadmob.enable','=',1]])->leftJoin('jamii_postedadmob','jamii_postedadmob.id','=','jamii_message_logo.l_post')->get()->toarray();
      foreach($admobs as $one){
        $images=explode(",",$one['camera']);
        $temp=[];
        foreach($images as $item){
            
            $temp[]=$current_url.$item;
        }
        $one['camera'] = $temp;
        $result[]=$one;      
      }  
      return response()->json($result);exit;
   }

   public function getIndividualMessage(Request $request){
       
      $user_id=2;
      $msg=Message::where([['from_user','=',$user_id],['to_user',"=",$request->get('touser')]])->get()->toarray();
     
      return response()->json($msg);exit;
    }
    public function removeLogo(Request $request){
       $to_user=$request->get('to_user');
      //  echo $to_user;exit;
       $check=MessageLogo::where('l_post','=',$request->get('ad_id'))->delete();
    ///   Message::where('')

       if($check){
           echo json_encode(array('error'=>false,'result'=>'sucessfully'));exit;
       }
       else{
           echo json_encode(array('error'=>true,'result'=>'error'));exit;
       }
       return response()->json($check);
         
    }
}
