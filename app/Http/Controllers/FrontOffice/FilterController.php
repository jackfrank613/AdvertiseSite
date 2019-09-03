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
           $st_id=$data['st_id'];
           $scategory=$data['scategory'];
           $admobs=[];
           $side_admobs=[];
           $top_admobs=[];
           $offset=0;
           $s_offset=0;
         // echo json_encode(array("result"=>$scategory));exit;
         if($search == "search" && $ad_type == "type" &&  $location == "location" && $distance == "distance" && $min_price == "Prix min" && $max_price == "Prix max" && $urgent == 0 && $title == 0)

         {       
  
            // 
            if($current_page == 1)
            {
                $offset=0;
                $s_offset=0;
            }
            else
            {
                $offset = $page_count*($current_page-1)+1;
                $s_offset=3*($current_page-1)+1;
            }
           // 

            if($st_id !=0) 
            {
              //
            // echo json_encode(array("result"=>$st_id));exit;
              $particular_count=JamiiUser::where([['jamii_user_table.type','=','particular'],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_postedadmob','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->count();
              $professional_count=JamiiUser::where([['jamii_user_table.type','=','professional'],['jamii_postedadmob.state_id','=',$st_id]])->leftJoin('jamii_postedadmob','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->count();
           //   $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable','=',1],['jamii_boost.top_style','=',0]])->orWhere([['jamii_postedadmob.boost_id','=',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();             
              $n_admobs=PostedAdmob::where([['jamii_postedadmob.state_id','=',$st_id],['jamii_postedadmob.enable','=',1],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
              $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
              $admobs['n_admob']=$n_admobs;
              $admobs['t_admob']=$top_admobs;
            //   echo json_encode(array("result"=>$admobs));exit;
              $count=PostedAdmob::where('jamii_postedadmob.state_id',$st_id)->get()->count(); 
              $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
              $side_admobs=$s_admobs;

            }
             else if($scategory !=0){
                 // echo json_encode(array("result"=>$st_id));exit;
              $particular_count=JamiiUser::where([['jamii_user_table.type','=','particular'],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_postedadmob','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->count();
              $professional_count=JamiiUser::where([['jamii_user_table.type','=','professional'],['jamii_postedadmob.sub_id','=',$scategory]])->leftJoin('jamii_postedadmob','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->count();
           //   $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable','=',1],['jamii_boost.top_style','=',0]])->orWhere([['jamii_postedadmob.boost_id','=',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();             
              $n_admobs=PostedAdmob::where([['jamii_postedadmob.sub_id','=',$scategory],['jamii_postedadmob.enable','=',1],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
              $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
              $admobs['n_admob']=$n_admobs;
              $admobs['t_admob']=$top_admobs;
            //   echo json_encode(array("result"=>$admobs));exit;
              $count=PostedAdmob::where('jamii_postedadmob.sub_id',$scategory)->get()->count(); 
              $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
              $side_admobs=$s_admobs;
             }
            else{
              $particular_count=JamiiUser::where('type','=','particular')->get()->count();
              $professional_count=JamiiUser::where('type','=','professional')->get()->count();
              $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable','=',1],['jamii_postedadmob.top_check','=',0]])->orWhere('jamii_postedadmob.boost_id','=',0)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();             
              $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
              $admobs['n_admob']=$n_admobs;
              $admobs['t_admob']=$top_admobs;
              $count=count(PostedAdmob::all()); 
            //  echo json_encode(array("result"=>$admobs));exit;
              $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
              $side_admobs=$s_admobs;
            }
                     
         }
         else{
           
           // echo json_encode(array("result"=>$min_price));exit;
            if($ad_type == "sell")
            {

               
                    if($current_page == 1)
                    {
                        $offset=0;
                        $s_offset=0;
                    }
                    else
                    {
                        $offset = $page_count*($current_page-1)+1;
                        $s_offset=3*($current_page-1)+1;
                    }
   
                 if($search != "search")
                    {
                   

                         if($urgent !=0 && $min_price !=0 && $max_price !=0){
                                  if($st_id !=0){
                                  
                                    $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $admobs['n_admob']=$n_admobs;
                                    $admobs['t_admob']=$top_admobs; 
                                    $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                    $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                    $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $side_admobs=$s_admobs;
                                  }
                                  else if($scategory !=0){
                                    $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $admobs['n_admob']=$n_admobs;
                                    $admobs['t_admob']=$top_admobs; 
                                  
                                    $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                    $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                    $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $side_admobs=$s_admobs;
                                  }
                                  else{                      
                                    $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $admobs['n_admob']=$n_admobs;
                                    $admobs['t_admob']=$top_admobs;
                                    $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                    $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                    $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                    $side_admobs=$s_admobs;
                                  
                                  }
                         }
                         else if($urgent !=0){
                                    if($st_id !=0){
                                  
                                      $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $admobs['n_admob']=$n_admobs;
                                      $admobs['t_admob']=$top_admobs; 
                                    
                                      $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                      $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                      $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $side_admobs=$s_admobs;
                                    }
                                    else if($scategory !=0){
                                      $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $admobs['n_admob']=$n_admobs;
                                      $admobs['t_admob']=$top_admobs; 
                                  
                                      $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                      $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                      $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $side_admobs=$s_admobs;
                                    }
                                      else{
                
                                    
                                      $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $admobs['n_admob']=$n_admobs;
                                      $admobs['t_admob']=$top_admobs; 
                                  
                                      $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                      $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                      $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $side_admobs=$s_admobs;
                                    
                                    }

                         }
                         else if($min_price !=0 && $max_price !=0){

                                      if($st_id !=0){
                                    
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                      
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      }
                                      else if($scategory !=0){
                  
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                      
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                  
                                        }
                                        else{
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',0]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                      
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%']])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%']])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      
                                      }
                         }
                         else{
                      

                                      if($st_id !=0){
                                  
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                    
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      }
                                      else if($scategory !=0){
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                      
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                    
                                      }
                                        else{
                                          
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.top_check',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%']])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%']])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      
                                      }  

                         }

                    
                    }
                  else if($urgent !=0){
                                      if($st_id !=0){
                                          
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        // echo json_encode(array("result"=>$top_admobs));exit;
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      }
                                      else if($scategory !=0){
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        // echo json_encode(array("result"=>$top_admobs));exit;
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                    
                                      }
                                    else{
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.top_check',0],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.top_check',1],['jamii_boost.star_style',1],['jamii_boost.pay_active',1]])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        // echo json_encode(array("result"=>$n_admobs));exit;
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      
                                      }

                  }
                  else if($min_price !=0 && $max_price !=0){

                                    
                                      if($st_id !=0){
                                          
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        // echo json_encode(array("result"=>$top_admobs));exit;
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      }
                                      else if($scategory !=0){
                    
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        // echo json_encode(array("result"=>$top_admobs));exit;
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      }
                                    else{
                                        $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.top_check',0]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.top_check',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $admobs['n_admob']=$n_admobs;
                                        $admobs['t_admob']=$top_admobs; 
                                        // echo json_encode(array("result"=>$n_admobs));exit;
                                        $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                        $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1]])->whereBetween('price',[$min_price, $max_price])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                        $side_admobs=$s_admobs;
                                      
                                      }


                  }
                  else{

                                          
                                    if($st_id !=0){
                                                          
                                      $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $admobs['n_admob']=$n_admobs;
                                      $admobs['t_admob']=$top_admobs; 
                                      // echo json_encode(array("result"=>$top_admobs));exit;
                                      $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                      $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                      $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.state_id',$st_id]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $side_admobs=$s_admobs;
                                    }
                                    else if($scategory !=0){
                  
                                      $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.pay_active',1],['jamii_postedadmob.top_check',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $admobs['n_admob']=$n_admobs;
                                      $admobs['t_admob']=$top_admobs; 
                                      // echo json_encode(array("result"=>$top_admobs));exit;
                                      $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                      $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                      $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_postedadmob.sub_id',$scategory]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $side_admobs=$s_admobs;
                                    }
                                  else{
                                      $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.top_check',0]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $t_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.top_check',1],['jamii_boost.pay_active',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->orderBy('jamii_postedadmob.create_time','desc')->inRandomOrder()->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $admobs['n_admob']=$n_admobs;
                                      $admobs['t_admob']=$top_admobs; 
                                      // echo json_encode(array("result"=>$n_admobs));exit;
                                      $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                                      $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1]])->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                                      $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                                      $side_admobs=$s_admobs;
                                    
                                    }


                  }
                       
            }
            else{

            }
       
         }
        
         $today = date('Y-m-d');
         $yesterday = date('Y-m-d', strtotime('-1 days'));
         $result=[];
         $result1=[];
         foreach($admobs['n_admob'] as $one){
             $date=date('Y-m-d',strtotime($one['create_time']));
             if(strtotime($date) == strtotime($today)){
                 $one['create_time'] = "Aujourd'hui" . date('H:i',strtotime($one['create_time']));
             }else if(strtotime($date) == strtotime($yesterday)){
                 $one['create_time'] = "Hier" . date('H:i',strtotime($one['create_time']));
                 
             }
             $result[]= $one;
            }
           
            foreach($admobs['t_admob'] as $one){
              $date=date('Y-m-d',strtotime($one['create_time']));
              if(strtotime($date) == strtotime($today)){
                  $one['create_time'] = "Aujourd'hui" . date('H:i',strtotime($one['create_time']));
              }else if(strtotime($date) == strtotime($yesterday)){
                  $one['create_time'] = "Hier" . date('H:i',strtotime($one['create_time']));
                  
              }
              $result1[]= $one;
             }
            
             $categories['n_category']=$result;
             $categories['t_category']=$result1;
            // echo json_encode(array("result"=>$categories));exit;

         $returnHTML=view('frontoffice.others.firstadmobe')->with(compact('categories','count', 'current_page', 'page_count','particular_count','professional_count','min_price','max_price','ad_type','search','location','distance','urgent','title','st_id','scategory'))->render();
         $returnSideHtml=view('frontoffice.others.sideadmobe')->with(compact('side_admobs'))->render();
    
         echo json_encode(array("result"=>$returnHTML,"sresult"=>$returnSideHtml));exit; 
    
   }


   public function getsubList(){
      
    $data=$_POST;
    // $data['text'] = "car";
    //echo json_encode(array('error'=>false,'result'=>"test"));exit;
    $result=PostedAdmob::where([['enable','=',1],['subject','LIKE','%' .$data['text'] . '%']])->get()->toarray();
    if(isset($result))
    {
        // echo json_encode($result);exit;
        $returnhtml=view('frontoffice.others.searchitem')->with(compact('result'))->render();
        // echo $returnhtml;exit;
        echo $returnhtml;exit;
    }
    else{
        echo json_encode(array('error'=>true,'result'=>'data is empty!'));exit;
    }


  }
}
