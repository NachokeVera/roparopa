<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\RegisterController;
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
    return view('agregar-prenda');
});

//Auth::routes();

Route::post('/registroPost', [RegisterController::class, 'registrar'])->name('post.register');
Route::get('/register', [RegisterController::class, 'show'])->name('show.register');
Route::get('/test', [RegisterController::class, 'test'])->name('test.register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/guardar-prenda', [PrendaController::class, 'guardarPrenda'])->name('guardar_prenda');
Route::get('/lista-prendas', [PrendaController::class, 'mostrarLista'])->name('lista-prendas');
Route::get('/editar-prenda/{id}', [PrendaController::class, 'mostrarEditar'])->name('editar_prenda');
Route::post('/actualizar-prenda/{id}', [PrendaController::class, 'actualizar'])->name('actualizar_prenda');
Route::get('/eliminar-prenda/{id}', [PrendaController::class, 'eliminar'])->name('eliminar_prenda');
