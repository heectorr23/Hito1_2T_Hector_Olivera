<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

$opciones = [
    'cost' => 12, // Mayor costo = mayor seguridad, pero mayor tiempo de procesamiento
];
$hash = password_hash($contrasena, PASSWORD_BCRYPT, $opciones);

$conexion = new PDO("mysql:host=localhost;dbname=hito1pg", "root", "");

// Verificar si el correo ya existe
$consulta_correo_existente = $conexion->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :correo");
$consulta_correo_existente->bindParam(':correo', $correo);
$consulta_correo_existente->execute();

if ($consulta_correo_existente->fetchColumn() > 0) {
    echo "Error: El correo electrónico ya está registrado.";
} else {
    // El correo no existe, proceder con la inserción
    $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES (:nombre, :correo, :password)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':password', $hash);


    if ($stmt->execute()) {
        echo "Registro creado exitosamente";
    } else {
        echo "Error al crear el registro: " . $stmt->errorInfo()[2];
    }
}
// Cerrar la conexión
$conexion = null;
