<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/sitio_web/css/bootstrap.min.css">
</head>
<body>
    <?php 
        /*En PHP, la variable $_SERVER es un arreglo superglobal que contiene información sobre el entorno del servidor web, del script en ejecución y de la petición HTTP realizada.

            Se llena automáticamente cuando se ejecuta un script PHP y permite acceder a datos como:

            Ejemplos comunes de índices de $_SERVER

            $_SERVER['PHP_SELF'] → El nombre del archivo que se está ejecutando.

            $_SERVER['SERVER_NAME'] → El nombre del servidor (ej: www.ejemplo.com).

            $_SERVER['HTTP_HOST'] → El host de la cabecera HTTP solicitada (similar a SERVER_NAME, pero viene del cliente).

            $_SERVER['REQUEST_METHOD'] → El método de la petición (GET, POST, etc.).

            $_SERVER['REQUEST_URI'] → La URI usada para acceder al script.

            $_SERVER['QUERY_STRING'] → La parte de la URL después de ?.

            $_SERVER['REMOTE_ADDR'] → La dirección IP del cliente que hizo la petición.

            $_SERVER['HTTP_USER_AGENT'] → Información del navegador o cliente que hizo la petición.

            $_SERVER['SERVER_PORT'] → Puerto en el que escucha el servidor web (80, 443, etc.). */
        $url = "http://".$_SERVER["HTTP_HOST"]."/sitio_web"; 
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Administrador del sitio web
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= "$url/administrador/inicio.php"; ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= "$url/administrador/secciones/productos.php"; ?>">
                    Libros
                </a>    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= "$url/administrador/secciones/cerrar.php"; ?>">
                    Cerrar
                </a>    
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $url; ?>">
                    Ver sitio web
                </a>    
            </li>
        </ul>
    </nav>

    <div class="container">
        <br>
        <div class="row">