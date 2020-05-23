<?php

namespace App\Http\Controllers;

use App\Models\CutUrlModel;
use App\Http\Requests\UrlValidateRequest;
use App\Services\StoreDataInterface;


class UrlUpdateController extends Controller
{
    public function index()
    {
        $cutUrls = CutUrlModel::latest()->get();
        
        return view('main', compact('cutUrls'));           
    }

    public function store(StoreDataInterface $serviceStore,UrlValidateRequest $requestDb)
    {
        $res = $requestDb->input('sourceUrl');
        //dd($res);
        $serviceStore->store($res);
       // dd('this');
        return redirect() -> route('home');
    }
}
