<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\insertController;
use App\Http\Controllers\editController;
use App\Http\Controllers\deleteController;


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

Route::get('/',                  [indexController::class,'index']);
Route::post('/process',          [insertController::class,'process']);
Route::get('/editView/{id}',     [editController::class,'editView']);
Route::post('/edit',             [editController::class,'edit']);
Route::get('/delete/{id}',       [deleteController::class,'delete']);
