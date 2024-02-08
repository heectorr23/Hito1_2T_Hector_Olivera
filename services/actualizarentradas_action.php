<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopilar datos del formulario
    $id_entrada = $_POST['id_entrada'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    try {
        $conexion= new PDO('mysql:host=localhost;dbname=hito1PG','root','');
        // Configurar el manejo de errores
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Actualizar la entrada utilizando la función y la conexión PDO
        $actualizacion_exitosa = actualizar_entrada($conexion, $id_entrada, $titulo, $contenido);

        // Cerrar la conexión
        $conexion = null;

        if ($actualizacion_exitosa) {
            // Redirigir a la página del blog después de la actualización exitosa
            header('Location: ../web/entradas.php');
            exit();
        } else {
            // Manejar el caso de error en la actualización
            echo "Error al actualizar la entrada.";
        }
    } catch (PDOException $e) {
        // Manejar errores de conexión
        echo "Error en la conexión a la base de datos: " . $e->getMessage();
    }
}
function actualizar_entrada($conexion, $id_entrada, $titulo, $contenido) {
    try {
        // Preparar la consulta SQL para actualizar la entrada
        $query = "UPDATE blog SET titulo = :titulo, contenido = :contenido WHERE id_blog = :id_entrada";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $stmt->bindParam(':contenido', $contenido, PDO::PARAM_STR);
        $stmt->bindParam(':id_entrada', $id_entrada, PDO::PARAM_INT);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true; // Éxito al actualizar
        } else {
            return false; // Error al actualizar
        }
    } catch (PDOException $e) {
        // Manejar errores
        return false; // Error al actualizar
    }
}

