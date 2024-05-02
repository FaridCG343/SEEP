<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return view('login');
    }
})->name('login');

Route::get('signout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('signout');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return 'This is the dashboard.' . '<button><a href="' . route('signout') . '">Sign out</a></button>';
    })->name('dashboard');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});
