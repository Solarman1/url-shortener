<?php   

namespace App\Repository\Interfaces;

use App\Models\CutUrlModel;

interface RedirectRepositoryInterface{
    public function getHash($hash);
    public function getCount($hash);
}

