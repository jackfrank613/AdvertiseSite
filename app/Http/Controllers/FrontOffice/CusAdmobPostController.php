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
    public function upLoadpic(Request $request){


        $upload_dir= public_path('img/picture');
        $image = $request->file('upload_image');
        $extension = strtolower($image->getClientOriginalExtension());
        if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'){
            // $name=$image->getClientOriginalName();
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move($upload_dir, $name);
            // $path = $file_local->storeAS($upload_dir,$name);
            // $this->save();
            echo json_encode(array('error' => false, 'result'=>$name));
            exit;
          }else {
            echo json_encode(array('error' => true, 'result'=> "File extension is wrong, it must be .jpg, .png, .jpeg"));
            exit;
          }       
    }
}
