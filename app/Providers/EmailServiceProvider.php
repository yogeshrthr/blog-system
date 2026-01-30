<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{        /**
     * Register services.
     * यहाँ हम Container को बताते हैं कि MyService कैसे बनाना है
     */
    public function register()
    {
        // ===========================
        // METHOD 1: Simple Bind
        // ===========================
        $this->app->bind('my.service', function() {
            return new MyService(); // हर बार नया instance
        });
        
        // ===========================
        // METHOD 2: Singleton
        // ===========================
        // $this->app->singleton('my.singleton.service', function() {
        //     return new MyService(); // पूरे app में एक ही instance
        // });
        
        // // ===========================
        // // METHOD 3: Bind with Class Name
        // // ===========================
        // $this->app->bind(MyService::class, function() {
        //     return new MyService();
        // });
        
        // // ===========================
        // // METHOD 4: Instance Binding
        // // ===========================
        // $myCustomService = new MyService();
        // $myCustomService->customProperty = "Custom Value";
        // $this->app->instance('custom.service', $myCustomService);
    }
    

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
