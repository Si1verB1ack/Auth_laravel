<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::route('login');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
});
Route::middleware(['auth','verified', IsAdmin::class])->group(function () {
    Route::get('/home', function () {
        return view('auth.dashboard');
    });
});
