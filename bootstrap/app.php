<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'check.Login' => \App\Http\Middleware\AuthMiddleware::class,
        ]);
    })
    // ->withEvents(function (Events $evnts):void{
    //     $evnts->listen(
    //         PostBecamePopular::class,
    //         SendPopularPostNotification::class,
    //     );
    // })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
