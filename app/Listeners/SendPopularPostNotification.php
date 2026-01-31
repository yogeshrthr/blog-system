<?php

namespace App\Listeners;

use App\Events\PostBecamePopular;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\PopularPostMail;
use App\Jobs\SendPopularEmailJob;

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
        // dd($event->post->user->email);
       // Send email to post author
        // Mail::to($event->post->user->email)
        //     ->send(new PopularPostMail($event->post));
        SendPopularEmailJob::dispatch($event->post);
    }
   
    
}
