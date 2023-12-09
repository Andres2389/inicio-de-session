<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstraap.css">
    <title>recuperar contraseña</title>
</head>
<body>
<div class="row">
    <div class="col-8
    ">
    <h2>recuperar contraseña</h2>
    <p>ingresa tu direcion de correo electronico para restablecer tu contraseña</p>
    <form method=" post" action="recuperar.php">
  <div class="mb-3 p-3">
    <label for="exampleInputEmail1" class="form-label">correo electronico</label>
    <input type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp"requiered>
    
  </div>
<div class="mb-3 p-3">
<input type="submit" value="enviar solicitud">
</div>
</form>
<p><a href="index.php">volver a iniciar sesion</a></p>
</div>
</body>
</html>