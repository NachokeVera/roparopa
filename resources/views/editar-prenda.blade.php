
@extends('layouts.master')

@section('contenido-principal')
    <h2>Editar Prenda de Ropa</h2>
    <form method="post" action="{{ route('actualizar-prenda', $prenda->id) }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="imagen">Foto:</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <textarea class="form-control" id="nombre" name="nombre" rows="1"></textarea>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" step="1">
        </div>

        <div class="form-group">
            <label for="tallaje">Tallaje:</label>
            <input type="text" class="form-control" id="tallaje" name="tallaje">
        </div>

        <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('¿Estás seguro de que deseas modificar esta prenda?')">Guardar</button>
    
    </form>

        
    
@endsection
