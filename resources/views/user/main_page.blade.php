<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Css bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>BCDPKLK</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card">
                  <img src="{{ asset('img/niños_plata.jpg') }}" class="card-img-top" alt="Imagen del producto">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5>
                    <p class="card-text">Descripción del producto</p>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Stock: 10</li>
                      <li class="list-group-item">Precio: $100</li>
                      <li class="list-group-item">Categoría: 1</li>
                      <li class="list-group-item">Administrador: 1</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </main>
    <footer class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a href="#">Contact</a>
            </div>
            <div class="col-md-4">
              <a href="#">Cart</a>
            </div>
            <div class="col-md-4">
              <a href="#">Home</a>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>