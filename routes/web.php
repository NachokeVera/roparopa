<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/agregar-prenda', [PrendaController::class, 'agregarPrenda'])->name('agregar-prenda');

//Auth::routes();
//registro
Route::post('/registroPost', [RegisterController::class, 'registrar'])->name('post.register');
Route::get('/register', [RegisterController::class, 'show'])->name('show.register');
//login
Route::get('/login', [LoginController::class, 'show'])->name('show.login');
Route::post('/loginPost', [LoginController::class, 'login'])->name('post.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//prueba
Route::get('/test', [RegisterController::class, 'test'])->name('test.register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/guardar-prenda', [PrendaController::class, 'guardarPrenda'])->name('guardar_prenda');
Route::get('/lista-prendas', [PrendaController::class, 'mostrarLista'])->name('lista-prendas');
Route::get('/editar-prenda/{id}', [PrendaController::class, 'mostrarEditar'])->name('editar_prenda');
Route::post('/actualizar-prenda/{id}', [PrendaController::class, 'actualizar'])->name('actualizar_prenda');
Route::delete('/eliminar-prenda/{id}', [PrendaController::class, 'destroy'])->name('eliminar_prenda');
