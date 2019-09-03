<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JamiiUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\PostedAdmob;
use App\StateModel;
use App\Category;
use App\SubCategory;
class HomeController extends Controller
{
    // hompage call
    public function getHomepage()
    {
        $counts=PostedAdmob::where('enable',1)->get()->count();
        $states=StateModel::all();
        $categories=Category::get()->toarray();
        $subcategories=SubCategory::get()->toarray();
        $objects['category']=$categories;
        $objects['subcategory']=$subcategories;
     //   print_r($objects);exit;
        return view('frontoffice/home/homepage')->with(compact('counts','states','objects'));
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
     
        $exist_check=JamiiUser::where($condition)->count();

      if($exist_check>0)
      {
        $result = JamiiUser::where($condition)->first();
        $id=$result->u_id;
        $name=$result->name;
        session(['user_id' => $id]);
        session(['user_name'=>$name]);
        return redirect('frontoffice/'); 
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
            session(['user_name'=>$request->name]);

            if($id > 0){
                
                return redirect('frontoffice/');
               
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
            session(['user_name'=>$request->lastname]);
            if($id > 0){
              //  echo json_encode(Session::get('user_id'));exit;
              return redirect('frontoffice/');

            }else {
                return back()->with('error_message', 'Invalid Username or Password')->withInput();

            }
        }
  }

  public function userLogout(Request $request){

    // print_r('test');exit;
    $request->session()->forget('user_id');
    $request->session()->forget('user_name');
    return redirect('frontoffice/');

  }
} 