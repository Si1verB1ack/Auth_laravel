<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    if(Auth::user()->is_admin)
        return redirect('/admin');
    else if(!(Auth::user()->is_admin))
        return redirect('/welcome');
    return Redirect::route('login');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('/profile/setting', [UserController::class,'profile'])->name('profile');

    Route::post('/profile/upload', [UserController::class,'upload'])->name('upload');
    Route::post('/profile/password-change', [UserController::class,'changePassword'])->name('password.change');
});
Route::middleware(['auth','verified', IsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});
