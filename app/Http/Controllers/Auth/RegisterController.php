<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function createUser(Request $request)
    {

        echo json_encode(array('error'=>true,'result'=>"test"));
        exit;
        $condition  = array('email' => $request->email);
        $exist_check=Particular::where($condition)->count();
    
        if($exist_check>0)
        {
            
            echo json_encode(array('error'=>true,'result'=>"The email is exist already"));
            // exit;
        }
        else{
           
            $input_data=array(
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type'=>$request['type'],
            );
           
            $id = Particular::create($input_data)->id;
            // echo json_encode(array('result' => $id));
            // exit;
            if($id > 0){
                echo json_encode(array('error'=>false,'result'=> "Register successfully"));

            }else {
                echo json_encode(array('error'=>true,'result'=> "Register failed"));
            }
        }
        // exit;
    }


    public function createUserprofessional(Request $request)
    {
        $condition  = array('email' => $request->email);
       
        $exist_check=Particular::where($condition)->count();

        // echo json_encode(array('result' => $result));
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
            $id = Professional::create($input_data)->id;
            if($id > 0){
                echo json_encode(array('error'=>false,'result'=> "Register successfully"));

            }else {
                echo json_encode(array('error'=>true,'result'=> "Register failed"));

            }
        }
        // exit;
     //echo json_encode(array('result' => $request->email));

    }
}
