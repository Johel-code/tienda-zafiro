<!-- factura.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Factura</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 16px;
            color: #777;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-details p {
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .table td {
            text-align: center;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body class="">
    <div class="container">
        <div class="header">
            <h1>Factura</h1>
            <p>Fecha: {{  $facts['fecha']  }}</p>
        </div>

        <div class="invoice-details">
            <p class="text-lg font-bold">Código de Factura: {{ $facts['codigoFactura'] }}</p>
            <p class="mt-2">CI/NIT: {{ $facts['ciNit'] }}</p>
            <p class="mt-2">Señor(es): {{ $facts['nombreCliente'] }}</p>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="px-4 py-3 bg-gray-200">Producto</th>
                    <th class="px-4 py-3 bg-gray-200">Precio</th>
                    <th class="px-4 py-3 bg-gray-200">Cantidad</th>
                    <th class="px-4 py-3 bg-gray-200">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($facts['productos'] as $producto)
                <tr>
                    <td class="px-4 py-3 border-b">{{ $producto->product->name_product }}</td>
                    <td class="px-4 py-3 border-b">{{ $producto->precio_unitario }}</td>
                    <td class="px-4 py-3 border-b">{{ $producto->cantidad_detalle }}</td>
                    <td class="px-4 py-3 border-b">{{ $producto->precio_unitario*$producto->cantidad_detalle }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td class="total" colspan="3">Total</td>
                    <td class="total">{{ $facts['total'] }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>
