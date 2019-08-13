<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    //
    public function index(){


        return view('frontoffice.home.chat');

    }
}
