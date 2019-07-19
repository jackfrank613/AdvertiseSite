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
        $page_count = 40;
        $offset = 0;
        $result=PostedAdmob::orderBy('jamii_postedadmob.id','asc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        $current_page = 1;
        return view('frontoffice.home.displayadmob')->with(compact('result','count', 'current_page', 'page_count'));
    }

    public function getData($page){
    
        $current_page = $page;
        $page_count = 40;
        $offset = ($current_page - 1)*$page_count+1;
        $count=PostedAdmob::count();
        $result=PostedAdmob::orderBy('jamii_postedadmob.id','asc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        
        return view('frontoffice.home.displayadmob')->with(compact('result','count', 'current_page', 'page_count' ));
    }
}
