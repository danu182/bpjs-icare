<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/icare',[IcareController::class,'index'])->name('icare');
// Route::post('/validasi',[IcareController::class,'validasi'])->name('validasi');

Route::get('/cari-sep',[CobaController::class,'index'])->name('cari-sep');
Route::post('/cari-sep-hasil',[CobaController::class,'hasil'])->name('cari-sep-hasil');



