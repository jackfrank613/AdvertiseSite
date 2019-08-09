<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
use App\JamiiUser;

class FilterController extends Controller
{
    //
    public function filterFunction(Request $request)

    {
        
      $ad_type=$request->ad_type;
      $search=$request->search;
      $location=$request->location;
      $distance=$request->distance;
      return view('frontoffice.home.displayadmob')->with(compact('ad_type','search','location','distance'));      
    }

    public function filter_ads(Request $request)

    {
           $data=$_POST;
        
           $ad_type=$data['ad_type'];
           $search=$data['search'];
           $location=$data['location'];
           $distance=$data['distance'];
           $min_price=$data['min_price'];
           $max_price=$data['max_price'];
           $urgent=$data['urgent'];
           $title=$data['title'];
           $count=$data['total_count'];
           $page_count=$data['page_count'];
           $current_page=$data['currentPage'];
           $admobs=[];
           $offset=0;
        //  echo json_encode(array("result"=>$min_price));exit;
         if($search == "search" && $ad_type == "type" &&  $location == "location" && $distance == "distance" && $min_price == "Prix min" && $max_price == "Prix max" && $urgent == 0 && $title == 0)

         {       
           
            // 
            if($current_page == 1)
            {
                $offset=0;
            }
            else
            {
                $offset = $page_count*($current_page-1)+1;
            }
           // 
            $particular_count=JamiiUser::where('type','=','particular')->get()->count();
            $professional_count=JamiiUser::where('type','=','professional')->get()->count();
            $admobs=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
           // echo json_encode(array("result"=>$admobs));exit;
         }
         else{
           
           
            if($ad_type == "sell")
            {
                if($current_page == 1)
                {
                    $offset=0;
                }
                else
                {
                    $offset = $page_count*($current_page-1)+1;
                }
   
                if($search != "search")
                {
               
                
                    $admobs=PostedAdmob::where('enable',1)->where('subject','like',$search)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                    $particular_count=PostedAdmob::where('enable',1)->where('subject','like',$search)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                    $professional_count=PostedAdmob::where('enable',1)->where('subject','like',$search)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();
                    $count=count($admobs);
                   // echo json_encode(array("result"=>$admobs));exit; 

                                    
                }
                else if($search !="search" && $min_price != "Prix min"  && $max_price != "Prix max")
                {
                   // echo json_encode(array("result"=>$min_price));exit;
                    $admobs=PostedAdmob::where('enable',1)->where('subject',$search)->whereBetween('price',array($min_price,$max_price))->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                    $particular_count=PostedAdmob::where('enable',1)->where('subject','like',$search)->whereBetween('price',array($min_price,$max_price))->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                    $professional_count=PostedAdmob::where('enable',1)->where('subject','like',$search)->whereBetween('price',array($min_price,$max_price))->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();

                    $count=count($admobs);
                }
                else if($urgent != 0)
                {

                     
                }
                else if($min_price != "Prix min"  && $max_price != "Prix max")
                {
                   
                    $admobs=PostedAdmob::where('enable',1)->whereBetween('price',array($min_price,$max_price))->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                   
                    $particular_count=PostedAdmob::where('enable',1)->whereBetween('price',array($min_price,$max_price))->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                   
                    $professional_count=PostedAdmob::where('enable',1)->whereBetween('price',array($min_price,$max_price))->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();
                   
                    //echo json_encode(array("result"=>$professional_count));exit;
                    $count=count($admobs);
                   
                }
                else if($search !="search"  && $min_price != "Prix min"  && $max_price != "Prix max"  && $urgent != 0)
                {

                  
                     

                }
                else if($search !="search"  && $min_price != "Prix min"  && $max_price != "Prix max"  && $title != 0)
                {

                }
                else{
                    
                }  
        
            }
       
         }
        
         $today = date('Y-m-d');
         $yesterday = date('Y-m-d', strtotime('-1 days'));
         foreach($admobs as $one){
             $date=date('Y-m-d',strtotime($one['create_time']));
             if(strtotime($date) == strtotime($today)){
                 $one['create_time'] = "Today " . date('H:i',strtotime($one['create_time']));
             }else if(strtotime($date) == strtotime($yesterday)){
                 $one['create_time'] = "Yesterday " . date('H:i',strtotime($one['create_time']));
                 
             }
             $result[]= $one;
            }
        
        
         //echo json_encode(array("result"=>$result));exit; 

         $returnHTML=view('frontoffice.others.firstadmobe')->with(compact('result','count', 'current_page', 'page_count','particular_count','professional_count','min_price','max_price','ad_type','search','location','distance','urgent','title'))->render();
          echo json_encode(array("result"=>$returnHTML));exit; 
    
   }
}
