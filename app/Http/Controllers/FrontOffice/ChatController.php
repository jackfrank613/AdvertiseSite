<?php


namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\MessageSent;
use App\Message;
class ChatController extends Controller
{
    // show chats
    public function index(){
        return view('frontoffice.home.chat');
    }

    //Fetch all messages
    public function fetchMessages(){
        
        $result=Message::all();
        json_encode('test');
        print_r(json_encode($result));exit;
        

    }

    public function sendMessage(Request $request){

        //  $check=Message::insertGetId();
        //
        $user=$request->input('user');
        $message=$request->input('message');
        echo json_encode($message);exit;
       // event(new MessageSent($user, $message))->toOthers();
        $input_messages=array(
           
            'message'=>$request->input('message'),
            'from_user'=>1,
            'to_user'=>$request->input('user'),
            'message_time'=>date('Y-m-d H:i:s')

        );
      //  
        $message_id=Message::insertGetId($input_messages);   
       // 
       
    }
   
}
