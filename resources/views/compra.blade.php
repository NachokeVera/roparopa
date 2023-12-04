<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Compra</title>
</head>
<body>
    <h1>Detalle de Compra</h1>

    <h2>Vestimenta</h2>
    <p><strong>Nombre:</strong> {{ $vestimenta->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $vestimenta->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ $vestimenta->precio }}</p>

    <h2>Información del Cliente</h2>
    <p>RUT: {{ $cliente->rut  }}</p>
    <p>Nombre: {{ $cliente->nombre  }}</p>
    {{-- <p>Dirección: {{ $vestimenta->precio  }}</p>
    <p>Teléfono: {{ $vestimenta-> }}</p>  --}}
    <p>Hora de Compra: {{ $horaActual->format('H:i:s') }}</p>
</body>
</html>
