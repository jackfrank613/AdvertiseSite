<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
use App\JamiiUser;
use Carbon\Carbon;
class SearchController extends Controller
{
    //
    public function stateSearch(){
      // 
        $data=$_POST;
        $st_id=$data['state_id'];
        $image_url= url('/img/picture');
        $current_url="http://192.168.11.107/jamii/public/img/picture/";
        $result=[];
        if($st_id !=0)
        {
           
            $admobs=PostedAdmob::select('id','subject','camera','price','adName','star_style','pay_active','adress','post_time')->where([['jamii_postedadmob.state_id','=',$st_id],['jamii_postedadmob.enable','=',1]])->orderBy('jamii_postedadmob.create_time','desc')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();

        }
        else{
            $admobs=PostedAdmob::select('id','subject','camera','price','adName','star_style','pay_active','adress','post_time')->where([['jamii_postedadmob.enable','=',1]])->orderBy('jamii_postedadmob.create_time','desc')->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->toarray();
        
        }

        // $dt = Carbon::now();
        // echo json_encode(array("error"=>false,"result"=>$dt->toFormattedDateString()));exit;
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 days'));
        foreach($admobs as $one){
            $date=date('Y-m-d',strtotime($one['post_time']));
             if(strtotime($date) == strtotime($today)){
                 $one['post_time'] = "Aujourd'hui" . date('H:i',strtotime($one['post_time']));
             }else if(strtotime($date) == strtotime($yesterday)){
                 $one['post_time'] = "Hier" . date('H:i',strtotime($one['post_time']));           
             }

            $images=explode(",",$one['camera']);
            $temp=[];
            foreach($images as $item){
                
                $temp[]=$current_url.$item;
            }
            $one['camera'] = $temp;
            $result[]=$one;           
        }
        if(isset($admobs))
        {
            echo json_encode(array("error"=>false,"result"=>$result));exit;
        }
        else{
            echo json_encode(array("error"=>true,"result"=>"Aucune annonce trouvée !"));exit;
        }
    }
}
