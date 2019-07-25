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
    public function index()
    {
        //  

        $count=PostedAdmob::count();
        $page_count = 40;
        $offset = 0;
        $particular_count=JamiiUser::where('type','=','particular')->get()->count();
        $professional_count=JamiiUser::where('type','=','professional')->get()->count();
        $admobs=PostedAdmob::orderBy('jamii_postedadmob.create_time','desc')->offset($offset)->limit($page_count)->leftJoin('jamii_subcategory','jamii_postedadmob.sub_id','=','jamii_subcategory.s_id')->get()->toarray();
        
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

        //print_r($result);exit;
        return view('frontoffice.home.displayadmob')->with(compact('result','count', 'current_page', 'page_count','particular_count','professional_count'));
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
      //  print_r($admob);exit;
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

        return view('frontoffice.home.sendmessage')->with(compact('name'));
    }
}
