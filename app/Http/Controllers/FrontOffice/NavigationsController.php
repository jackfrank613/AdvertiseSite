<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FavoriteModel;
use App\ResearchModel;
use Illuminate\Support\Facades\Session;
class NavigationsController extends Controller
{
    // Mes recherches page call
    public function getResearch(Request $request)
    {  
        $search=$request->search;
        $user_id=Session::get('user_id');
        $researches=ResearchModel::where('r_user_id',$user_id)->get()->toarray();
      //  print_r($researches);exit;
       return view('frontoffice.navigations.research')->with(compact('researches'));
    }
    //Mes favorits page call
    public function getFavorite()
    {
        $user_id=Session::get('user_id');
        $favorites=FavoriteModel::where([['jamii_favorite_table.user_id','=',$user_id],['jamii_favorite_table.status','=',1]])->leftJoin('jamii_postedadmob','jamii_postedadmob.id','=','jamii_favorite_table.post_id')->get()->toarray();
    
        return view('frontoffice.navigations.favorite')->with(compact('favorites'));
    }
      //Message page call
    public function getMessage()
    {
        return view('frontoffice/navigations/message');
    }

    public function deleteFavorite(){
      
        $data=$_POST;
      
        $check=FavoriteModel::where('f_id',$data['id'])->delete();
        
        if($check){
          echo json_encode(array('error'=>false,"result"=>'success'));exit;
        }
        else{
            echo json_encode(array('error'=>true,"result"=>'error'));exit;

        }
    }

    public function deleteResearch(){
      
        $data=$_POST;
       // echo 'test';exit;
        $check=ResearchModel::where('r_id',$data['r_id'])->delete();
        
        if($check){
          echo json_encode(array('error'=>false,"result"=>'success'));exit;
        }
        else{
            echo json_encode(array('error'=>true,"result"=>'error'));exit;

        }
    }
}
