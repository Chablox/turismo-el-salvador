<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos Turísticos de El Salvador</title>

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

        header h1 {
            margin: 0 0 10px;
        }

        .contenedor {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .destinos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .tarjeta {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .tarjeta h2 {
            margin-top: 0;
            color: #0d6efd;
        }

        .tarjeta p {
            line-height: 1.6;
        }

        .boton {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .boton:hover {
            background: #084298;
        }

        .dato {
            margin: 8px 0;
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

    <h1>Destinos Turísticos de El Salvador</h1>
    <p>Descubre lugares increíbles para visitar</p>
</header>

<div class="contenedor">

    <div class="destinos">

        @foreach ($destinos as $destino)

            <div class="tarjeta">

                <h2>{{ $destino['titulo'] }}</h2>

                <p class="dato">
                    <strong>Departamento:</strong>
                    {{ $destino['departamento'] }}
                </p>

                <p class="dato">
                    <strong>Categoría:</strong>
                    {{ $destino['categoria'] }}
                </p>

                <p>
                    {{ $destino['descripcion'] }}
                </p>

                <p class="dato">
                    <strong>Precio:</strong>
                    {{ $destino['precio'] }}
                </p>

                <a
                    href="{{ url('/destinos/' . $destino['id']) }}"
                    class="boton"
                >
                    Ver detalles
                </a>

            </div>

        @endforeach

    </div>

</div>

</body>
</html>