
@extends('layout')

@section('contenido-principal')
    <h2>Lista de Prendas de Ropa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
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
                    <td>{{ $prenda->imagen }}</td>
                    <td>{{ $prenda->nombre }}</td>
                    <td>{{ $prenda->descripcion }}</td>
                    <td>{{ $prenda->cantidad }}</td>
                    <td>{{ $prenda->precio }}</td>
                    <td>{{ $prenda->tallaje }}</td>
                    <td>
                        <a href="{{ route('editar_prenda', ['id' => $prenda->id]) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('eliminar_prenda', ['id' => $prenda->id]) }}" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
