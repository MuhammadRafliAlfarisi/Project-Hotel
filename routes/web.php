<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index');
})->name('index');
Route::get('/kamar', function () {
    return view('kamar');
})->name('kamar');
Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');
Route::get('/fasilitaskamar', function () {
    return view('fasilitaskamar');
})->name('fasilitaskamar');
Route::get('/fasilitashotel', function () {
    return view('fasilitashotel');
})->name('fasilitashotel');
Route::get('/resepsionis', function () {
    return view('resepsionis');
})->name('resepsionis');

Route::get('/admin', function () {
return view('admin');
})->middleware('auth')->name('admin');

Route::post('/login' , [LoginController::class, 'login']);
Route::post('/logout' , [LoginController::class, 'logout']);

