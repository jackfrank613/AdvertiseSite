<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use maxh\Nominatim\Nominatim;
use App\Category;
use App\SubCategory;
use App\PostedAdmob;
use App\ShoesColor;
use App\ShoesType;
use App\ShoesMarker;
use App\ShoesSize;
use App\ShoesState;
use App\ShoesUniver;
use App\ClothingColor;
use App\ClothingCut;
use App\ClothingMark;
use App\ClothingState;
use App\ClothingType;
use App\ClothingUniver;
use App\CarMarker;
use App\CarModel;
use App\JamiiUser;
use Validator;



class PostAdmobController extends BaseController
{
   
    public function initCategory(Request $request)
    {
      
     //  print_r($user_id);exit;
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
        $user_id=session('user_id');
        $user=JamiiUser::where('u_id',$user_id)->first();
        $email=$user->email;
      //  print_r($email);exit;
     
        return view('frontoffice.home.advertisepage')->with(compact('data','email','user_id'));

    }

    public function addSelectCategory(Request $request)
    {
      
      // print_r($request);exit;
     
      $data=$_POST;
     
      $input_categoryType=array(
         'sub_id'=>$data['sub_id'],
         'adName'=>$data['adName'],
         'adType'=>$data['adType'],
      );
   
    // $input_categoryType=array(
    //      'sub_id'=>33,
    //      'adName'=>"dfdfdf",
    //      'adType'=>"dfsdfd",
    //   );
   
    
      $id=PostedAdmob::insertGetId($input_categoryType); 
     
    //  echo json_encode(array('error'=>false,'result'=>$input_categoryType)); exit;
    
     $sub_result=SubCategory::where("s_id", "=", $data['sub_id'])->first()->toArray();
     
      if($id>0)
      {
        
        if($sub_result['option'] !="")
        {  
          $sub_option=$sub_result['option'];
         
         if($sub_option=="carcategory")
         {
          $markers=CarMarker::orderBy('id')->get()->toarray();
          $returnHTML = view('frontoffice.categories.carcategory')->with(compact('markers'))->render();
         }
         else if($sub_option=="cavanacategory")
         {
          $returnHTML = view('frontoffice.categories.cavanacategory')->render();
         }
        else if($sub_option=="clothing"){
          $colors=ClothingColor::orderBy('id')->get()->toarray();
          $marks=ClothingMark::orderBy('id')->get()->toarray();
          $states=ClothingState::orderBy('id')->get()->toarray();
          $types=ClothingType::orderBy('id')->get()->toarray();
          $univers=ClothingUniver::orderBy('id')->get()->toarray();
          $returnHTML = view('frontoffice.categories.clothing')->with(compact('univers','types','states','marks','colors'))->render();
      
        }
        else if($sub_option=="motocyclecategory"){
          $returnHTML = view('frontoffice.categories.motocyclecategory')->render();
        }
        else if($sub_option=="utilitiecategory"){
          $returnHTML = view('frontoffice.categories.utilitiecategory')->render();

         }
         else if($sub_option=="rental")
         {
          $returnHTML = view('frontoffice.categories.rental')->render();
         }
         else if($sub_option=="shoescategory")
         {
          $univers=ShoesUniver::orderBy('id')->get()->toarray();
          $types=ShoesType::orderBy('id')->get()->toarray();
          $colors=ShoesColor::orderBy('id')->get()->toarray();
          $states=ShoesState::orderBy('id')->get()->toarray();
          $markers=ShoesMarker::orderBy('id')->get()->toarray();
          $sizes=ShoesSize::orderBy('id')->get()->toarray();
     
          $returnHTML = view('frontoffice.categories.shoescategory')->with(compact('univers','types','colors','states','markers','sizes'))->render();
         }
         else{
          $returnHTML = view('frontoffice.categories.officeorshopcategory')->render();

         }
      
        echo json_encode(array('error'=>false,'result'=>$returnHTML,'id'=>$id)); exit;
      
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
        
        //$upload_dir = storage_path('images/');
        $upload_dir= public_path('img/picture');
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
         $date = date('Y-m-d H:i:s');
         $input_category_information=array(
          'email'=>$data['email'],
          'phone'=>$data['phone'],
          'id' => $data['id'],
          'enable'=>$data['enable'],
          'create_time'=>$date,
          'user_id'=>$data['user_id'],
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

    //this function is to input datas (option function)
    public function addData(){
      
      $data=$_POST['option'];
    //echo json_encode(array('error'=>false,'result'=>$data)); exit;
      foreach ($data as $item) 
      {
        ClothingCut::insert([
          'un_id'=>4,
          'cut_name'=>$item,
        ]); 
      }
      echo json_encode(array('error'=>false,'result'=>"success")); exit;
    }

    public function getCarmodel(){
      
      $data=$_POST;

       $result_models=CarModel::where('mark_id','=',$data['id'])->get()->toarray();
       echo json_encode(array('error'=>false,'result'=>$result_models)); exit;

    }
    public function getCuts(){
      
      $data=$_POST;
     // echo json_encode(array('error'=>false,'result'=>$data['un_id'])); exit;
       $result_cuts=ClothingCut::where('un_id','=',$data['id'])->get()->toarray();
       echo json_encode(array('error'=>false,'result'=>$result_cuts)); exit;

    }

    public function addCardetail(){
        
      $data=$_POST;
     // echo json_encode(array('error'=>false,'result'=>$data['id'])); exit;
      $input_cardetail=array(
        'brand'=>$data['brand'],
        'model'=>$data['model'],
        'regdate'=>$data['regdate'],
        'issuance_date'=>$data['issuance_date'],
        'mileage'=>$data['mileage']."km",
        'fuel'=>$data['fuel'],
        'gearbox'=>$data['gearbox'],
      );
    //  echo json_encode(array('error'=>false,'result'=>$input_cardetail)); exit;
      $result=PostedAdmob::where('id','=',$data['id'])->update($input_cardetail);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    } 

    public function addCanva()
    {
      $data=$_POST;
      $input_cavans=array(
        'regdate'=>$data['regdate'],
        'issuance_date'=>$data['issuance_date'],
        'mileage'=>$data['mileage']."km",
      );
      $result=PostedAdmob::where('id','=',$data['id'])->update($input_cavans);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }

    }
    public function addMoto(){
      $data=$_POST;
      $input_moto=array(
        'regdate'=>$data['regdate'],
        'issuance_date'=>$data['issuance_date'],
        'mileage'=>$data['mileage']."km",
        'cubic_capacity'=>$data['cubic_capacity']."cm³",
      );
      $result=PostedAdmob::where('id','=',$data['id'])->update($input_moto);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }
    public function addUtil(){
      $data=$_POST;
      $input_util=array(
        'regdate'=>$data['regdate'],
        'issuance_date'=>$data['issuance_date'],
        'mileage'=>$data['mileage']."km",
        'fuel'=>$data['fuel'],
        'gearbox'=>$data['gearbox'],
      );
      $result=PostedAdmob::where('id','=',$data['id'])->update($input_util);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }
    public function addRental(){
      $data=$_POST;
   //   echo json_encode(array('error'=>true,'result'=>$data)); exit;
      $input_rental=array(
        'good'=>$data['good'],
        'energy_rage'=>$data['energy_rage'],
        'ges'=>$data['ges'],
        'furnished'=>$data['furnished'],
        'rooms'=>$data['rooms']."pièce(s)",
        'square'=>$data['square']."m²",
      );
      // echo json_encode(array('error'=>true,'result'=>$input_rental)); exit;


      $result=PostedAdmob::where('id','=',$data['id'])->update($input_rental);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }
    public function addRealestate(){
      $data=$_POST;
   //   echo json_encode(array('error'=>true,'result'=>$data)); exit;
      $input_rental=array(
        'good'=>$data['good'],
        'energy_rage'=>$data['energy_rage'],
        'ges'=>$data['ges'],
        'rooms'=>$data['rooms']."pièce(s)",
        'square'=>$data['square']."m²",
      );
      // echo json_encode(array('error'=>true,'result'=>$input_rental)); exit;


      $result=PostedAdmob::where('id','=',$data['id'])->update($input_rental);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }
    public function addShoes(){
      $data=$_POST;
   //   echo json_encode(array('error'=>true,'result'=>$data)); exit;
      $input_shoes=array(
        'univer'=>$data['univer'],
        'shoes_type'=>$data['shoes_type'],
        'shoes_size'=>$data['shoes_size'],
        'shoes_marker'=>$data['shoes_marker'],
        'shoes_color'=>$data['shoes_color'],
        'shoes_status'=>$data['shoes_status'],
      );
      // echo json_encode(array('error'=>true,'result'=>$input_rental)); exit;


      $result=PostedAdmob::where('id','=',$data['id'])->update($input_shoes);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }
    public function addClothing(){
      $data=$_POST;
   //   echo json_encode(array('error'=>true,'result'=>$data)); exit;
      $input_shoes=array(
        'clothing_univer'=>$data['clothing_univer'],
        'clothing_type'=>$data['clothing_type'],
        'clothing_cut'=>$data['clothing_cut'],
        'clothing_mark'=>$data['clothing_mark'],
        'clothing_color'=>$data['clothing_color'],
        'clothing_state'=>$data['clothing_state'],
      );
      // echo json_encode(array('error'=>true,'result'=>$input_rental)); exit;


      $result=PostedAdmob::where('id','=',$data['id'])->update($input_shoes);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }

    public function addHousemate(){
      $data=$_POST;
   //   echo json_encode(array('error'=>true,'result'=>$data)); exit;
      $input_house=array(
        'energy_rage'=>$data['energy_rage'],
        'ges'=>$data['ges'],
        'rooms'=>$data['rooms']."pièce(s)",
        'square'=>$data['square']."m²",
      );
      // echo json_encode(array('error'=>true,'result'=>$input_rental)); exit;


      $result=PostedAdmob::where('id','=',$data['id'])->update($input_house);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }
    public function addShop(){
      $data=$_POST;
   //   echo json_encode(array('error'=>true,'result'=>$data)); exit;
      $input_shop=array(
        'energy_rage'=>$data['energy_rage'],
        'ges'=>$data['ges'],
        'square'=>$data['square']."m²",
      );
      // echo json_encode(array('error'=>true,'result'=>$input_rental)); exit;


      $result=PostedAdmob::where('id','=',$data['id'])->update($input_shop);
      if($result)
      {
        echo json_encode(array('error'=>false,'result'=>"success")); exit;
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"error")); exit;
      }
    }

    
}