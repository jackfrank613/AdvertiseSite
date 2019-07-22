<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentAdmobController extends Controller
{
    // hompage call
    public function getPaymentpage()
    {
        return view('frontoffice/home/paymentadmobpage');
    }
}
