
@extends('layouts.master')

@section('contenido-principal')
<h2>Lista de vestimentas de Ropa</h2>
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
    
        @foreach($vestimentas as $vestimenta)
            <tr>
                <td>{{ $vestimenta->id}}</td>
                <td>
                    <img src="{{ Storage::url($vestimenta->imagen) }}" class="card-img-top" style="max-width: 150px; max-height: 150px;">
                </td>
                <td>{{ $vestimenta->nombre }}</td>
                <td>{{ $vestimenta->descripcion }}</td>
                <td>{{ $vestimenta->cantidad }}</td>
                <td>{{ $vestimenta->precio }}</td>
                <td>{{ $vestimenta->tallaje }}</td>
                <td>
                    <a href="{{ route('editar_vestimenta', ['id' => $vestimenta->id]) }}" class="btn btn-sm btn-warning">Editar</a>
                    <h3></h3>
                    <form action="{{ route('eliminar-vestimenta', $vestimenta->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta vestimenta?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
