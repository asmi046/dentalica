<?php

use Illuminate\Foundation\Application;
use MoonShine\Http\Middleware\Authenticate;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        using: function () {
            Route::middleware('web')
                ->group(base_path('routes/asmi_all.php'));

            Route::middleware('web')
                ->group(base_path('routes/asmi_consultation.php'));

            Route::middleware(['moonshine', Authenticate::class])
                ->group(base_path('routes/moonshine.php'));

        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
