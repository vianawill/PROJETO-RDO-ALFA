<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registro_rdo;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('gerarRDO', [Registro_rdo::class, 'gerarRDO'])->name('gerarRDO');
Route::get('/rdos', [Registro_rdo::class, 'index'])->name('rdos.index');
Route::post('/rdo/store', [Registro_rdo::class, 'store'])->name('rdo.store');
Route::delete('/rdos/{id}', [Registro_rdo::class, 'destroy'])->name('rdos.destroy');