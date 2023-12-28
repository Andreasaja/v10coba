<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MailController;
//use App\Http\Controllers\SlipGajiController;


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
Route::resource('/send-mail', \App\Http\Controllers\MailController::class);
Route::get('/send-mail/{nama}', 'MailController@sendEmail');

//dibawah ini contoh email yg sdh jalan
//Route::get('send-mail', [MailController::class, 'index']);


//Route::get('slipgajinya', [SlipGajiController::class, 'index']);

//ini fungsinya untuk mendirect ke page trntntu saat get url first
Route::get('/', function () {
    return redirect('slipgajinya');
});
