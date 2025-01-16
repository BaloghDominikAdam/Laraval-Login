<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome');


Route::view('/reg', 'reg');
Route::post('/reg', [UserController::class, 'Reg']);


Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'Login']);




Route::get('/logout', [UserController::class, 'Logout']);



Route::get('/mypage', [UserController::class, 'Mypage']);


Route::get('/newpass', [UserController::class, 'Newpass']);
Route::post('/newpass', [UserController::class, 'NewpassData']);








