<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', GreetingController::class . '@index')
    ->name('greeting.index');
