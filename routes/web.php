<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;


// Public index
Route::get('/', [PostController::class, 'index'])->name('posts.index');
// Optional: /posts also points to index
Route::get('/posts', [PostController::class, 'index']); 

// Protect all other resource routes
Route::resource('posts', PostController::class)
    ->except(['index']) // don't create index again
    ->middleware('check.Login');

route::match(['get','post'],'login',[LoginController::class,'login']);
route::match(['get','post'],'register',[LoginController::class,'register']);
route::post('logout',[LoginController::class,'logout']);


