<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\PostedAdmob;
use App\PaymentModel;
use App\BoostAdmob;

class PaymentAdmobController extends Controller
{
    // hompage call
    public function getPaymentpage(Request $request)
    {
      
         $post_id= Session::get('post_id');
    
         return view('frontoffice/home/paymentadmobpage')->with(compact('post_id'));
    }

    public function getCardpayment(Request $request){
        $boost_id=$request->boost;
        $result=BoostAdmob::where('b_id','=',$boost_id)->first();
        $amount=$result->amount;
        return view('frontoffice/home/cardpayment')->with(compact('boost_id','amount'));
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

    public function boostAdmob(){
          
        $data=$_POST;

        
        // $styles=explode(",",$data['post_style']);
      //  echo json_encode(array("error"=>true,"result"=>$data['amount']));exit;
       $input_amount=array(
            'post_id'=>$data['post_id'],
            'amount'=>$data['amount'],
            'post_style'=>$data['post_style'],
            'side_date'=>$data['side_date'],
            'top_date'=>$data['top_date'],
            'star_date'=>$data['star_date'],
            'total_period'=>$data['total_period'],
            'post_time'=>date('Y-m-d H:i:s')

       );
       $boost_id=BoostAdmob::insertGetId($input_amount);
     //  echo json_encode(array("result"=>$boost_id));exit;
       if($boost_id){
        
         echo json_encode(array("error"=>false,"result"=>$boost_id));exit;
       }
       else{
        echo json_encode(array("error"=>true,"result"=>"error"));exit;
       }

    }

    public function withStripePayment(Request $request){
     
       // $data=$_POST;
      //  echo $request->boost_id;exit;
        $result=BoostAdmob::where('b_id','=',$request->boost_id)->first();
      
        $amount=$result->amount;
        \Stripe\Stripe::setApiKey('sk_test_loaCudYPovZN7DP8R2fW6NbU00TPdHDXqv');
        $charge = \Stripe\Charge::create(['amount' => $amount*100, 'currency' => 'eur', 'source' =>$request->stripeToken, 'description' => 'paid for advertise']);
        // echo($charge);exit;
        if(isset($charge))
        {
        
           $input_active=array(
            'post_time'=>date('Y-m-d H:i:s'),
             'pay_active'=>1,
             'updated_at'=>date('Y-m-d H:i:s')
           );

           $check=BoostAdmob::where('b_id','=',$result->b_id)->update($input_active);
         
            if($check)
            {

                $input_payment=array(
                  'boost_id'=>$result->b_id,
                  'amount'=>$amount,
                  'active'=>1,
                  'pay_date'=>date('Y-m-d H:i:s')
                );
               // echo $check;exit;
                // $boost_result=BoostAdmob::where('b_id',$result->boost_id)->first();
               
                $pay_id=PaymentModel::insertGetId($input_payment);

                $input_enable=array(
                  'boost_id'=>$result->b_id,
                  'enable'=>1,
                  'create_time'=>date('Y-m-d H:i:s'),
                  'paid_id'=>$pay_id
                );
      
                $check1=PostedAdmob::where('id',$result->post_id)->update($input_enable);
                if($check1)
                {
                  $status="Le paiement est traité avec succès!";

                }
                else{
                  $status="Le paiement est traité avec succès!!";
                }              
                // echo json_encode(array('error'=>false,"result"=>"Le paiement est traité avec succès!"));exit;
             
              return redirect()->route('status',['status' => $status]);
            }
            else{
                echo json_encode(array('error'=>true,"result"=>"bosst information is not exist."));exit;
            }
        }
        else{
            $status="Le paiement est refusé!";
            return redirect()->route('status',['status' => $status]);
            echo json_encode(array('error'=>false,"result"=>"Le paiement est refusé!"));exit;
        }
      
    }

    public function getStatus(Request $request){
        
        // echo $request->status;exit;
        $status=$request->status;
        return view('frontoffice.home.processpayment')->with(compact('status'));

    }
}
