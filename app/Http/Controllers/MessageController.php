<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSentEvent;
use App\JamiiUser;
use App\Message;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    //
  public function index(){

      $messages=Message::all();
    //  print_r($messages);exit;
      return response()->json($messages);
  }

  public function store(Request $request)
{
    
     $user_id=4;
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
     echo $result;exit;
  
}
}
