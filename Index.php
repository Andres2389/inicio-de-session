<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstraap.css"> <!-- Asumo que "bootstraap.css" es tu propia hoja de estilos -->
    <title>formulario</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Iniciar Sesión</h2>
                <form method="post" action="login.php">
                    <div class="mb-3 p-3">
                        <label for="exampleInputtext1" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="emailHelp" required name="nombreusuario">
                    </div>
                    <div class="mb-3 p-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <hr>
                    <div class="container">
                        <a href="#">¿Perdiste tu contraseña?</a><br><br>
                        <a href="#">¿No tienes cuenta? Regístrate</a>
                        <hr>
                        <input type="submit" value="Iniciar Sesión">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
