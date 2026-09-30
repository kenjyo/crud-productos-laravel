<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>

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
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 25px;
            color: #222;
        }

        .formulario {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        .acciones {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .boton-guardar {
            background-color: #2563eb;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .boton-guardar:hover {
            background-color: #1d4ed8;
        }

        .boton-volver {
            background-color: #6b7280;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }

        .boton-volver:hover {
            background-color: #4b5563;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>Crear Producto</h1>

        <div class="formulario">

            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>

                <div class="campo">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion"></textarea>
                </div>

                <div class="campo">
                    <label for="precio">Precio:</label>
                    <input type="number" id="precio" name="precio" step="0.01">
                </div>

                <div class="campo">
                    <label for="stock">Stock:</label>
                    <input type="number" id="stock" name="stock">
                </div>

                <div class="acciones">

                    <button type="submit" class="boton-guardar">
                        Guardar producto
                    </button>

                    <a href="{{ route('productos.index') }}" class="boton-volver">
                        Volver
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>

