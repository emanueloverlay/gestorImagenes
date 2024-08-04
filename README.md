<h1>Galería de Imágenes</h1>

Este proyecto es una mini galería de imágenes desarrollada con PHP y JavaScript. Permite a los usuarios subir imágenes a un servidor, almacenarlas en una base de datos, y mostrarlas en una galería web.

<h3>Funcionalidades</h3>

    Subida de imágenes: Los usuarios pueden subir imágenes desde su dispositivo, que se guardarán en una carpeta específica en el servidor.
    Almacenamiento en base de datos: Los nombres de las imágenes se guardan en una base de datos MySQL.
    Visualización de galería: Las imágenes almacenadas se muestran en una galería web.

<h3>Requisitos</h3>

    Servidor web con PHP 7.4+.
    MySQL 5.7+.


<h3>Aclaración</h3>

    El sistema está en fase Beta. No contiene formularios para ingreso de nuevos usuarios.
    En el archivo de importacion database.sql se encuentra la creación de un usuario base (root).

    
<h3>Instalación</h3>
1. Clonar el repositorio

2. Configuración de la base de datos

    Importa el archivo database.sql en la base de datos para crear las tablas necesarias.

3. Configurar la conexión a la base de datos

    El archivo core/Database.php es quien tiene la configuración las credenciales de acceso a la base de datos.

4. Ejecutar la aplicación

    Acceder a la URL del servidor donde esté alojado el proyecto y ingresar a la galería.

<h3>Archivos Importantes</h3>

    index.php: Punto de entrada de la aplicación.
    core/Database.php: Clase para la conexión a la base de datos.
    models/Images.php: Modelo para interactuar con la tabla imagenes.
    models/Login.php: Modelo de interacción para el login de Usuarios.
    controllers/imagesController.php: Controlador con las funcionalidades de la galería.
    controllers/loginController.php: Controlador con las funcionalidades del Login.
    storage/uploads: Carpeta donde se almacenan las imágenes subidas.
