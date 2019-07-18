<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    // user's admob management page call
    public function getAdmob(){
        return view('frontoffice/profiles/admob');
    }
    // user's transaction management page call
    public function getTransaction(){
        return view('frontoffice/profiles/transaction');
    }

    // user's purchase management page call
    public function getPurchase(){
        return view('frontoffice/profiles/purchase');
    }

      // user's account management page call
      public function getAccount(){
        return view('frontoffice/profiles/account');
    }
    // user's mycv management page call
    public function getMycv(){
    return view('frontoffice/profiles/mycv');
    }

     // user's booking management page call
     public function getBooking(){
        return view('frontoffice/profiles/booking');
    }
}