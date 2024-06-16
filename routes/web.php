<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::route('login');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile/setting', [UserController::class,'profile']);

    Route::post('/profile/upload', [UserController::class,'upload']);
});
Route::middleware(['auth','verified', IsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});
