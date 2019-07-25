<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JamiiUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    // hompage call
    public function getHomepage()
    {
       
        return view('frontoffice/home/homepage');
    }

    public function getParticular(){
      
        return view('frontoffice/ath/particularpage');

    }

    public function getProfessional(){
        return view('frontoffice/ath/professionalpage');
    }
    public function getHomelogin(Request $request)
    {     
        echo json_encode(array('result' => $request->email));
        exit;
      $condition  = array('email' => $request->email, 'password' => md5($request->password));
    
      $exist_check=JamiiUser::where($condition)->count();
    //   echo json_encode(array('result' => $exist_check));
    //   exit;
      if($exist_check>0)
      {
        echo json_encode(array('error'=> false, 'result' => "Login successfully."));
      }
      else{
        echo json_encode(array('error'=> true, 'result' => "Login failed"));
      }
  
    }


    public function createParticularUser()
    {

        $data=$_POST;   
        $condition  = array('email' => $data['email'],'password'=>$data['password']);
        $exist_check=JamiiUser::where($condition)->count();
      
       
        if($exist_check>0)
        {
            
            echo json_encode(array('error'=>true,'result'=>"The email is exist already"));exit;
          
        }
        else{
           
            $input_data=array(
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'type'=>"particular",
            );
            
            $id = JamiiUser::create($input_data)->id;
                // session(['userid' => $id]);
                Session::put('userid',$id);
               // echo session()->get('userid'); exit;
          //  echo json_encode(array('error'=>false,'result'=> "Register successfully"));exit;

            if($id > 0){
                
                // echo json_encode(array('error'=>false,'result'=> session()->get('userid')));exit;
                echo json_encode(Session::get('userid'));exit;
            }else {
                echo json_encode(array('error'=>true,'result'=> "Register failed"));exit;
            }
        }
       
    }


    public function createUserprofessional(Request $request)
    {
        
        $condition  = array('email' => $request->email);
       
        $exist_check=JamiiUser::where($condition)->count();

       // echo json_encode(array('result' => $exist_check));exit;
        // // return response()->json(array('msg'=> $msg), 200);
        // exit;
        if($exist_check > 0)
        {         
            
            echo json_encode(array('error'=>true,'result'=>"The email is exist already"));
            //  exit;
        }
        else{
            $input_data = array(
                'firstname' => $request['firstname'],
                'lastname' => $request['lastname'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'civility' =>$request['gender'],
                'name' =>$request['firstname'],
                'com_name' =>$request['company_name'],
                'siret' =>$request['siret'],
                'heading'=>$request['activity_sector'],
                'address' =>$request['billing_address'],
                'zip' =>$request['location'],
                'phone' =>$request['phone'],
                'type'=>"professional",
            );
            $id = JamiiUser::create($input_data)->id;
            if($id > 0){
                echo json_encode(array('error'=>false,'result'=> "Register successfully"));

            }else {
                echo json_encode(array('error'=>true,'result'=> "Register failed"));

            }
        }
  }
} 