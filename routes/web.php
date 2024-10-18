<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/contact', [PageController::class, 'contact'])->name('contact.contact');
Route::get('/', [PageController::class, 'login'])->name('login.login');
Route::get('/register', [PageController::class, 'register'])->name('register.register');
Route::get('/contact', [PageController::class, 'contact_data'])->name('contact.contact');

