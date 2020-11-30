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
Route::get('/contacts/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');
Route::get('/contacts/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contacts/submit/', [ContactController::class, 'submit'])->name('contacts-form');
Route::post('/contacts/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');
Route::get('/contacts/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('delete-message');
