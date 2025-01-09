<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome');


Route::view('/reg', 'reg');
Route::post('/reg', [UserController::class, 'Reg']);


Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'Login']);



