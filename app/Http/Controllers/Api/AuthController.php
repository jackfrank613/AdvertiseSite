<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\JamiiUser;

class AuthController extends Controller
{
    //
    public function CreateUser()
    {
        $data=$_POST;
        $input_user=array(
          'name'=>$data['name'],
          'email'=>$data['email'],
          'password'=>md5($data['password']),
          'f_name'=>$data['f_name'],
          'com_name'=>$data['com_name'],
            'siret'=>$data['siret'],
            'heading'=>$data['heading'],
            'address'=>$data['address'],
            'zip'=>$data['zip'],
            'phone'=>$data['phone'],
           'civility'=>$data['civility'],
           'type'=>$data['type']
        );
        $condition=array('email'=>$data['email']);
        $exist_check=JamiiUser::where($condition)->count();
        if($exist_check>0)
        {
            echo json_encode(array("error"=>true,"result"=>"Invaild email!"));exit;
        }
        else{
            $user_id=JamiiUser::insertGetId($input_user);
            if($user_id)
            {
                echo json_encode(array("error"=>false,"user_id"=>$user_id,"result"=>"Registered successfully!"));exit;
            }
            else{
                echo json_encode(array("error"=>true,"result"=>"Register error!"));exit;
            }
        }
    }

    public function LoginUser()
    {
        $data=$_POST;
        $condition=array(
         'email'=>$data['email'],
         'password'=>md5($data['password'])
        );
        $check=JamiiUser::where($condition)->count();
       if($check>0)
       {
        $result=JamiiUser::where($condition)->first();
        $result = $result->makeHidden(['password', $result['password']]);
         $user_id=$result['u_id'];

         if(isset($result))
         {
             echo json_encode(array("error"=>false,"data"=>$result,"result"=>"Login successfully!"));exit;
         }
         else{
             echo json_encode(array("error"=>true,"result"=>"Invaild email and password!"));exit;
         }
       }
       else{
        echo json_encode(array("error"=>true,"result"=>"Invaild email and password!"));exit;

       }
      
    }
}
