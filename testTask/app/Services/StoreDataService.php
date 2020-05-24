<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\CutUrlModel;


class StoreDataService implements StoreDataInterface
{
    public function store($request)
    {
        // CutUrlModel::updateOrCreate(
        //         ['url' => $request],
        //         [
        //             'hash'       => $this->getRandHash(4),
        //             'usingCount' => 5
        //         ]
        // );
        CutUrlModel::create(
            ['url' => $request,
            'hash' => $this->getRandHash(4),
            'usingCount' => 5
            ]);             
    }

    protected function getRandHash($rand)
    {
        return $res = Str::random($rand);
    }

}