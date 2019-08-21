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
           $side_admobs=[];
           $top_admobs=[];
           $offset=0;
           $s_offset=0;
     
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
            $particular_count=JamiiUser::where('type','=','particular')->get()->count();
            $professional_count=JamiiUser::where('type','=','professional')->get()->count();
            $n_admobs=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
            $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
            $admobs['n_admob']=$n_admobs;
            $admobs['t_admob']=$top_admobs;
            $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
            $side_admobs=$s_admobs;
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
                    // echo "trexct";exit;

                    if( $min_price != "Prix min"  && $max_price != "Prix max")
                    {
                     //   echo json_encode(array("result"=>"test"));exit;
                       
                       if($urgent != 0)
                       {
                        //echo json_encode(array("result"=>"test"));exit;
                        $n_admobs=PostedAdmob::where('jamii_postedadmob.enable',1)->where('jamii_postedadmob.subject','LIKE','%' .$search . '%')->where([['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray(); 
                        $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1],['jamii_boost.star_style']])->where('subject','LIKE','%' .$search. '%')->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                        $admobs['n_admob']=$n_admobs;
                        $admobs['t_admob']=$top_admobs; 
                        $count=count($n_admobs); 
     
                        // $admobs=PostedAdmob::where('enable',1)->where('subject',$search)->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                         $particular_count=PostedAdmob::where([['jamii_user_table.type','particular'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                         $professional_count=PostedAdmob::where([['jamii_user_table.type','professional'],['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%' .$search . '%'],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();                  
                       //  $professional_count=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();            
                         $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1],['jamii_boost.star_style',1]])->where('subject','LIKE','%' .$search . '%')->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                         $side_admobs=$s_admobs;
                       }
                       else{
                        $n_admobs=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray(); 
                        $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->where('subject','LIKE','%' .$search. '%')->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                        $admobs['n_admob']=$n_admobs;
                        $admobs['t_admob']=$top_admobs; 
                        $count=count($n_admobs); 
                        // $admobs=PostedAdmob::where('enable',1)->where('subject',$search)->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                         $particular_count=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                         $professional_count=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();            
                         $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->where('subject','LIKE','%' .$search . '%')->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                         $side_admobs=$s_admobs;
                       }
                       
                    }
                    else{

                        // echo json_encode(array("result"=>"test"));exit;
                       
                        $n_admobs=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                    
                        $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->where('subject','LIKE','%' .$search. '%')->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                      //  $admobs=PostedAdmob::where('enable',1)->where('subject','like',$search)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                        // print_r($top_admobs);exit;
                        $admobs['n_admob']=$n_admobs;
                        $admobs['t_admob']=$top_admobs; 
                        $count=count($n_admobs);
    
                        $particular_count=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                        $professional_count=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search . '%')->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count(); 
                      
                        $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->where('subject','LIKE','%' .$search . '%')->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                        $side_admobs=$s_admobs;
                    }
                   
                                    
                }
         
                else if($urgent != 0)
                {
                    $n_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.star_style',1]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray(); 
                    $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1],['jamii_boost.star_style',1]])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                    $admobs['n_admob']=$n_admobs;
                    $admobs['t_admob']=$top_admobs; 
                    $count=count($n_admobs); 
                    $particular_count=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                    $professional_count=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();            
                    $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]],['jamii_boost.star_style',1])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                    $side_admobs=$s_admobs;
                }
                else if($min_price != "Prix min"  && $max_price != "Prix max")
                {
                    //echo json_encode(array("result"=>$max_price));exit;

                    $n_admobs=PostedAdmob::where('enable',1)->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray(); 
                    $top_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.top_style',1]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                    
                   $admobs['n_admob']=$n_admobs;
                   $admobs['t_admob']=$top_admobs; 
                   $count=count($n_admobs); 
                //    echo json_encode(array("result"=>$n_admobs));exit;
                  //  $admobs=PostedAdmob::where('enable',1)->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->get()->toarray();
                   
                    $particular_count=PostedAdmob::where('enable',1)->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','particular')->get()->count();
                   
                    $professional_count=PostedAdmob::where('enable',1)->whereBetween('price',[$min_price, $max_price])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_user_table','jamii_postedadmob.user_id','=','jamii_user_table.u_id')->where('type','professional')->get()->count();
                    $s_admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.pay_active',1],['jamii_boost.side_style',1]])->whereBetween('price',[$min_price, $max_price])->inRandomOrder()->offset($s_offset)->limit(3)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
                    $side_admobs=$s_admobs;
    
                   
                }
            
                else{
                    
                }  
        
            }
       
         }
        
         $today = date('Y-m-d');
         $yesterday = date('Y-m-d', strtotime('-1 days'));
         foreach($admobs['n_admob'] as $one){
             $date=date('Y-m-d',strtotime($one['create_time']));
             if(strtotime($date) == strtotime($today)){
                 $one['create_time'] = "Today " . date('H:i',strtotime($one['create_time']));
             }else if(strtotime($date) == strtotime($yesterday)){
                 $one['create_time'] = "Yesterday " . date('H:i',strtotime($one['create_time']));
                 
             }
             $admobs['n_admob'][]= $one;
            }
        
            
           // echo json_encode(array("result"=>$admobs));exit;

         $returnHTML=view('frontoffice.others.firstadmobe')->with(compact('admobs','count', 'current_page', 'page_count','particular_count','professional_count','min_price','max_price','ad_type','search','location','distance','urgent','title'))->render();
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
