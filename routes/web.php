<?php

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

Route::get('/', [App\Http\Controllers\AdController::class, 'index'])->name('welcome');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

//ad routes
Route::get('/annonces', [App\Http\Controllers\AdController::class, 'index'])->name('ad.index');
Route::get('/annonce', [App\Http\Controllers\AdController::class, 'create'])->name('ad.create');
Route::post('/annonce', [App\Http\Controllers\AdController::class, 'store'])->name('ad.store');
//recherce
Route::post('/search', [App\Http\Controllers\AdController::class, 'search'])->name('ad.search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
