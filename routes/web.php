<?php

use App\Http\Controllers\Blog\CreatePostController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\DeleteUserController;
use App\Http\Controllers\User\EditUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\LogoutUserController;
use App\Http\Controllers\User\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainPageController::class,'showMainPage'])->name('main');
Route::get('/register',[RegisterUserController::class,'showRegisterUser']);
Route::get('/login',[LoginUserController::class,'showLogin']);

Route::post('/register',[RegisterUserController::class,'registerUser'])->name('register');
Route::post('/login',[LoginUserController::class,'loginUser'])->name('login');

Route::get('/logout',[LogoutUserController::class,'showLogoutUser']);
Route::post('/logout',[LogoutUserController::class,'logoutUser']);


Route::get('/my-account',[AccountController::class,'showMyAccount'])->name('my-account');

Route::get('/edit-profile/{id}',[EditUserController::class,'showEditUser'])->name('edit-profile');
Route::put('/edit-profile/{user}',[EditUserController::class,'editUser'])->name('edit-user');

Route::get('/create-post',[CreatePostController::class,'showCreatePost']);


Route::get('/delete-profile/{id}',[DeleteUserController::class,'showDeleteUser'])->name('show.delete-user');
Route::delete('/delete-profile/{user}',[DeleteUserController::class,'deleteUser'])->name('delete-user');
