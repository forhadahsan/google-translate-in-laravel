<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleTranslate;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('language/home', [GoogleTranslate::class, 'index'])->name('google.home');
Route::get('language/change', [GoogleTranslate::class, 'change'])->name('changeLang');