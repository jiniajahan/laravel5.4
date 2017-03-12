<?php

namespace App\Listeners;

use App\Events\TaskCreate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TaskCreate  $event
     * @return void
     */
    public function handle(TaskCreate $event)
    {
        var_dump($event->task['name']. 'created.');
        echo "hello event";
    }
}
