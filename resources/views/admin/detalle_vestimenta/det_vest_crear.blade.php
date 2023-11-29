@extends('layouts.master')

@section("contenido-principal")
 
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header bg-primary text-white">
                  <h2 class="mb-0">Agregar detalle vestimenta</h2>
              </div>
              <div class="card-body">
                  <form method="post" action="{{ route('detalles_vestimentas.store') }}" enctype="multipart/form-data">
                      @csrf
                            <div class="form-group">
                                <label for="scrollSection">Seleccionar Vestimenta:</label>
                                <div class="scroll-section" style="max-height: 200px; overflow-y: auto; border: 1px solid #ccc;">
                                    @foreach ($vestimentas as $vestimenta)
                                    <div class="container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="RadioVest" id="vestimenta_{{ $vestimenta->id }}" value="{{ $vestimenta->id }}">
                                            <label class="form-check-label" for="vestimenta_{{ $vestimenta->id }}">{{ $vestimenta->nombre }}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="talla">Talla:</label>
                                <select class="form-select" aria-label="Default select example" name="talla">
                                    <option selected>Open this select menu</option>
                                    @foreach ($tallas as $talla)
                                    <option value="{{ $talla->id }}">{{ $talla->talla }}</option>
                                    @endforeach
                                </select>
                            </div>
                             
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select class="form-select" aria-label="Default select example" name="categoria">
                                    <option selected>Open this select menu</option>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="precio">Cantidad:</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" step="1">
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

