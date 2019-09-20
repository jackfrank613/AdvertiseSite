<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JamiiUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\PostedAdmob;
use App\UserAction;
use App\AdmobAction;
use App\Admin;
class AdminHomeController extends Controller
{
    //
    public function getLoginPage(){
        return view('backoffice.adminlogin');
    }

    public function adminLogin(Request $request){

        $name=$request->name;
        $password=$request->password;

        $condition=array(
           'name'=>$name,
           'password'=>md5($password)
        );

        $exit_check=Admin::where($condition)->count();
       if($exit_check>0){
         $usercount=JamiiUser::all()->count();
        // print_r($usercount);exit;
         $totalcount=PostedAdmob::all()->count();
         $boostcount=PostedAdmob::where('boost_id','!=',0)->get()->count();
         $urgentcount=PostedAdmob::where([['jamii_postedadmob.boost_id',"!=",0],['jamii_boost.star_style',"=",1]])->leftJoin('jamii_boost','jamii_postedadmob.boost_id',"=",'jamii_boost.b_id')->get()->count();
         return view('backoffice.dashboard')->with(compact('usercount','totalcount','boostcount','urgentcount'));
       }
       else{
            return back()->with('error_message',"Login failed")->withInput();
       } 

    }
    public function getHomeview(){

        $usercount=JamiiUser::all()->count();
       // print_r($usercount);exit;
        $totalcount=PostedAdmob::all()->count();
        $boostcount=PostedAdmob::where('boost_id','!=',0)->get()->count();
        $urgentcount=PostedAdmob::where([['jamii_postedadmob.boost_id',"!=",0],['jamii_boost.star_style',"=",1]])->leftJoin('jamii_boost','jamii_postedadmob.boost_id',"=",'jamii_boost.b_id')->get()->count();
        return view('backoffice.dashboard')->with(compact('usercount','totalcount','boostcount','urgentcount'));
    }

    public function getParticularView(){
        $users=JamiiUser::where('type','particular')->paginate(10);
        return view('backoffice.user.particularuser')->with(compact('users'));
    }
    public function getProfessionalView(){
        $users=JamiiUser::where('type','professional')->paginate(10);
        return view('backoffice.user.professionaluser')->with(compact('users'));
    }
   
    public function getGeneralView(){
        $results=PostedAdmob::where('jamii_postedadmob.boost_id',"=",0)->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->paginate(10);
        return view('backoffice.advertise.general')->with(compact('results'));
    
    }
    public function getBoostView(){
        $results=PostedAdmob::where('jamii_postedadmob.boost_id',"!=",0)->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->paginate(10);
        return view('backoffice.advertise.boost')->with(compact('results'));
    }
    public function getUserActive(){
        $users=UserAction::paginate(10);
        return view('backoffice.actions.user')->with(compact('users'));
    }
    public function getAdmobActive(){
        $admobs=AdmobAction::paginate(10);
        return view('backoffice.actions.admob')->with(compact('admobs'));
    }
    public function deleteAdmobaction(Request $request){
        
        $check=AdmobAction::where('ad_id','=',$request->get('ad_id'))->delete();
        if($check){
        echo json_encode(array('error'=>false,"result"=>$request->get('ad_id')));exit;

        }
        else{
        echo json_encode(array('error'=>false,"result"=>"Error"));exit;

        }
    }

    public function deleteUser(Request $request){
   
        $check=UserAction::where('a_id','=',$request->get('ad_id'))->delete();
        if($check){
        echo json_encode(array('error'=>false,"result"=>"Success"));exit;

        }
        else{
        echo json_encode(array('error'=>false,"result"=>"Error"));exit;

        }

    }

    public function addAdmobActive(Request $request){
        
        $input_active=array(
            // 'ad_id'=>$request->get('id'),
            'ad_active'=>$request->get('enable')
        );

        AdmobAction::where('ad_id','=',$request->get('id'))->update($input_active);
        $result=AdmobAction::where('ad_id','=',$request->get('id'))->first();
        if($result['ad_active'] == 0){
            echo json_encode(array('error'=>false,"result"=>"Disable"));exit;

        }
        else{
            echo json_encode(array('error'=>true,"result"=>"Enable"));exit;

        }

    }

    public function deleteParticular(Request $request){
        
        $check=JamiiUser::where([['u_id','=',$request->get('id')],['type','particular']])->delete();

        if($check){
            echo json_encode(array('error'=>false,"result"=>"Success"));exit;


        }
        else{
            echo json_encode(array('error'=>true,"result"=>"Error"));exit;

        }
    
    }
    
    public function deleteProfessional(Request $request){
        
        $check=JamiiUser::where([['u_id','=',$request->get('id')],['type','professional']])->delete();
       // echo json_encode(array('error'=>false,"result"=>$check));exit;
        if($check){
            echo json_encode(array('error'=>false,"result"=>"Success"));exit;
        }
        else{
            echo json_encode(array('error'=>true,"result"=>"Error"));exit;

        }
    
    }

    public function deleteBoost(Request $request){
        // $boostcount=PostedAdmob::where('boost_id','!=',0)->get()->count();
        $check=PostedAdmob::where([['id','=',$request->get('ad_id')],['boost_id','!=',0]])->delete();
        if($check){
            echo json_encode(array('error'=>false,"result"=>"Success"));exit;
        }
        else{
            echo json_encode(array('error'=>true,"result"=>"Error"));exit;

        }

    }
    public function deleteGeneral(Request $request){
        $check=PostedAdmob::where([['id','=',$request->get('ad_id')]])->delete();
        if($check){
            echo json_encode(array('error'=>false,"result"=>"Success"));exit;
        }
        else{
            echo json_encode(array('error'=>true,"result"=>"Error"));exit;

        }

    }

    public function logLout(){

        return view('backoffice.adminlogin');
    }

    public function userEnable(Request $request){

        $input_active=array(
            // 'ad_id'=>$request->get('id'),
            'user_active'=>$request->get('enable')
        );

        UserAction::where('a_id','=',$request->get('id'))->update($input_active);
        $result=UserAction::where('a_id','=',$request->get('id'))->first();
        if($result['user_active'] == 0){
            echo json_encode(array('error'=>false,"result"=>"Disable"));exit;

        }
        else{
            echo json_encode(array('error'=>true,"result"=>"Enable"));exit;

        }
    }

}
