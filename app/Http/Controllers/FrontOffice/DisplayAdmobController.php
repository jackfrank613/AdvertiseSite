<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DisplayAdmobController extends Controller
{
    //

    public function getDisplaypage(){
        return view('frontoffice.home.displayadmob');
    }
}
