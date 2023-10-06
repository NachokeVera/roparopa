<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;  
use App\Public\imagenes\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //PRUEBA PRUEBA PRUEBA
    public function ShowForm(){
        return view('agregar-prenda');
    }
    public function mostrarLista(){
    $prendas = Prenda::all();
    return view('admin.lista-prendas', compact('prendas'));
    }
}
