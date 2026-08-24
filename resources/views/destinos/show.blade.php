<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $destino['titulo'] }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        header {
            background: #0d6efd;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .contenedor {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        .detalle {
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .detalle h1 {
            color: #0d6efd;
            margin-top: 0;
        }

        .dato {
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .descripcion {
            line-height: 1.7;
            margin: 25px 0;
        }

        .boton {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .boton:hover {
            background: #084298;
        }

        nav {
    margin-bottom: 25px;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
}

nav a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>

<header>
    <nav>
        <a href="{{ url('/destinos') }}">Destinos</a>
        <a href="{{ url('/contacto') }}">Contacto</a>
    </nav>

    <h1>Detalle del destino</h1>
    <p>Información del lugar turístico</p>
</header>

<div class="contenedor">

    <div class="detalle">

        <h1>{{ $destino['titulo'] }}</h1>

        <div class="dato">
            <strong>Departamento:</strong>
            {{ $destino['departamento'] }}
        </div>

        <div class="dato">
            <strong>Categoría:</strong>
            {{ $destino['categoria'] }}
        </div>

        <div class="dato">
            <strong>Precio:</strong>
            {{ $destino['precio'] }}
        </div>

        <div class="dato">
            <strong>Horario:</strong>
            {{ $destino['horario'] }}
        </div>

        <div class="dato">
            <strong>Ubicación:</strong>
            {{ $destino['ubicacion'] }}
        </div>

        <div class="descripcion">
            <strong>Descripción:</strong>

            <p>
                {{ $destino['descripcion'] }}
            </p>
        </div>

        <a href="{{ url('/destinos') }}" class="boton">
            ← Volver a destinos
        </a>

    </div>

</div>

</body>
</html>