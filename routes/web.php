<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VestimentaController;

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



//Auth::routes();
//registro
Route::get('/register', [RegisterController::class, 'show'])->name('show.register');
Route::post('/registro', [RegisterController::class, 'registrar'])->name('post.register');
//login
Route::get('/login', [LoginController::class, 'show'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('post.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//prueba
Route::get('/test', [RegisterController::class, 'test'])->name('test.register');

Route::resource('vestimentas',VestimentaController::class);//->middleware(['middleware_name'])->only(['create', 'edit'])






/*
Route::get('/', [PrendaController::class, 'inicioMostrar'])->name('inicio');
//Route::get('/agregar-prenda', [PrendaController::class, 'agregarPrenda'])->name('agregar-prenda');
Route::post('/guardar-prenda', [PrendaController::class, 'guardarPrenda'])->name('guardar_prenda');
//Route::get('/lista-prendas', [PrendaController::class, 'mostrarLista'])->name('lista-prendas');
Route::get('/editar-prenda/{id}', [PrendaController::class, 'mostrarEditar'])->name('editar_prenda');
Route::post('/actualizar-prenda/{id}', [PrendaController::class, 'actualizar'])->name('actualizar-prenda');
Route::delete('/eliminar-prenda/{id}', [PrendaController::class, 'destroy'])->name('eliminar-prenda');



Route::get('/agregar-prenda', [PrendaController::class, 'agregarPrenda'])->name('agregar-prenda')->middleware('checkadmin');
Route::get('/lista-prendas', [PrendaController::class, 'mostrarLista'])->name('lista-prendas')->middleware('checkadmin');
Route::get('/acceso-denegado', [PrendaController::class, 'denegado'])->name('show.denegado');

*/
