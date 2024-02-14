<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$conexion = new PDO('mysql:host=localhost;dbname=hito1PG','root','');

$sql = "SELECT nombre, email, contrasena FROM usuarios WHERE nombre = :nombre AND email = :correo";

$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':correo', $correo);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    // El nombre o correo electrónico no existen
    echo '<p>Nombre o correo electrónico incorrectos</p>';
    echo '<a href="../web/register.php">Registrarse</a>';
} else {
    // El nombre y correo electrónico existen, verificar la contraseña
    if (password_verify($contrasena, $result['contrasena'])) {
        // Iniciar la sesión
        session_start();
        // Asignar el correo electrónico del usuario a la variable de sesión
        $_SESSION['usuario'] = $correo;

        // Asignar una cookie con el correo electrónico del usuario
        setcookie('email', $correo, time() + (86400 * 30), "/"); // 86400 = 1 día

        // Redirigir al usuario a la página del blog
        header('Location:../web/blog.php');
    } else {
        // La contraseña no coincide
        echo '<p>Contraseña incorrecta</p>';
        echo '<a href="../web/login.php">Intentar de nuevo</a>';
    }
}
?>