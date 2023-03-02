<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

// Routes PublicController
Route::get('/', [PublicController::class, ('homepage')])->name('homepage');
Route::get('/about', [PublicController::class, ('about')])->name('about');
Route::get('/contact', [PublicController::class, ('contact')])->name('contact');
Route::get('/services', [PublicController::class, ('services')])->name('services');
Route ::post('/contattaci/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');