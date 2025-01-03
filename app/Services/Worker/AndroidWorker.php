<?php

namespace App\Services\Worker;

class AndroidWorker implements WorkerInterface
{
    public function work()
    {
        return 'Android Worker';
    }
    public function sleep()
    {
        //android not seep
        return null;
    }
}
