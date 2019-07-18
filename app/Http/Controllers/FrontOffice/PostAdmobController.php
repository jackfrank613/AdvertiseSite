<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Collection;
use maxh\Nominatim\Nominatim;
use App\Category;
use App\SubCategory;
use App\PostedAdmob;
use Illuminate\Http\Request;
use Validator;


class PostAdmobController extends BaseController
{
   
    public function initCategory()
    {
        $data = [];
        $result=Category::get();
        $data['categories'] = $result->toArray();
      //  print_r($data);exit();
        $subcategory = [];
        foreach($result as $category)
        {
            $result1=SubCategory::where("c_id", "=", $category['id'])->get()->toArray();
            $subcategory[$category['id']] = $result1;

        }
        $data['subcategories'] = $subcategory;
        // print_r($data);exit();     

        return view('frontoffice.home.advertisepage')->with('data', $data);

    }

    public function addSelectCategory()
    {
      $data=$_POST;
      $input_categoryType=array(
         'sub_id'=>$data['sub_id'],
         'adName'=>$data['adName'],
         'adType'=>$data['adType'],
      );
    //   echo json_encode(array('result'=>$input_categoryType['sub_id']));
    //   exit;
      
      $id=PostedAdmob::insertGetId($input_categoryType); 
      $sub_result=SubCategory::where("id", "=", $data['sub_id'])->first()->toArray();
      // echo json_encode(array('result'=>$id));
      // exit;
      if($id>0)
      {
        if($sub_result['option'] !="")
        {
        $returnHTML = view('categories.'.$sub_result['option'])->render();
        // print_r($returnHTML);
        return response()->json( array('error' => false, 'result'=>$returnHTML,'id'=>$id) );
        }
        else{
          echo json_encode(array('error'=>false,'result'=>'next_view','id'=>$id));
          exit;
        }

      }
      else{
         echo json_encode(array('error'=>true,'result'=>'Error'));
      }
    }

    public function addDescriptionCategory()
    {
        
        $data = $_POST;
      //echo json_encode(array('error'=>false,'result'=> $data['id']));
      $input_categoryDescription=array(
        'subject'=>$data['subject'],
        'body'=>$data['body'],
        "id" => $data['id'],
      );

     $result= PostedAdmob::where('id','=', $data['id'])->update($input_categoryDescription);
      // DB::table('admobsite_detail')->where('id',113)->update($input_categoryDescription);
      if($result ==1)
      {
        echo json_encode(array('error'=>false,'result'=>$result));
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"Error"));
      }
      exit;
     
    }
    public function addPriceCategory(){
          
        $data=$_POST;
        $input_categoryprice=array(
         'id'=>$data['id'],
         'price'=>$data['price'],
        );
        $result= PostedAdmob::where('id',"=",$data['id'])->update($input_categoryprice);
  
        if($result ==1)
        {
          echo json_encode(array('error'=>false,'result'=>$result));
        }
        else{
          echo json_encode(array('error'=>true,'result'=>"Error"));
        }
       
      
      }
      
      public function loadPictureCategory(Request $request){
      
        // $FILES=$_FILES["image"];
        
        $upload_dir = storage_path('images/');
        // $file_local =  $_FILES["select_file"];
        $image = $request->file('select_file');
        
        $extension = strtolower($image->getClientOriginalExtension());
        // print_r($upload_dir);exit;
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
     
      public function addPictureCategory(){
        $data=$_POST;
        $images['camera']=implode(',',$data['upload_images']);
        $result=PostedAdmob::where('id',"=",$data['id'])->update($images);

        if($result)
        {
          echo json_encode(array('error'=>false,'result'=>"Upload successfully!"));
        }
        else{
          echo json_encode(array('error'=>true,'result'=>"Error"));
        }
        
      
      }

      public function addInformation(){
       
         $data=$_POST;
         $input_category_information=array(
          'email'=>$data['email'],
          'phone'=>$data['phone'],
          'id' => $data['id'],
          'enable'=>$data['enable'],
        );
          // echo json_encode(array('result'=>$data['id']));
         $result=PostedAdmob::where('id',"=",$data['id'])->update($input_category_information);
       
        if($result)
        {
          echo json_encode(array('error'=>false,'result'=>"success"));
        }
        else{
          echo json_encode(array('error'=>false,'result'=>"error"));

        }
      }

      public function getCoordinates(){

        $data=$_POST;
        if($data['c_name'] !="")
        {
        $url = "http://nominatim.openstreetmap.org/";
        $nominatim = new Nominatim($url);
        $search = $nominatim->newSearch()
            ->country('France')
            ->city($data['c_name'])
            //  ->postalCode('25200')
            ->polygon('geojson')    //or 'kml', 'svg' and 'text'
            ->addressDetails();
        $result = $nominatim->find($search);
        //print_r($result[0]['geojson']['coordinates'][0]);exit;
       // print_r($result);exit;
       $input_image=array(
         'id'=>$data['id'],
         'adress'=>$data['c_name']
       );
      PostedAdmob::where('id','=',$data['id'])->update($input_image);

       echo json_encode(array('error'=>false,'result'=>$result[0]['geojson']['coordinates'][0]));
        }
        else{
          echo json_encode(array('error'=>false,'result'=>"Error"));
        }

    }

}