<?php
function obtener_entradas() {

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=hito1pg", "root", "");
        // Configurar el manejo de errores
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query_blog = "SELECT * FROM blog ORDER BY fecha DESC";
        $stmt_blog = $conexion->query($query_blog);
        $entradas_blog = $stmt_blog->fetchAll(PDO::FETCH_ASSOC);

        // Cerrar la conexión
        $conexion = null;

        return $entradas_blog;
    } catch (PDOException $e) {
        die("Error en la conexión a la base de datos: " . $e->getMessage());
    }
}
function obtener_entrada_por_id($id_entrada) {
    try {
        // Establece la conexión a la base de datos
        $conexion = new PDO("mysql:host=localhost;dbname=hito1pg", "root", "");
        // Prepara la consulta SQL
        $consulta = $conexion->prepare("SELECT * FROM blog WHERE id_blog = :id");
        // Vincula el parámetro ID y ejecuta la consulta
        $consulta->execute(array(':id' => $id_entrada));

        // Obtiene la entrada del blog como un array asociativo
        $entrada = $consulta->fetch(PDO::FETCH_ASSOC);

        // Cierra la conexión a la base de datos
        $conexion = null;

        // Devuelve la entrada del blog
        return $entrada;
    } catch (PDOException $e) {
        // Maneja el error de consulta de alguna manera apropiada
        echo "Error al obtener la entrada del blog: " . $e->getMessage();
        return null;
    }
}

// Llamar a la función obtener_entradas
$entradas_blog = obtener_entradas();


?>


