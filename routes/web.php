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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\DtPeralatanController;
Route::resource('dtperalatan', App\Http\Controllers\DtPeralatanController::class)->middleware('auth');

use App\Http\Controllers\JenisPeralatanController;
Route::resource('jenisperalatan', App\Http\Controllers\JenisPeralatanController::class)->middleware('auth');

use App\Http\Controllers\PeralatanController;
Route::resource('peralatan', App\Http\Controllers\PeralatanController::class)->middleware('auth');

use App\Http\Controllers\RuangLabController;
Route::resource('ruanglab', App\Http\Controllers\RuangLabController::class)->middleware('auth');

use App\Http\Controllers\SpekKomputerController;
Route::resource('spekkomputer', App\Http\Controllers\SpekKomputerController::class)->middleware('auth');

use App\Http\Controllers\StatusKondisiController;
Route::resource('statuskondisi', App\Http\Controllers\StatusKondisiController::class)->middleware('auth');

use App\Http\Controllers\TindakanController;
Route::resource('tindakan', App\Http\Controllers\TindakanController::class)->middleware('auth');

use App\Http\Controllers\TusulanPerbaikanController;
Route::resource('tusulanperbaikan', App\Http\Controllers\TusulanPerbaikanController::class)->middleware('auth');

use App\Http\Controllers\TusulanPlengadaanController;
Route::resource('tusulanplengadaan', App\Http\Controllers\TusulanPlengadaanController::class)->middleware('auth');
