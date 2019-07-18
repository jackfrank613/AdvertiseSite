<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
class DisplayAdmobController extends Controller
{
    //

    public function getDisplaypage(){

        $result=PostedAdmob::orderBy('jamii_postedadmob.id','asc')->limit(10)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.id')->get()->toarray();
        $count=count($result);
        //  print_r($result);exit;
        return view('frontoffice.home.displayadmob')->with(compact('result', 'count'));
    }
}
