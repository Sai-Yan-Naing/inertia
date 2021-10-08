<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/user', [UserController::class,'index'])->name("user.index");
Route::delete('/user/{user}',[UserController::class,'destroy'])->name('user.destroy');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user',[UserController::class,'store']);
Route::get('/user/{user}/edit',[UserController::class,'edit']);
Route::put('user/{user}',[UserController::class,'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
