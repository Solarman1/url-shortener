<?php

namespace App\Observers;

use App\Models\CutUrlModel;

class CutUrlObserver
{

    public function saving(CutUrlModel $cutUrlModel)
    {
       // print_r("creating");
        //dd(__METHOD__, $cutUrlModel);
    }

    public function creating(CutUrlModel $cutUrlModel)
    {
       // print_r("creating");
        //dd(__METHOD__, $cutUrlModel);
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
     
       
    }

    /**
     * Handle the cut url model "updated" event.
     *
     * @param  \App\Models\CutUrlModel  $cutUrlModel
     * @return void
     */
    public function updated(CutUrlModel $cutUrlModel)
    {
       // dd(__METHOD__, ("updated"));
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
        //dd(__METHOD__, $cutUrlModel);
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
        //dd('restored');
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
