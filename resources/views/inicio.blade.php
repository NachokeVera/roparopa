@extends('layouts.master')

@section('contenido-principal')
<div class="container mt-4">
    <form method="GET" action="{{ route('filtrar-prenda') }}">
        <div class="form-group">
            <label for="nombre_prenda">Selecciona la vestimenta:</label>
            <select class="form-control" id="nombre_prenda" name="nombre_prenda">
                <option value="">Todas las vestimentas</option>
                @foreach ($vestimentas as $vestimenta)
                    <option value="{{ $vestimenta->nombre }}">{{ $vestimenta->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>
    <div class="row">
        @foreach ($vestimentas as $vestimenta)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="text-center">
                        <img src="{{ Storage::url($vestimenta->imagen) }}" class="card-img-top mx-auto d-block" style="max-width: 450px; max-height: 450px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $vestimenta->nombre }}</h5>
                        <p class="card-text">{{ $vestimenta->descripcion }}</p>
                        <p class="card-text"><strong>Precio: ${{ $vestimenta->precio }}</strong></p>
                        <!-- <p class="card-text">Cantidad disponible: {{ $vestimenta->cantidad }}</p>  
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Talla</span>
                            </div>
                            <select class="custom-select" id="tallaje" enable>
                                <option selected>{{ $vestimenta->tallaje }}</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="cantidad" class="col-sm-4 col-form-label">Cantidad:</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="cantidad" name="cantidad">
                            </div> -->
                    </div>
                    <button type="submit" class="btn btn-sm btn-info" >Agregar al carro</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


