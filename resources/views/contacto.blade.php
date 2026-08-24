<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto - Turismo El Salvador</title>

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
            max-width: 700px;
            margin: 40px auto;
        }

        .formulario {
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .formulario h2 {
            margin-top: 0;
            color: #0d6efd;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        button {
            padding: 12px 25px;
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #084298;
        }

        .mensaje {
            padding: 15px;
            margin-bottom: 20px;
            background: #d1e7dd;
            color: #0f5132;
            border-radius: 6px;
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        .volver {
            display: inline-block;
            margin-top: 20px;
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>

<body>

<header>
    <h1>Contacto</h1>
    <p>Solicita más información sobre nuestros destinos turísticos</p>
</header>

<div class="contenedor">

    <div class="formulario">

        <h2>Solicitar información</h2>

        @if (session('success'))
            <div class="mensaje">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/contacto') }}" method="POST">

            @csrf

            <div class="campo">
                <label for="nombre">Nombre</label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="{{ old('nombre') }}"
                >

                @error('nombre')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="campo">
                <label for="email">Correo electrónico</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                >

                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="campo">
                <label for="mensaje">Mensaje</label>

                <textarea
                    id="mensaje"
                    name="mensaje"
                >{{ old('mensaje') }}</textarea>

                @error('mensaje')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit">
                Enviar solicitud
            </button>

        </form>

        <a href="{{ url('/destinos') }}" class="volver">
            ← Volver a destinos
        </a>

    </div>

</div>

</body>
</html>