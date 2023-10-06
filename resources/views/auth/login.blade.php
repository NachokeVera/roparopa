<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Css bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center vh-100">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Iniciar sesión</h2>
                        <form action="{{route('post.login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="rut">Rut</label>
                                <input type="text" class="form-control" id="rut" name="rut" required>
                            </div>
                            @error('rut')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="mb-3"><a href="{{route('show.register')}}">Registrarse</a></div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>