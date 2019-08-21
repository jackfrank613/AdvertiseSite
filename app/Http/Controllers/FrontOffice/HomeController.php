<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JamiiUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\PostedAdmob;
use App\StateModel;
class HomeController extends Controller
{
    // hompage call
    public function getHomepage()
    {
        $counts=PostedAdmob::where('enable',1)->get()->count();
        $states=StateModel::all();
        return view('frontoffice/home/homepage')->with(compact('counts','states'));
    }

    public function getParticular(){
        //Session::put('userid',"test");
        return view('frontoffice/ath/particularpage');

    }

    public function getProfessional(){
        return view('frontoffice/ath/professionalpage');
    }
    public function getHomelogin(Request $request)
    {    
        $condition  = array('email' => $request->email, 'password' => md5($request->password)); 
      // print_r($condition);exit;
        $request->session()->put('user', 'testing');
        $exist_check=JamiiUser::where($condition)->count();
       // print_r($exist_check);exit;
      if($exist_check>0)
      {
        return redirect('frontoffice/advertise'); 
      }
      else{
        return back()->with('error_message', 'Login failed.')->withInput();
      }
  
    }


    public function createParticularUser(Request $request)
    {
        
       // $data=$_POST;   
        $condition  = array('email' => $request->email);
        $exist_check=JamiiUser::where($condition)->count();
      //  print_r($exist_check);exit;
        if($exist_check>0)
        {
            return back()->with('error_message', 'Invalid Username or Password')->withInput();
        }
        else{
           
            $input_data=array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => md5($request->password),
                'type'=>"particular",
            );
            
            $id = JamiiUser::create($input_data)->id;
            session(['user_id' => $id]);

            if($id > 0){
                
                return redirect('frontoffice/advertise');
                //echo json_encode(Session::get('userid'));exit;
            }else {
                return back()->with('error_message', 'Invalid Username or Password')->withInput();
            }
        }
       
    }
    public function createUserprofessional(Request $request)
    {
        
        $condition  = array('email' => $request->email);
       
        $exist_check=JamiiUser::where($condition)->count();

        if($exist_check > 0)
        {         
            
            return back()->with('error_message', 'Invalid Username or Password')->withInput();
        }
        else{
            $input_data = array(
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => md5($request->password),
                'civility' =>$request->gender,
                'name' =>$request->firstname,
                'com_name' =>$request->company_name,
                'siret' =>$request->siret,
                'heading'=>$request->activity_sector,
                'address' =>$request->billing_address,
                'zip' =>$request->location,
                'phone' =>$request->phone,
                'type'=>"professional",
            );
            $id = JamiiUser::create($input_data)->id;
            session(['user_id' => $id]);
            if($id > 0){
                return redirect('frontoffice/advertise');

            }else {
                return back()->with('error_message', 'Invalid Username or Password')->withInput();

            }
        }
  }
} 