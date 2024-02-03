<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopilar datos del formulario
    $email_autor = $_POST['email_autor'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $imagen_url = $_POST['imagen_url'];

    $conexion= new PDO('mysql:host=localhost;dbname=hito1pg','root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar la autenticación del usuario (aquí se asume que el email es único en la tabla usuarios)
    $email_usuario = $_POST['email_autor']; // Supongo que tienes un campo para ingresar el email del usuario en el formulario

    $query_usuario = "SELECT id FROM usuarios WHERE email = ?";
    $stmt_usuario = $conexion->prepare($query_usuario);
    $stmt_usuario->bindValue(1, $email_usuario, PDO::PARAM_STR);
    $stmt_usuario->execute();

    // Verificar si se encontró el usuario
    if ($usuario_id = $stmt_usuario->fetchColumn()) {
        // Insertar datos en la tabla blog (incluyendo la fecha actual)
        $query_blog = "INSERT INTO blog (email_autor, titulo, contenido, fecha, imagen, usuario_id) VALUES (?, ?, ?, NOW(), ?, ?)";
        $stmt_blog = $conexion->prepare($query_blog);
        $stmt_blog->bindValue(1, $email_autor, PDO::PARAM_STR);
        $stmt_blog->bindValue(2, $titulo, PDO::PARAM_STR);
        $stmt_blog->bindValue(3, $contenido, PDO::PARAM_STR);
        $stmt_blog->bindValue(4, $imagen_url, PDO::PARAM_STR);
        $stmt_blog->bindValue(5, $usuario_id, PDO::PARAM_INT);

        // Ejecutar la consulta
        if ($stmt_blog->execute()) {
            $mensaje_exito = "Formulario enviado correctamente y datos almacenados en la base de datos";
        } else {
            $mensaje_error = "Error al almacenar los datos en la base de datos: " . $stmt_blog->errorInfo()[2];
        }

        // Cerrar la declaración preparada para la tabla blog
        $stmt_blog->closeCursor();
    } else {
        $mensaje_error = "Usuario no encontrado";
    }
}
?>
