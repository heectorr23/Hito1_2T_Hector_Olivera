<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Publicación</title>
    <!-- Agregar el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container mt-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
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
            <li class="nav-item">
                <a class="nav-link" href="../web/entradas.php">Entradas</a>
            </li>
        </ul>
    </div>
</nav>
<h1 class="mb-4">Formulario de Publicación</h1>
<form method="post" action="../services/blog_action.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Email del Autor:</label>
        <input type="email" name="email_autor" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Título:</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Contenido:</label>
        <textarea name="contenido" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>URL de la Imagen:</label>
        <input type="text" name="imagen_url" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<!-- Agregar el script de Bootstrap JS (opcional) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>