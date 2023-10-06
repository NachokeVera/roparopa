
@extends('layouts.master')

@section('contenido-principal')
<h2>Lista de Prendas de Ropa</h2>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Tallaje</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($prendas as $prenda)
            <tr>
                <td>{{ $prenda->id}}</td>
                <td>
                    <img src="{{ Storage::url($prenda->imagen) }}" class="card-img-top" style="max-width: 150px; max-height: 150px;">
                </td>
                <td>{{ $prenda->nombre }}</td>
                <td>{{ $prenda->descripcion }}</td>
                <td>{{ $prenda->cantidad }}</td>
                <td>{{ $prenda->precio }}</td>
                <td>{{ $prenda->tallaje }}</td>
                <td>
                    <a href="{{ route('editar_prenda', ['id' => $prenda->id]) }}" class="btn btn-sm btn-warning">Editar</a>
                    <h3></h3>
                    <form action="{{ route('eliminar-prenda', $prenda->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta prenda?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
