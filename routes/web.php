<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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

Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/create', [ClientsController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientsController::class, 'store'])->name('clients.store');
Route::put('/update/{client}', [ClientsController::class, 'update'])->name('clients.update');
Route::get('/edit/{client}', [ClientsController::class, 'edit'])->name('clients.edit');
Route::post('/search', [ClientsController::class, 'search'])->name('clients.search');
Route::get('/country-weather/{country}', [ClientsController::class, 'getWeather'])->name('weather');