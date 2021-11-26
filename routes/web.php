<?php

use App\Http\Controllers\AdminModuleController;
use App\Http\Controllers\ConsultaController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/admin',[AdminModuleController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/consulta',[ConsultaController::class, 'index'])->name('consulta');



Route::get('/error/noautorizado', function () {
    return view('error.noautorizado');
})->name('noautorizado');