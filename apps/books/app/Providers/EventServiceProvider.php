<?php

namespace App\Providers;

use App\Jobs\ExampleJob;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
//    /**
//     * The event listener mappings for the application.
//     *
//     * @var array
//     */
//    protected $listen = [
//        \App\Events\ExampleEvent::class => [
//            \App\Listeners\ExampleListener::class,
//        ],
//    ];

    public function boot()
    {
        $this->app->bind(ExampleJob::class . '@handle', function ($job) {
            return $job->handle();
        });
    }
}
