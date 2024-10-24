<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\EnsureUserIsSubscribed;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            // 'auth' => Illuminate\Auth\Middleware\Authenticate::class,
            'checklogin' => \App\Http\Middleware\LoginMiddleware::class,
            'admin' => \App\Http\Middleware\AuthenticateMiddleware::class,
            // 'admin' => \App\Http\Middleware\AuthenticateMiddleware::class,
            // 'auth.basic' => Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
            // 'auth.session' => Illuminate\Session\Middleware\AuthenticateSession::class,
            // 'cache.headers' => Illuminate\Http\Middleware\SetCacheHeaders::class,
            // 'can' => Illuminate\Auth\Middleware\Authorize::class,
            // 'guest' => Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,
            // 'password.confirm	' => Illuminate\Auth\Middleware\RequirePassword::class,
            // 'precognitive' => Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
            // 'signed' => Illuminate\Routing\Middleware\ValidateSignature::class,
            // 'throttle' => Illuminate\Routing\Middleware\ThrottleRequests::class,
            // 'verified' => Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
