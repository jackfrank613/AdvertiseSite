<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JamiiUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\PostedAdmob;
class AdminHomeController extends Controller
{
    //
    public function getLoginPage(){
        return view('backoffice.adminlogin');
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
}
