<!-- factura.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Factura</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Factura</h1>

        <div class="bg-white shadow p-6 mb-6">
            <p class="text-lg font-bold">Código de Factura: {{ $codigoFactura }}</p>
            <p class="mt-2">CI/NIT: {{ $ciNit }}</p>
            <p class="mt-2">Señor(es): {{ $nombreCliente }}</p>
        </div>

        <table class="w-full bg-white shadow rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-3 bg-gray-200">Producto</th>
                    <th class="px-4 py-3 bg-gray-200">Precio</th>
                    <th class="px-4 py-3 bg-gray-200">Cantidad</th>
                    <th class="px-4 py-3 bg-gray-200">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td class="px-4 py-3 border-b">{{ $producto['nombre'] }}</td>
                    <td class="px-4 py-3 border-b">{{ $producto['precio'] }}</td>
                    <td class="px-4 py-3 border-b">{{ $producto['cantidad'] }}</td>
                    <td class="px-4 py-3 border-b">{{ $producto['subtotal'] }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td class="px-4 py-3" colspan="3">Total</td>
                    <td class="px-4 py-3">{{ $total }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>
