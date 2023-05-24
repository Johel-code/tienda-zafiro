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

        body .container .header {
            display:flex;
            
        }

        body .container .titulo-factura {
            text-align: center;
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

        body .container .mensaje-final {
            padding: 40px 0px;
            text-align: center;
        }
    </style>
</head>
<body class="">
    <div class="container">
        <div class="header">
            <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
            </a>
            <h1>TIENDA ZAFIRO</h1>
            
        </div>

        <div>
            <p>Av. América esq. Av. Melchor Perez</p>
            <p>Teléfono: 4563211</p>
            <p>Cochabamba-Bolivia</p> <br>
            <hr>
            
        </div>

        <div class="titulo-factura">
            <h1>FACTURA</h1>
            <p>(Con Derecho a Crédito Fiscal)</p> <br> 
            <hr>
        </div>
        <div class="invoice-details">
            <p>Cod. Autorización: 45D7D069F9D8EE8D4E29FC3640BAE05121ADC7C2349E0BD857D8FD74</p>
            <p>NIT: 1020948890</p>
            <p class="text-lg font-bold">Código de Factura: {{ $facts['codigoFactura'] }}</p>
            <p>Fecha: {{  $facts['fecha']  }}</p><br>
            <hr>
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
        <div class="mensaje-final">
            <p>No se aceptan cambios ni devoluciones. </p>
            <p>Gracias por su compra.</p>
        </div>
        

    </div>
</body>
</html>
