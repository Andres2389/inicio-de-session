<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['nombreusuario'])) {
    $nombre_usuario = $_SESSION['nombreusuario'];
} else {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: iniciar_sesion.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bienvenido</title>
  <link rel="stylesheet" type="text/css" href="estilob.css">
</head>
<body>
  <div class="container">
    <h2>Bienvenido, <?php echo $nombre_usuario; ?>!</h2>
    <p>Has iniciado sesión con éxito.</p>
    <a href="index.php">Cerrar sesión</a>
  </div>
</body>
</html>
