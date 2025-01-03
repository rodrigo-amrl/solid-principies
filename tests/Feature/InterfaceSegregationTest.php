<?php

namespace Tests\Feature;

use App\Services\Worker\AndroidWorker;
use App\Services\WorkerRefactored\AndroidWorker as AndroidWorkerRefactored;
use Tests\TestCase;

class InterfaceSegregationTest extends TestCase
{
    public function test_android_worker()
    {
        $worker = new AndroidWorker();
        $this->assertEquals('Android Worker', $worker->work());
        $this->assertNull($worker->sleep());
    }
    public function test_android_worker_refactored()
    {
        $worker = new AndroidWorkerRefactored();
        $this->assertEquals('Android Worker', $worker->work());
    }
}