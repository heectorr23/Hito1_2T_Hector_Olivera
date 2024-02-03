<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Todas las Entradas</title>
    <!-- Agregar el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h1 class="mb-4">Todas las Entradas del Blog</h1>
<a class="nav-link" href="../web/actualizar_entradas.php">Actualizar Entradas <span class="sr-only">(current)</span></a>
<?php
include_once '../services/entradas_action.php';
$entradas_blog = obtener_entradas();
foreach ($entradas_blog as $entrada) :
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title"><?= $entrada['titulo'] ?></h5>
            <small class="text-muted">Publicado por <?= $entrada['email_autor'] ?> el <?= $entrada['fecha'] ?></small>
        </div>
        <div class="card-body">
            <p class="card-text"><?= $entrada['contenido'] ?></p>
            <?php if (!empty($entrada['imagen'])) : ?>
                <img src="<?= $entrada['imagen'] ?>" class="img-fluid" alt="Imagen del Blog">
            <?php endif; ?>
        </div>
    </div>
<?php endforeach;?>
<!-- Agregar el script de Bootstrap JS (opcional) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>