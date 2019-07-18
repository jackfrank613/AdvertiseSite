<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // hompage call
    public function getHomepage()
    {
        return view('frontoffice/home/homepage');
    }
}
