<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$conexion= new PDO('mysql:host=localhost;dbname=hito1PG','root','');

$sql = "SELECT nombre, email, contrasena FROM usuarios WHERE email = :correo";

$stmt = $conexion->prepare($sql);
$stmt->bindParam(':correo',$correo);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {

    // Verificar si la contraseña coincide utilizando password_verify
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
        echo '<p>Usuario no válido</p>';
        echo '<a href="../web/register.php">Alta de usuarios</a>';
    }//cierra else
}