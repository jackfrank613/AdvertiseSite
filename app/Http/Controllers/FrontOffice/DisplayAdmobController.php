<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
use App\JamiiUser;
class DisplayAdmobController extends Controller
{
    //

    public function getDisplaypage(){
        
        $count=PostedAdmob::count();
        $page_count = 40;
        $offset = 0;
        $particular_count=JamiiUser::where('type','=','particular')->get()->count();
        $professional_count=JamiiUser::where('type','=','professional')->get()->count();
        $result=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.id','asc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        $current_page = 1;
        print_r($result);exit;
        return view('frontoffice.home.displayadmob')->with(compact('result','count', 'current_page', 'page_count','particular_count','professional_count'));
    }

    public function getData($page){
    
        $current_page = $page;
        $page_count = 40;
        $offset = ($current_page - 1)*$page_count+1;
        $count=PostedAdmob::count();
        $result=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.id','asc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        
        return view('frontoffice.home.displayadmob')->with(compact('result','count', 'current_page', 'page_count' ));
    }
}
