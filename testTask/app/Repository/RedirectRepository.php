<?php

namespace App\Repository;

use App\Models\CutUrlModel;
use App\Repository\Interfaces\RedirectRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RedirectRepository implements RedirectRepositoryInterface
{
    public function getHash($redirectUrlHash){

        $url = CutUrlModel::where('hash',$redirectUrlHash)
        ->first();

        CutUrlModel::where('hash',$redirectUrlHash)
        ->update(['usingCount' =>DB::raw('usingCount - 1')]);

        return $url;
    }
    public function getCount($redirectUrlHash){

        $countHash = CutUrlModel::where('hash', $redirectUrlHash)->value('usingCount');
        //dd($countHash);
        return $countHash;
    }
}