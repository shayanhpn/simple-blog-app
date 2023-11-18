<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainPageController::class,'showMainPage']);
Route::get('/register',[RegisterUserController::class,'showRegisterUser']);
Route::get('/login',[LoginUserController::class,'showLogin']);
