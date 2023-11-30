@extends('layouts.master')

@section("contenido-principal")
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">{{ $vestimenta->nombre }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="rounded border p-2" style="width: 150px; height: 150px; overflow: hidden; margin: 0 auto;">
                                <img src="{{ Storage::url($vestimenta->imagen) }}" alt="{{ $vestimenta->nombre }}" class="img-fluid rounded" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="{{ route('detalles_vestimentas.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="talla">Talla:</label>
                                    <select class="form-select" aria-label="Default select example" name="talla">
                                        <option selected>Open this select menu</option>
                                        @foreach ($tallas as $talla)
                                            <option value="{{ $talla->id }}">{{ $talla->talla }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="precio">Cantidad:</label>
                                    <input type="number" class="form-control" id="cantidad" name="cantidad" step="1">
                                </div>
                                <input type="hidden" name="vestimenta" value="{{ $vestimenta->id }}">

                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Talla</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        @foreach ($detallesVestimentas as $detalleVestimenta)
                        <td scope="row">{{ $detalleVestimenta->talla->nombre }}</td>
                        <td>{{ $detalleVestimenta->cantidad }}</td>
                        <td>
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <input type="number" class="form-control form-control-sm" name="cantidad" step="1" style="width: 80px;">
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-sm btn-success">+</a>
                                        <a href="#" class="btn btn-sm btn-warning">-</a>
                                    </div>
                                </div>
                            </form>
                        </td>  
                        @endforeach
                    </tr>
                  </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

