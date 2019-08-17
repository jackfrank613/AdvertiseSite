<?php


namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\MessageSent;
class ChatController extends Controller
{
    //
    public function index(){
        return view('frontoffice.home.chat');
    }
    // public function fetchMessages()
    // {
    //   return Message::with('user')->get();
    // }
    
    public function sendMessage(Request $request)
    {
            $user = User::user();

            $message = $user->messages()->create([
                'message' => $request->input('message')
            ]);

            return ['status' => 'Message Sent!'];
     }
}
