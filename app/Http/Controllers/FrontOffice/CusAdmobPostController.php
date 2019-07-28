<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;

class CusAdmobPostController extends Controller
{
    //
    public function index(){
        $data = [];
        $result=Category::get();
        $data['categories'] = $result->toArray();
      
        $subcategory = [];
        foreach($result as $category)
        {
            $result1=SubCategory::where("c_id", "=", $category['id'])->get()->toArray();
            $subcategory[$category['id']] = $result1;

        }
        $data['subcategories'] = $subcategory;
       // print_r($data);exit;
        return view('frontoffice.others.unactivepostadmob')->with(compact('data'));
    }
    public function upLoadpic(){

       


    }
}
