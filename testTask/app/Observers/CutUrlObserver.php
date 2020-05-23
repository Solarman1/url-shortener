<?php

namespace App\Observers;

use App\Models\CutUrlModel;
use App\Http\Requests\UrlValidateRequest;

class CutUrlObserver
{

    public function creating(CutUrlModel $cutUrlModel)
    {
        print_r("creating");
       // dd(__METHOD__, $cutUrlModel);
    }
    /**
     * Handle the cut url model "created" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function created(CutUrlModel $cutUrlModel)
    {
        //
    }

    public function updating(CutUrlModel $cutUrlModel)
    {
        
      // dd(__METHOD__, ("updating"));
    }

    /**
     * Handle the cut url model "updated" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function updated(CutUrlModel $cutUrlModel)
    {
        //
    }
        /**
     * Handle the cut url model "deleting" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function deleting(CutUrlModel $cutUrlModel)
    {
        //
        dd(__METHOD__, $cutUrlModel);
    }

    /**
     * Handle the cut url model "deleted" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function deleted(CutUrlModel $cutUrlModel)
    {
        //
    }

    /**
     * Handle the cut url model "restored" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function restored(CutUrlModel $cutUrlModel)
    {
        //
    }

    /**
     * Handle the cut url model "force deleted" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function forceDeleted(CutUrlModel $cutUrlModel)
    {
        //
    }
}
