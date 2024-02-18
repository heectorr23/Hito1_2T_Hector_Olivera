<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
// Obtén la dirección IP del visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Obtén la fecha y hora actual
$fecha_acceso = date('Y-m-d H:i:s');

// Crea una cookie con la información
setcookie('info_acceso', "IP: $ip - Fecha: $fecha_acceso", time() + 3600); // La cookie caduca en 1 hora
?>
<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../web/index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../web/login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../web/register.php">Registrarse</a>
            </li>

        </ul>
    </div>
</nav>
<!-- Contenido principal -->

<div class="container">
    <h3 class="text-center">Diferencias entre lenguajes de programación</h3>
    <div class="row">
        <div class="col-md-4">
            <h3>Lenguajes Procedimentales</h3>
            <p>Los lenguajes procedimentales se basan en la ejecución secuencial de instrucciones, donde el énfasis principal recae en los procedimientos o funciones que manipulan los datos. En estos lenguajes, el código se organiza en procedimientos que pueden llamarse uno tras otro para lograr una tarea. Cada procedimiento puede tener su propio conjunto de datos locales y puede modificar los datos globales si es necesario.</p>
            <p><strong>Ejemplos:</strong> C, Pascal.</p>
        </div>
        <div class="col-md-4">
            <h3>Lenguajes Orientados a Objetos</h3>
            <p>Los lenguajes orientados a objetos (OO) modelan el mundo real utilizando objetos que contienen datos y métodos para operar con esos datos. Estos lenguajes se centran en conceptos como la encapsulación, que permite ocultar el funcionamiento interno de un objeto; la herencia, que permite a los objetos heredar propiedades y comportamientos de otros objetos; y el polimorfismo, que permite que los objetos respondan de manera diferente a la misma llamada de método en función de su tipo.</p>
            <p><strong>Ejemplos:</strong> Java, C++, Python.</p>
        </div>
        <div class="col-md-4">
            <h3>Lenguajes Orientados a Eventos</h3>
            <p>Los lenguajes orientados a eventos manejan acciones del usuario o del sistema como eventos, y responden a ellos ejecutando funciones específicas. Este enfoque es común en el desarrollo de interfaces de usuario interactivas, donde las acciones del usuario, como hacer clic en un botón o mover el ratón, desencadenan eventos que son manejados por el código. Estos lenguajes suelen ser asincrónicos y basados en la programación reactiva, lo que significa que responden a los eventos a medida que ocurren en lugar de esperar una ejecución secuencial de instrucciones.</p>
            <p><strong>Ejemplos:</strong> JavaScript, Visual Basic.</p>
        </div>
    </div>
</div>
<form method="post">
    <button type="submit" name="mostrar_info_acceso" class="btn btn-primary btn-lg">Mostrar Información de Acceso</button>
</form>
<?php
// Verifica si la cookie está establecida y si se ha enviado el formulario
if(isset($_COOKIE['info_acceso']) && isset($_POST['mostrar_info_acceso'])) {
    echo "<p>Información de acceso: {$_COOKIE['info_acceso']}</p>";
} else {
    echo "<p>No hay información de acceso almacenada.</p>";
}
?>
<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
