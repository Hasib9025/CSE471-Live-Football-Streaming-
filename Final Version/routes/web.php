<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::view("loginSignup","loginSignup");
Route::post('login', [UserController::class, 'login']);
Route::post('signup', [UserController::class, 'signup']);


Route::view("home","home");
Route::get('subscription', [UserController::class, 'subscription']);
Route::get('livescore', [UserController::class, 'livescore']);
Route::get('matches', [UserController::class, 'matches']);
Route::get('profile', [UserController::class, 'profile']);
Route::post('editprofile', [UserController::class, 'editprofile']);

Route::get('logout', [UserController::class, 'logout']);

Route::get('live', [UserController::class, 'live']);
Route::view("forgetpassword","forgetpassword");
Route::post('forgetpassword', [UserController::class, 'forgetpassword']);

Route::view("fcode","fcode");

Route::post('fcode', [UserController::class, 'fcode']);

Route::view("newpassword","newpassword");

Route::post('newpassword', [UserController::class, 'newpassword']);
Route::get('editprofileinfo', [UserController::class, 'editprofileinfo']);

Route::post('editinfo', [UserController::class, 'editinfo']);


Route::get('subscribe', [UserController::class, 'subscribe']);
Route::view("highlight","highlight");
//update reaction and ratings
Route::post('/update-reaction', [UserController::class, 'updateReaction']);
Route::post('/update-rating', [UserController::class, 'updateRating']);

