<?php

// app/Jobs/SendNewPostNotification.php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class SendNewPostNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $post;
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    public function handle()
    {
        // Send email to admin
        Mail::raw("New post created: {$this->post->title}", function($message) {
            $message->to('admin@example.com')
                    ->subject('New Blog Post Created');
        });
        
        // Send notification to subscribers
        // (You can add more logic here)
        
        // Log for debugging
        \Log::info("Notification sent for post: {$this->post->id}");
    }
}
