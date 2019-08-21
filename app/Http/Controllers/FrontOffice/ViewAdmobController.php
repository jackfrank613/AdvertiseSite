<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;
use App\JamiiUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;



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
             $admobs=PostedAdmob::where('enable',1)->orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
             $count=count($admobs);
            // print_r($count);exit;
           
        }
        else{
            if($ad_type == "sell")
            {
                if($search != "search")
                {

                   $count=PostedAdmob::where('enable',1)->where('subject','LIKE','%' .$search. '%')->get()->count();
                   
                  // print_r($count);exit;


                }
                else if($search !="search" || $min_price != "Prix min" || $max_price != "Prix max")
                {

                }
                else if($urgent != 0)
                {

                }
                else if($min_price != "Prix min" || $max_price != "Prix max")
                {

                }
                else if($search !="search" || $min_price != "Prix min" || $max_price != "Prix max" || $urgent != 0)
                {

                }
                else if($search !="search" || $min_price != "Prix min" || $max_price != "Prix max" || $title != 0)
                {

                }
                else{
                    
                }

            }
        }
        // print_r($request->page);exit;
        return view('frontoffice.home.displayadmob')->with(compact('ad_type','search','location','distance','current_page','count','page_count','min_price','max_price','title','urgent'));
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
       
        return view('frontoffice.home.sendmessage')->with(compact('name','userid'));
    }

    public function getAreaProduction(){

    }
}
