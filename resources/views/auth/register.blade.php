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
    <div class="container mt-5">
        <h2>Formulario de Registro</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="rut">Rut:</label>
                <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese su Rut">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre"placeholder="Ingrese su Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name= "apellido" placeholder="Ingrese su Apellido">
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name= "correo" placeholder="Ingrese su Correo Electrónico">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name= "passdword" placeholder="Ingrese su Contraseña">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name= "direccion" placeholder="Ingrese su Dirección">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name= "telefono" placeholder="Ingrese su Teléfono">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>