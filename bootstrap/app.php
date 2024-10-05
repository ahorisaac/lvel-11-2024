<?php

use App\Http\Middleware\CanViewPostMiddleware;
use App\Http\Middleware\IsAdminMiddleware;
use App\Mail\PostCountMail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Mail;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['can-view-post' => CanViewPostMiddleware::class,]);
        $middleware->alias(['is-admin' => IsAdminMiddleware::class]);
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->call(function () {
            Mail::to("admin@admin.com")->send(new PostCountMail());
        })->everyTwoMinutes();
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
