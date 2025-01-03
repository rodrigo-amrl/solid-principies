<?php

namespace App\Services\WorkerRefactored;

class HumanWorker implements SleepInterface, WorkebleInterface
{
    public function work()
    {
        return 'Human Working';
    }
    public function sleep()
    {
        return 'Sleeping';
    }
}
