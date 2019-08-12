<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\PostedAdmob;
use App\PaymentModel;

class PaymentAdmobController extends Controller
{
    // hompage call
    public function getPaymentpage(Request $request)
    {
      
         $post_id= Session::get('post_id');
    
         return view('frontoffice/home/paymentadmobpage')->with(compact('post_id'));
    }

    public function getCardpayment(){

        return view('frontoffice/home/cardpayment');
    }

    public function availAdbomb(){

        $data=$_POST;
        $input_available=array(
          'id'=>$data['id'],
          'enable'=>$data['enable'],
        );
        $result=PostedAdmob::where('id','=',$data['id'])->update($input_available);

        if($result)
        {
            echo json_encode(array('error'=>false,'result'=>"success")); exit;

        }
        else{
            echo json_encode(array('error'=>true,'result'=>"error")); exit;
        }

    }

    public function payoutAdmob(){
          
        $data=$_POST;
    
       $input_amount=array(
            'ad_id'=>$data['id'],
            'amount'=>$data['amount'],      
       );

       $p_id=PaymentModel::insertGetId($input_amount);
       Session::put('payid',$p_id);

    }
}
