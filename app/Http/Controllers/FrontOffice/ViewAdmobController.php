<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
use App\JamiiUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use App\StateModel;
use App\SubCategory;
use App\FavoriteModel;

use App\ResearchModel;
use Carbon\Carbon;


class ViewAdmobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  
       
       //print_r($state);exit;
        // print_r($request->sub);exit;
        $ad_type=isset($request->ad_type)? $request->ad_type: "type";
        $search=isset($request->search)? $request->search: "search";
        $location=isset($request->location)?$request->location: "location";
        $distance=isset($request->distance)?$request->distance : "distance";
        $current_page=isset($request->page)?$request->page:1;
        $min_price=isset($request->min_price)?$request->min_price:"Prix min";
        //  print_r($min_price);exit;
        $max_price=isset($request->max_price)?$request->max_price:"Prix max";
        $urgent=isset($request->ur)?$request->ur:0;
        //  print_r($urgent);exit;
        $title=isset($request->it)?$request->it:0;
        $page_count=isset($request->page_count)?$request->page_count:20;
        $count=isset($request->count)?$request->count:PostedAdmob::count();
        $offset=0;
        $st_name="";
        $sub_name="";
        $st_id=isset($request->state)?$request->state:0;
        $scategory=isset($request->sub)?$request->sub:0;
        if($st_id !=0)
        {
            $states=StateModel::all();
            foreach($states as $one)
            {
                if($one->st_id == $st_id)
                {
                    $st_name=$one->st_name;
                    break;
                }
            }
        }
        else{
            $st_name="Toute la France";
        }

        if($scategory !=0)
        {
          $subcategories=SubCategory::all();
          foreach($subcategories as $one)
          {
              if($one->s_id==$scategory)
              {
                 $sub_name=$one->sname;
                 break;
              }
          }
        }
        else{
             $sub_name="Annonces";
        }
        // print_r($st_name);exit;
        if($search == "search" && $ad_type == "type" &&  $location == "location" && $distance == "distance" && $min_price == "Prix min" && $max_price == "Prix max" && $urgent == 0 && $title == 0){
        
           
            // print_r($count);exit;
            if($current_page == 1)
            {
                $offset=0;
            }
            else
            {
                $offset = $page_count*($current_page-1)+1;
            }
                // 
             if($scategory !=0)
             {
                $admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id','=',$scategory]])->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                $count=count($admobs);
               
             }
             else if($st_id !=0){
                 
                $admobs=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id','=',$st_id]])->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                $count=count($admobs);
              
             }
             else{

                $admobs=PostedAdmob::where('enable',1)->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
                $count=count($admobs);
            }
            
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

                    if($urgent !=0 && $min_price != "Prix min" && $max_price != "Prix max")

                    {

                        if($st_id !=0)
                        {
                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_boost.star_style',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            // print_r($count);exit;
                        }
                        else if($scategory !=0){

                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.star_style',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            // print_r($count);exit;
                        }
                        else{
                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_boost.star_style',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            
                        }
                        
                    }
                    else if($urgent !=0){
                        if($st_id !=0)
                        {
                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id],['jamii_boost.star_style',1]])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            // print_r($count);exit;
                        }
                        else if($scategory !=0){

                          $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.star_style',1]])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            // print_r($count);exit;
                        }
                        else{
                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_boost.star_style',1]])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            
                        }


                    }
                    else if($min_price != "Prix min" && $max_price != "Prix max")
                    {
                        if($st_id !=0)
                        {
                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            // print_r($count);exit;
                        }
                        else if($scategory !=0){

                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            // print_r($count);exit;
                        }
                        else{
                             $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            
                        }

                    }
                else{
                        if($st_id !=0)
                        {
                            $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.state_id',$st_id]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                            //print_r($count);exit;
                        }
                        else if($scategory !=0){
                            $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%'],['jamii_postedadmob.sub_id',$st_id]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();

                        }
                        else{
                            $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.subject','LIKE','%'.$search.'%']])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->offset($offset)->limit($page_count)->get()->count();
                            
                        }
                    }

                }
                else if($urgent != 0)
                {
                    if($st_id !=0)
                    {
                        $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id],['jamii_boost.star_style',1]])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();

                    }
                    else if($scategory !=0){

                        $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory],['jamii_boost.star_style',1]])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();

                    }
                    else{
                        $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_boost.star_style',1]])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();

                    }

                }
                else if($min_price != "Prix min" || $max_price != "Prix max")
                {
                   if($st_id !=0)
                   {
                        $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.state_id',$st_id]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();

                   }
                   else if($scategory !=0){
                        $count=PostedAdmob::where([['jamii_postedadmob.enable',1],['jamii_postedadmob.sub_id',$scategory]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();
                         
                   }
                   else{
                        $count=PostedAdmob::where([['jamii_postedadmob.enable',1]])->whereBetween('jamii_postedadmob.price',[$min_price,$max_price])->offset($offset)->limit($page_count)->leftJoin('jamii_boost','jamii_postedadmob.boost_id','=','jamii_boost.b_id')->get()->count();

                   }

                }

                else{
                    
                }

            }
            else{

            }
        }
        // print_r($request->page);exit;
        return view('frontoffice.home.displayadmob')->with(compact('ad_type','search','location','distance','current_page','count','page_count','min_price','max_price','title','urgent','st_name','st_id','sub_name','scategory'));
   //    return view('frontoffice.home.displayadmob')->with(compact('result','count', 'current_page', 'page_count','particular_count','professional_count','pagenate_items','admobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $admob=PostedAdmob::where('id',$id)->leftJoin('jamii_user_table','jamii_user_table.u_id','=','jamii_postedadmob.user_id')->first()->toarray();
        $similars=PostedAdmob::where('sub_id',$admob['sub_id'])->where('id','!=',$id)->limit(4)->get()->toarray();
        // print_r($admob);exit;
         return view('frontoffice.home.showitem')->with(compact('admob','similars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendMailbox($userid,$name)
    {
       // print_r($userid);exit;
       
        return view('frontoffice.home.chat')->with(compact('name','userid'));
    }

    public function getAreaProduction(Request $request ,$state){
     //   print_r($state);exit;
        $states=StateModel::all();
        foreach($states as $one)
        {
            if($one->r_name == $state)
            {
                $st_id=$one->st_id;
                $st_name=$one->st_name;
            }
        }
        $scategory=0;
        $sub_name="Annonces";
        // print_r($st_id);exit;
        $ad_type=isset($request->ad_type)? $request->ad_type: "type";
        $search=isset($request->search)? $request->search: "search";
        $location=isset($request->location)?$request->location: "location";
        $distance=isset($request->distance)?$request->distance : "distance";
        $current_page=isset($request->page)?$request->page:1;
        $min_price=isset($request->min_price)?$request->min_price:"Prix min";
        //  print_r($min_price);exit;
        $max_price=isset($request->max_price)?$request->max_price:"Prix max";
        $urgent=isset($request->ur)?$request->ur:0;
        //  print_r($urgent);exit;
        $title=isset($request->it)?$request->it:0;
        $page_count=isset($request->page_count)?$request->page_count:20;
        $count=isset($request->count)?$request->count:PostedAdmob::count();
        $offset=0;
        if($search == "search" && $ad_type == "type" &&  $location == "location" && $distance == "distance" && $min_price == "Prix min" && $max_price == "Prix max" && $urgent == 0 && $title == 0){
        
           
           // print_r($count);exit;
           if($current_page == 1)
           {
               $offset=0;
           }
           else
           {
               $offset = $page_count*($current_page-1)+1;
           }
            // print_r($offset);exit;
             $admobs=PostedAdmob::where([['enable',1],['state_id',$st_id]])->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
             $count=count($admobs);
           //  print_r($count);exit;
        }
        else{

        }

        return view('frontoffice.home.displayadmob')->with(compact('ad_type','search','location','distance','current_page','count','page_count','min_price','max_price','title','urgent','st_name','st_id','scategory','sub_name'));

    }

    public function upVote(){
        $data=$_POST;
        $userid=Session::get('user_id');
        $vote_check=FavoriteModel::where('post_id','=',$data['id'])->first();
      
        if(!isset($vote_check))
        {
            // echo json_encode(array('error'=>false,'result'=>"error"));exit;
            $input_vote=array(
                'user_id'=>$userid,
                'post_id'=>$data['id'],
                'status'=>$data['vote']
              );
             $favoriteid=FavoriteModel::insertGetId($input_vote);
             echo json_encode(array('error'=>false,'result'=>$favoriteid));exit;
        }
        else{
            echo json_encode(array('error'=>true,'result'=>"you have vote about this advertise already!"));exit;
           
        }
        
        
    }
    public function downVote(){
         
        $data=$_POST;
      //  echo json_encode(array('error'=>false,"result"=>$data['favoriteid']));
        $input_vote=array(
            'f_id'=>$data['favoriteid'],
            'status'=>$data['vote']
        );
        $check=FavoriteModel::where('f_id','=',$data['favoriteid'])->delete();
        if($check)
        {
           echo json_encode(array('error'=>false,"result"=>"success"));
        }
        else{
            echo json_encode(array('error'=>true,"result"=>"error"));
        }

    }


    public function addPartSearch(){
        $data=$_POST;
        $user_id=Session::get('user_id');
        if(!empty($user_id)){
            $dt = Carbon::now();
            $input_research=array(
                'category'=>$data['search'],
                'r_user_id'=>$user_id,
                'r_state'=>$data['r_state'],
                'save_time'=>$dt->toDayDateTimeString()
              );
              $research_id=ResearchModel::insertGetId($input_research);
              echo json_encode(array('error'=>false,"result"=>$research_id));
        }
        else{
            echo json_encode(array('error'=>true,"result"=>"You didn't register yet!"));
        }

    }
}
