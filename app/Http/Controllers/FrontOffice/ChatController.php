<?php


namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\MessageSentEvent;
use Illuminate\Support\Facades\Session;
use App\Message;
class ChatController extends Controller
{
    // show chats
    public function index(){
        return view('frontoffice.home.newchat');
    }

    //Fetch all messages
    public function fetch(){
        $userid=Session::get('user_id');

       $result=Message::where('from_user',$userid)->get();
        return $result;
       
    }

    public function sentMessage(Request $request)
    {

      
      $to_user=$request->input('user');
     
      $from_user=Session::get('user_id');
     
      $messages=$request->input('message');
     
      $input_message=array(
          'message'=>$messages,
          'from_user'=>$from_user,
          'to_user'=>$to_user
      ); 
      broadcast(new MessageSentEvent($to_user,$from_user,$messages))->toOthers();
    
      return ['status' =>"Message sent"];
    }
   
}
