<?php

use App\Http\Controllers\BeratbadanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DhimasController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\RumusController;
use App\Http\Controllers\TemanController;
use App\Http\Controllers\tes;
use App\Http\Controllers\ZodiakController;
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
    return view('welcome');
});

Route::get('coba', function(){
    return view('welcome');
});
Route::get('kalkulator', [KalkulatorController::class, 'coba']);
Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::post('kalkulator', [KalkulatorController::class, 'hitung'])->name('hitung');

Route::get('rumus',[RumusController::class,'index']);
Route::post('rumus',[RumusController::class,'hitung']);

Route::get('zodiak',[ZodiakController::class,'index']);
Route::post('zodiak',[ZodiakController::class,'cari']);

Route::get('buku',[BukuController::class,'index']);
Route::get('buku/{id}',[BukuController::class,'destroy']);
Route::post('buku',[BukuController::class,'store']);
Route::get('buku/{id}/edit',[BukuController::class,'edit']);

Route::get('teman',[TemanController::class,'index']);
Route::get('teman/{id}',[TemanController::class,'destroy']);

Route::get('tes',[tes::class,'index']);
Route::post('tes',[tes::class,'tambah']);

Route::get('dhimas', [DhimasController::class, 'index']);

Route::get('laptop', [LaptopController::class, 'index']);




























Route::get('beratbedan', [BeratbadanController::class, 'index']);
Route::post('beratbedan', [BeratbadanController::class, 'tambah']);
