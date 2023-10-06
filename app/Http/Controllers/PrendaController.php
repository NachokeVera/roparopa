<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;  
use App\Public\imagenes\File;
use Illuminate\Support\Facades\Storage;

class PrendaController extends Controller
{
   /*  public function mostrarFormulario()
    {
        return view('prendas.formulario');
    }
            
     */
    public function agregarPrenda(){
    return view('agregar-prenda');
}
public function inicio(){
    return view('inicio');
}
    public function guardarPrenda(Request $request)
{
    $request->validate([
        'imagen' => 'required|image',
        'nombre' => 'required',
        'descripcion' => 'required',
        'cantidad' => 'required|integer',
        'tallaje' => 'required',
        'precio' => 'required|integer',
        
    ]);

    $imagenPath = $request->file('imagen')->store('public/storage/imagenes');

    Prenda::create([
        'imagen' => $imagenPath,
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'cantidad' => $request->cantidad,
        'tallaje' => $request->tallaje,
        'precio' => $request->precio,
        
    ]);

    return redirect('inicio')->with('success', 'Prenda agregada exitosamente.');
}
public function inicioMostrar()
{
    $prendas = Prenda::all(); // o cualquier consulta para obtener las prendas
    return view('inicio', compact('prendas'));
}



public function mostrarLista()
{
    $prendas = Prenda::all();
    return view('lista-prendas', compact('prendas'));
}
public function mostrarEditar($id)
{
    $prenda = Prenda::find($id);
    return view('editar-prenda', compact('prenda'));
}
public function actualizar(Request $request, $id)
    {
        $request->validate([
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
            'tallaje' => 'required',
        ]);

        $prenda = Prenda::find($id);

        if (!$prenda) {
            return redirect()->route('lista-prendas')->with('error', 'Prenda no encontrada.');
        }

        // Actualizar los campos de la prenda
        $prenda->nombre = $request->nombre;
        $prenda->descripcion = $request->descripcion;
        $prenda->cantidad = $request->cantidad;
        $prenda->precio = $request->precio;
        $prenda->tallaje = $request->tallaje;

        // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('imagen')) {
            // Lógica para manejar la imagen
            // Guardar la nueva imagen y actualizar el campo en la base de datos
            Storage::delete($prenda->imagen);
            $imagen = $request->file('imagen');
            $prenda->imagen = $request->imagen->store('public/storage/imagenes');
        }

        // Guardar los cambios en la base de datos
        $prenda->save();

        return redirect()->route('lista-prendas')->with('success', 'Prenda actualizada exitosamente.');
    }

    // ...

    public function destroy($id){
        
        $prenda = Prenda::find($id);
        $prenda->delete();
        return redirect()->route('lista-prendas');
    }
}
