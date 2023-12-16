<?php

//use Illuminate\Support\Facades\Route;
use App\http\Controllers;
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

//Route::get('/login',[Admincontroller::class]);
Route::get('/login', 'App\http\Controllers\Admincontroller@login');
Route::post('/login', 'App\http\Controllers\Admincontroller@login');
Route::get('/home', 'App\http\Controllers\Admincontroller@dashboard');