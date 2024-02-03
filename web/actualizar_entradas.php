<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Entrada del Blog</title>
    <!-- Agregar el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h1 class="mb-4">Editar Entrada del Blog</h1>


    <form action="../services/actualizarentradas_action.php" method="post">
        <!-- Campo oculto para almacenar el ID de la entrada -->
        <input type="hidden" name="id_entrada" value="id_blog">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" value="titulo" required>
        </div>
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="form-control" name="contenido" value="contenido" required></textarea>
        </div>
        <!-- Puedes agregar más campos según tu estructura de base de datos -->
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
    <!-- Agregar el script de Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

