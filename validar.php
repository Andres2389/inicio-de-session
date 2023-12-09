<?php
include 'Conexion.php';

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

// Insertar datos en la base de datos
$sql = "INSERT INTO registro (nombre,email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    header("Location: mostrar.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>