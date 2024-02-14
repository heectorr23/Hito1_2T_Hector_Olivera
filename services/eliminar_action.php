<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_entrada = $_POST['id_entrada'];

    $conexion = new PDO('mysql:host=localhost;dbname=hito1pg', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM blog WHERE id_blog = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bindValue(1, $id_entrada, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header('Location:../web/blog.php');
    } else {
        echo "Error al eliminar la entrada: " . $stmt->errorInfo()[2];
    }
}
