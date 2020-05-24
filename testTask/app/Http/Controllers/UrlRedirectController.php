<?php

namespace App\Http\Controllers;


use App\Repository\Interfaces\RedirectRepositoryInterface;


class UrlRedirectController extends Controller
{
    protected $getRedirectHash;
    //
    public function __construct(RedirectRepositoryInterface $getRedirectHash)
    {
        $this-> getRedirectHash = $getRedirectHash;
    }

    public function redirect($redirectUrlHash)
    {
        $url = $this->getRedirectHash->getHash($redirectUrlHash);
        //dd('thg');
        $countUsing = $this->getRedirectHash->getCount($redirectUrlHash);
        
        if($countUsing >= 0)
            return redirect($url->url);
        else
        return redirect(abort(404));
     
           
    }
}
