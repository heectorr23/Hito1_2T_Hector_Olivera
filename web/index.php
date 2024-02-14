<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tu Página Web</title>

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
<div class="container mt-4">
    <h1>Bienvenido a Tu Página Web</h1>
    <p>Este es un esqueleto básico con Bootstrap.</p>
</div>
<?php
// Verifica si la cookie está establecida y la muestra
if(isset($_COOKIE['info_acceso'])) {
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
