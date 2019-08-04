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
       
         if($data['ad_type'] == "type" && $data['search'] == "search" && $data['location'] && $data['distance'] == "distance")

         {
            $count=PostedAdmob::count();
            $page_count = 40;
            $offset = 0;
            $particular_count=JamiiUser::where('type','=','particular')->get()->count();
            $professional_count=JamiiUser::where('type','=','professional')->get()->count();
            $admobs=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
          //  $admobs=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->paginate(10);
            
           // $pagenate_items=PostedAdmob::where('enable',1)->paginate(40);
            // print_r(count($pagenate_items));exit;
    
            $current_page = 1;
            $today = date('Y-m-d');
            $yesterday = date('Y-m-d', strtotime('-1 days'));
            // echo $yesterday;exit;
            foreach($admobs as $one){
                $date=date('Y-m-d',strtotime($one['create_time']));
                if(strtotime($date) == strtotime($today)){
                    $one['create_time'] = "Today " . date('H:i',strtotime($one['create_time']));
                }else if(strtotime($date) == strtotime($yesterday)){
                    $one['create_time'] = "Yesterday " . date('H:i',strtotime($one['create_time']));
                    
                }
                $result[] = $one;
            }
    
           //offer result or demands result
          // $offer_result=PostedAdmob::where('adType',$data['ad_type'])->where('enable','=',1)->get();
           
           //max price result
        //  $result=PostedAdmob::whereBetween('price', [$data['min_price'], $data['max_price']])->paginate(1);
        

         }
         else{
          
            $page_count = 40;
            $offset = 0;
            $particulars=[];
            $professionals=[];

            $admobs=PostedAdmob::where('enable',1)->where('adType',$data['ad_type'])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
            $count=count($admobs);
            foreach($admobs as $admob)
            {  
                $particulars=JamiiUser::where('type','=','particular')->where('u_id',$admob['user_id'])->get();
                $professionals=JamiiUser::where('type','=','professional')->where('u_id',$admob['user_id'])->get();
            }
            
           $particular_count=count($particulars);
           $professional_count=count($professionals);

           $current_page = 1;
           $today = date('Y-m-d');
           $yesterday = date('Y-m-d', strtotime('-1 days'));
           // echo $yesterday;exit;
           foreach($admobs as $one){
               $date=date('Y-m-d',strtotime($one['create_time']));
               if(strtotime($date) == strtotime($today)){
                   $one['create_time'] = "Today " . date('H:i',strtotime($one['create_time']));
               }else if(strtotime($date) == strtotime($yesterday)){
                   $one['create_time'] = "Yesterday " . date('H:i',strtotime($one['create_time']));
                   
               }
               $result[] = $one;
           }
         }
         $returnHTML=view('frontoffice.others.firstadmobe')->with(compact('result','count', 'current_page', 'page_count','particular_count','professional_count'))->render();
          echo json_encode(array("result"=>$returnHTML));exit; 
        
    }
}
