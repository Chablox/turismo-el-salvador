# Turismo El Salvador

Aplicación web desarrollada con **Laravel** para consultar información sobre diferentes lugares turísticos de El Salvador.

El proyecto implementa el patrón arquitectónico **MVC (Modelo-Vista-Controlador)** y utiliza un archivo **JSON** como fuente de datos para los destinos turísticos.

## Descripción del proyecto

La aplicación permite a los usuarios:

- Consultar una lista de destinos turísticos.
- Visualizar información detallada de cada destino.
- Consultar el departamento, categoría, precio, horario y ubicación.
- Enviar solicitudes de información mediante un formulario de contacto.
- Validar los datos introducidos en el formulario.

## Tecnologías utilizadas

- Laravel
- PHP
- Blade
- HTML5
- CSS3
- JSON
- Visual Studio Code

## Estructura principal del proyecto

```text
turismo-el-salvador/
│
├── app/
│   └── Http/
│       └── Controllers/
│           ├── DestinoController.php
│           └── ContactoController.php
│
├── resources/
│   └── views/
│       ├── destinos/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       │
│       └── contacto.blade.php
│
├── routes/
│   └── web.php
│
├── storage/
│   └── app/
│       └── destinos.json
│
├── .gitignore
├── artisan
├── composer.json
└── README.md
```

## Fuente de datos

Los destinos turísticos utilizados por la aplicación se encuentran en:

```text
storage/app/destinos.json
```

El archivo contiene información de prueba creada para este proyecto.

Cada destino contiene datos como:

- ID
- Título
- Departamento
- Categoría
- Descripción
- Precio
- Horario
- Ubicación

Actualmente se incluyen cinco destinos turísticos:

1. El Tunco
2. Lago de Coatepeque
3. El Boquerón
4. Ruta de Las Flores
5. Suchitoto

## Implementación del patrón MVC

El proyecto utiliza el patrón **MVC** para separar las responsabilidades de la aplicación.

### Modelo

En este proyecto los destinos no utilizan una base de datos. La información se encuentra almacenada en un archivo JSON:

```text
storage/app/destinos.json
```

El controlador lee este archivo y convierte su contenido en estructuras de datos PHP para poder utilizarlas en las vistas.

### Vista

Las vistas se encuentran en:

```text
resources/views/
```

Las principales vistas son:

```text
destinos/index.blade.php
destinos/show.blade.php
contacto.blade.php
```

`index.blade.php` muestra la lista de destinos.

`show.blade.php` muestra la información detallada de un destino específico.

`contacto.blade.php` contiene el formulario para solicitar información.

### Controlador

Los controladores se encuentran en:

```text
app/Http/Controllers/
```

#### DestinoController

Se encarga de:

- Leer el archivo `destinos.json`.
- Convertir el contenido JSON a un arreglo PHP.
- Obtener todos los destinos.
- Buscar un destino específico mediante su ID.
- Enviar la información correspondiente a las vistas.

#### ContactoController

Se encarga de:

- Mostrar el formulario de contacto.
- Recibir la información enviada mediante POST.
- Validar nombre, correo electrónico y mensaje.
- Mostrar mensajes de error cuando los datos no cumplen las condiciones.
- Mostrar un mensaje de confirmación cuando la información es válida.

## Flujo de una petición HTTP

El funcionamiento de la aplicación puede representarse de la siguiente manera:

```text
Usuario
   │
   ▼
Petición HTTP
   │
   ▼
routes/web.php
   │
   ▼
Controlador
   │
   ▼
Archivo JSON
   │
   ▼
Procesamiento de datos
   │
   ▼
Vista Blade
   │
   ▼
Respuesta HTML
   │
   ▼
Usuario
```

### Ejemplo: listado de destinos

Cuando el usuario visita:

```text
/destinos
```

el proceso es:

```text
Usuario
   ↓
GET /destinos
   ↓
routes/web.php
   ↓
DestinoController@index
   ↓
storage/app/destinos.json
   ↓
Procesamiento de los destinos
   ↓
destinos/index.blade.php
   ↓
Listado mostrado al usuario
```

### Ejemplo: detalle de un destino

Cuando el usuario visita:

```text
/destinos/1
```

el proceso es:

```text
Usuario
   ↓
GET /destinos/1
   ↓
routes/web.php
   ↓
DestinoController@show
   ↓
Búsqueda del ID en destinos.json
   ↓
destinos/show.blade.php
   ↓
Detalle mostrado al usuario
```

## Rutas principales

| Método | Ruta | Función |
|---|---|---|
| GET | `/` | Redirige al listado de destinos |
| GET | `/destinos` | Muestra todos los destinos |
| GET | `/destinos/{id}` | Muestra el detalle de un destino |
| GET | `/contacto` | Muestra el formulario de contacto |
| POST | `/contacto` | Procesa el formulario de contacto |

## Formulario de contacto

El formulario se encuentra disponible en:

```text
/contacto
```

Contiene tres campos obligatorios:

- Nombre
- Correo electrónico
- Mensaje

Las validaciones implementadas son:

- El nombre es obligatorio y debe tener al menos 3 caracteres.
- El correo electrónico es obligatorio y debe tener un formato válido.
- El mensaje es obligatorio y debe tener al menos 10 caracteres.

Cuando los datos son correctos, el sistema muestra un mensaje indicando que la solicitud fue enviada correctamente.

## Instalación

### Requisitos

Para ejecutar el proyecto se necesita:

- PHP
- Composer
- Laravel
- Visual Studio Code u otro editor de código

### Instalación del proyecto

Clonar el repositorio:

```bash
git clone URL_DEL_REPOSITORIO
```

Ingresar a la carpeta:

```bash
cd turismo-el-salvador
```

Instalar las dependencias:

```bash
composer install
```

Crear el archivo de configuración:

```bash
copy .env.example .env
```

Generar la clave de aplicación:

```bash
php artisan key:generate
```

Iniciar el servidor:

```bash
php artisan serve
```

La aplicación estará disponible en:

```text
http://127.0.0.1:8000
```

## Pruebas realizadas

Durante el desarrollo se comprobó:

- Listado de los cinco destinos.
- Visualización individual de cada destino.
- Funcionamiento de las rutas.
- Lectura correcta del archivo JSON.
- Validación del formulario de contacto.
- Validación del correo electrónico.
- Validación de la longitud mínima del mensaje.
- Mensaje de confirmación después del envío correcto.

## Capturas de pantalla

En esta sección se agregarán las capturas del sistema funcionando.

### Listado de destinos

<!-- Insertar aquí la captura del listado de destinos -->

### Detalle de un destino

<!-- Insertar aquí la captura del detalle de un destino -->

### Formulario de contacto

<!-- Insertar aquí la captura del formulario -->

### Validación del formulario

<!-- Insertar aquí la captura de los mensajes de validación -->

### Envío exitoso

<!-- Insertar aquí la captura del mensaje de confirmación -->

## Autor

Proyecto académico desarrollado para demostrar la implementación del patrón MVC en Laravel mediante una aplicación web de destinos turísticos de El Salvador.