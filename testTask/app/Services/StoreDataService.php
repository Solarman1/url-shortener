<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\CutUrlModel;


class StoreDataService implements StoreDataInterface
{
    public function store($request)
    {
            // $new->url = $request;
            // $new->hash = $this->getRandHash(4);    
            // $new->save();
            // $this->insert($request);
            // $this->update($request);
            
            CutUrlModel::updateOrCreate(
                ['url' => $request],
                [
                    'hash'       => $this->getRandHash(4),
                    'usingCount' => 5
                ]
        );             
    }

    // protected function update($url)
    // {
    //     CutUrlModel::where('url', $url)
    //                 ->update(['hash' => $this->getRandHash(4)]);

    // }
    // protected function insert($url)
    // {
    //     CutUrlModel::create([
    //         'url' => $url,
    //         'hash' => $this->getRandHash(4)
    //     ]);
    // }

    protected function getRandHash($rand)
    {
        return $res = Str::random($rand);
    }

}