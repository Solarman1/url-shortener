<?php

namespace App\Http\Controllers;


use App\Models\CutUrlModel;
use Illuminate\Support\Facades\DB;

class UrlRedirectController extends Controller
{
    //
    public function redirect($redirectUrlHash)
    {
        $url = CutUrlModel::where('hash',$redirectUrlHash) -> first();
      
        DB::table('cut_url_models')->decrement('usingCount');
        $usingCountFromDb = CutUrlModel::where('usingCount') -> get();
        if(count($usingCountFromDb) > 0)
        {
            return redirect($url->url);
        }
        else
        {
            return abort(404);  
         
        }    
    }
}
