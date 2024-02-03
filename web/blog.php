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