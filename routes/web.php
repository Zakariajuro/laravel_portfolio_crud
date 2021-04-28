<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\BackController;
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

Route::get('/', [AllController::class, 'home'])->name('home');

Route::get('/backoff/backOffice', [BackController::class, 'back'])->name('backoffice');
Route::get('/backoff/form', [BackController::class, 'form'])->name('form');



// METHOD 

Route::get('/backoff/backOffice/create', [BackController::class, 'create'])->name('form.create');
Route::post('/backoff/backOffice/store', [BackController::class, 'store'])->name('form.store');

// DELETE 
Route::delete('/backoff/backOffice/delete', [BackController::class, 'destroy'])->name('form.destroy');

