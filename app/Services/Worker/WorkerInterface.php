<?php

namespace App\Services\Worker;

interface WorkerInterface
{
    public function work();
    public function sleep();
}
