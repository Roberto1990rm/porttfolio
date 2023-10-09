<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // Agrega esta línea
use App\Http\Controllers\publicController;
use App\Http\Middleware\App;

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
})->name('inicio');

Route::get('/contacto', [ContactController::class, 'showContactForm'])->name('contacto');
Route::post('/submitForm', [ContactController::class, 'submitForm'])->name('submitForm');
Route::get('/locale/{locale}', [PublicController::class, 'setLocale'])->name('locale.set');
