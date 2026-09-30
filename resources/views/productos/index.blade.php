<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            padding: 40px;
        }

        .contenedor {
            max-width: 1100px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 25px;
            color: #222;
        }

        .boton-nuevo {
            display: inline-block;
            padding: 10px 16px;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .boton-nuevo:hover {
            background-color: #1d4ed8;
        }

        .tabla-contenedor {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f1f5f9;
            text-align: left;
            padding: 14px;
            font-size: 14px;
        }

        td {
            padding: 14px;
            border-top: 1px solid #e5e7eb;
        }

        tr:hover {
            background-color: #f8fafc;
        }

        .acciones {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .boton-editar {
            background-color: #f59e0b;
            color: white;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .boton-eliminar {
            background-color: #dc2626;
            color: white;
            padding: 7px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .boton-editar:hover {
            background-color: #d97706;
        }

        .boton-eliminar:hover {
            background-color: #b91c1c;
        }

        .sin-productos {
            text-align: center;
            padding: 30px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>Lista de productos</h1>

        <a href="{{ route('productos.create') }}" class="boton-nuevo">
            + Nuevo producto
        </a>

        <div class="tabla-contenedor">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>S/ {{ $producto->precio }}</td>
                            <td>{{ $producto->stock }}</td>

                            <td>
                                <div class="acciones">

                                    <a href="{{ route('productos.edit', $producto->id) }}"
                                       class="boton-editar">
                                        Editar
                                    </a>

                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="boton-eliminar">
                                            Eliminar
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="sin-productos">
                                No hay productos registrados.
                            </td>
                        </tr>

                    @endforelse
                </tbody>

            </table>

        </div>

    </div>

</body>
</html>

