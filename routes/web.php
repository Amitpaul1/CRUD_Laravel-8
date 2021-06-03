<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[StuentController::class,'index']);
Route::POST('stuent/adddata',[StuentController::class,'adddata']);
Route::get('stuent/edit/{id}',[StuentController::class,'edit']);
Route::POST('stuent/update/{id}',[StuentController::class,'update']);
Route::get('stuent/delete/{id}',[StuentController::class,'delete']);

