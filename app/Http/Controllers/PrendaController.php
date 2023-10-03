<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;  
use App\Public\imagenes\File;

class PrendaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('prendas.formulario');
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

    $imagenPath = $request->file('imagen')->store('public/imagenes');

    Prenda::create([
        'imagen' => $imagenPath,
        'descripcion' => $request->nombre,
        'descripcion' => $request->descripcion,
        'cantidad' => $request->cantidad,
        'tallaje' => $request->tallaje,
        'precio' => $request->precio,
        
    ]);

    return redirect('/')->with('success', 'Prenda agregada exitosamente.');
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
            return redirect()->route('lista_prendas')->with('error', 'Prenda no encontrada.');
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
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes/prendas'), $nombreImagen);
            $prenda->imagen = $nombreImagen;
        }

        // Guardar los cambios en la base de datos
        $prenda->save();

        return redirect()->route('lista_prendas')->with('success', 'Prenda actualizada exitosamente.');
    }

    // ...

    public function eliminar($id)
    {
        $prenda = Prenda::find($id);

        if (!$prenda) {
            return redirect()->route('lista_prendas')->with('error', 'Prenda no encontrada.');
        }

        // Eliminar la imagen asociada a la prenda si existe
        if (!empty($prenda->imagen)) {
            $rutaImagen = public_path('imagenes/prendas/' . $prenda->imagen);
            if (File::exists($rutaImagen)) {
                File::delete($rutaImagen);
            }
        }

        // Eliminar la prenda de la base de datos
        $prenda->delete();

        return redirect()->route('lista_prendas')->with('success', 'Prenda eliminada exitosamente.');
    }

}
