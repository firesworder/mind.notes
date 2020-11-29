<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about/', function () {
    return view('about');
})->name('about');

Route::get('/contacts/', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contacts/all', [ContactController::class, 'allData'])->name('contacts-data');
Route::post('/contacts/submit/', [ContactController::class, 'submit'])->name('contacts-form');
