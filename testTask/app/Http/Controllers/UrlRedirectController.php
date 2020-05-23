<?php

namespace App\Http\Controllers;


use App\Models\CutUrlModel;
use Illuminate\Support\Facades\DB;

class UrlRedirectController extends Controller
{
    //
    public function redirect($redirectUrlHash)
    {
        $url = CutUrlModel::where('hash',$redirectUrlHash) ->first();
        CutUrlModel::where('hash',$redirectUrlHash)->update(['usingCount' =>DB::raw('usingCount - 1')]);
        //dd('thg');
        return redirect($url->url);
        
     
     
     //   $usingCountFromDb = CutUrlModel::where('usingCount') -> get();
     
           
       
           // return abort(404);  
         
    }
}
