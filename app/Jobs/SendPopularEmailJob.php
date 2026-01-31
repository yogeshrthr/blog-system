<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Post;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\PopularPostMail;

class SendPopularEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $post;
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    public function handle()
    {
        // This runs in background queue
        Mail::to($this->post->user->email)
            ->send(new PopularPostMail($this->post));
    }
}
