<?php

namespace App\Listeners;

use App\Events\PostBecamePopular;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPopularPostNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostBecamePopular $event): void
    {
        //
    }
}
