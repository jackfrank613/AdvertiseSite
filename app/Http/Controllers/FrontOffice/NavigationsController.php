<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FavoriteModel;
use Illuminate\Support\Facades\Session;
class NavigationsController extends Controller
{
    // Mes recherches page call
    public function getResearch()
    {
        return view('frontoffice.navigations.research');
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
}
