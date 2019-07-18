<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavigationsController extends Controller
{
    // Mes recherches page call
    public function getResearch()
    {
        return view('frontoffice/navigations/research');
    }
    //Mes favorits page call
    public function getFavorite()
    {
        return view('frontoffice/navigations/favorite');
    }
      //Message page call
    public function getMessage()
    {
        return view('frontoffice/navigations/message');
    }
}
