<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CVModel;

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

    public function addUserCv(Request $request){
     //   echo 'test';exit;
       $user_id=Session::get('user_id');
       $upload_dir=public_path('cv');
       $file=$request->file('cv');
       $extension = strtolower($file->getClientOriginalExtension());
     
       if($extension =='docx' || $extension =="pdf"){
            $name=time().'.'.$file->getClientOriginalExtension();
            $file->move($upload_dir,$name);
            
            echo json_encode(array('error' => false, 'result'=>$name)); exit;
        }
        else{
            echo json_encode(array('error' => true, 'result'=> "File extension is wrong, it must be .docx, .pdf, .txt"));
            exit; 
        }


    }
}