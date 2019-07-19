<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
class DisplayAdmobController extends Controller
{
    //

    public function getDisplaypage(){
        
        $count=PostedAdmob::count();
        $result=PostedAdmob::orderBy('jamii_postedadmob.id','asc')->limit(40)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        $current_page = 1;
        return view('frontoffice.home.displayadmob')->with(compact('result', 'count', 'current_page'));
    }

    public function getData($page){
        // print_r($_GET['page']);
        print_r($page);exit();
        // $current_page = isset($requset['page'])? $requset['page']: 1;
        $count=PostedAdmob::count();
        $result=PostedAdmob::orderBy('jamii_postedadmob.id','asc')->limit(40)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        return view('frontoffice.home.displayadmob')->with(compact('result', 'count', 'current_page'));
    }
}
