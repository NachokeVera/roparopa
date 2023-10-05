<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Css bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Registrar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center vh-100">
                <div class="card">
                    <div class="card-body">
                        <h2>Formulario de Registro</h2>
                        <form action="{{ route('post.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="rut">Rut:</label>
                                <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese su Rut">
                            </div>
                            @error('rut')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name= "password" placeholder="Ingrese su Contraseña">
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"placeholder="Ingrese su Nombre">
                            </div>
                            @error('nombre')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name= "apellido" placeholder="Ingrese su Apellido">
                            </div>
                            @error('Apellido')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>