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


// Ruta protegida con un middleware, que comprueba que el role del user sea Administrador para su visualización, 
// de otro modo es redirigido a una vista de error
Route::get('/admin',[AdminModuleController::class, 'index'])->name('admin')->middleware('admin');

// Ruta para la consulta del dia de la semana. Cualquier usuario puede acceder a ella
Route::get('/consulta',[ConsultaController::class, 'index'])->name('consulta');


// Ruta de error que utiliza el middleware
Route::get('/error/noautorizado', function () {
    return view('error.noautorizado');
})->name('noautorizado');