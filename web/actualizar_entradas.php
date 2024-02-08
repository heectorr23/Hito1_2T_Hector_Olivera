<?php
// Verifica si se ha enviado un ID de entrada válido
if (isset($_GET['id'])) {
// Incluye el archivo de funciones para obtener entradas
include_once '../services/entradas_action.php';
// Obtiene el ID de la entrada desde el parámetro GET
$id_entrada = $_GET['id'];
// Obtiene la entrada del blog con el ID proporcionado
$entrada = obtener_entrada_por_id($id_entrada);

// Verifica si se encontró la entrada
if ($entrada) {
?>
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
    <input type="hidden" name="id_entrada" value="<?= $_GET['id'] ?>">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" name="titulo" value="<?= $entrada['titulo'] ?>" required>
    </div>
    <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea class="form-control" name="contenido" required><?= $entrada['contenido'] ?></textarea>
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
    <?php
} else {
    // Si no se encontró la entrada, muestra un mensaje de error
    echo "No se encontró la entrada del blog.";
}
} else {
    // Si no se proporcionó un ID de entrada válido, muestra un mensaje de error
    echo "ID de entrada no válido.";
}
?>
