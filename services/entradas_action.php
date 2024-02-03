<?php function obtener_entradas() {

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

// Llamar a la función obtener_entradas
$entradas_blog = obtener_entradas();





