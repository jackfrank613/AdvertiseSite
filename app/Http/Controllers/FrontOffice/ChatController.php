<?php


namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\MessageSentEvent;
use Illuminate\Support\Facades\Session;
use App\JamiiUser;
use App\Message;
use App\PostedAdmob;
class ChatController extends Controller
{
    // show chats
   
  public function getChatview(Request $request){
    
    $to_user=$request->user;
    $post_id=$request->post;

    $admob=PostedAdmob::where('id',$post_id)->first();
    
    return view('chat')->with(compact('to_user','post_id','admob'));


    }
  public function index(){

      $messages=Message::all();
    //  print_r($messages);exit;
      return response()->json($messages);
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
   
}
