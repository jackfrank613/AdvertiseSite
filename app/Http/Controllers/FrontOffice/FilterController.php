<?php

namespace App\Http\Controllers\FrontOffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostedAdmob;

class FilterController extends Controller
{
    //
    public function filterFunction(Request $request)

    {
        
        $data=$_POST;
      // echo json_encode(array("result"=>$data['ad_type']));exit;
       //offer result or demands result
       $offer_result=PostedAdmob::where('adType',$data['ad_type'])->where('enable','=',1)->get();
       echo json_encode(array("result"=>$offer_result));exit;
       
       //max price result
        $result=PostedAdmob::whereBetween('price', [$data['min_price'], $data['max_price']])->get();

        
        
    }
}
