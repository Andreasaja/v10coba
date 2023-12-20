<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/akuns', \App\Http\Controllers\AkunController::class);
Route::resource('/slipgajinya', \App\Http\Controllers\SlipGajiController::class);
//dd('ini routes/web.php');

