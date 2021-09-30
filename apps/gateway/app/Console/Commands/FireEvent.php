<?php

namespace App\Console\Commands;

use App\Jobs\ExampleJob;
use Illuminate\Console\Command;

class FireEvent extends Command
{
    protected $signature = 'fire';

    public function handle()
    {
        ExampleJob::class->dispatch();
    }
}
