<?php

namespace App\Http\Controllers;
use App\Models\Vestimenta;
use Illuminate\Http\Request;
use App\Http\Requests\VestimentaRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Categoria;
use App\Http\Requests\RegisterController;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Carbon\Carbon;


class ProductoController extends Controller
{
    

public function mostrarCompraProducto(int $id)
{
    $vestimenta = vestimenta::find($id);

    return view('compra_producto', compact('vestimenta'));
}






public function realizarCompra(Request $request, int $id)
{   $vestimenta = Vestimenta::find($id);
    $cliente = User::where('rut', 'LIKE', '%' . $request->rut . '%')->get();
    $horaActual = Carbon::now();

    
    
    
        // Lógica para procesar el formulario y generar la información

        // Ejemplo de datos
        $data = [
            'vestimenta' => $vestimenta,
            'cliente' =>$cliente,
            'horaActual'=>$horaActual // Supongo que $vestimenta es la información de la prenda
            
        ];

        // Generar el PDF
        $pdf = PDF::loadView('compra', $data);
        return $pdf->stream();

        

        // Descargar el PDF
        /* return $pdf->download('compra'); */
    
}

}

