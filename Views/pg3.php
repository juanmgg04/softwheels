<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <!-- http://127.0.0.1:5501/pg3.html -->
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Public/Css/style3.css">
</head>

<body>

    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <fieldset>
        <img src="../Public/Img/logopr.png" id="logo">
    </fieldset>

    <div id="all">
        <fieldset>
            <legend>
                <h1> Registro de Usuario </h1>
            </legend>
        </fieldset>
            
        
        <form action="../Controllers/UsersController.php" method="POST">
        <div class="row">
            <div class="col-md-4">
                </div>
                <div class="col-md-4">
                <input type="hidden" name="action" value="insertar">
                    <input placeholder="Nombre de usuario" class="form-control bg-dark  p-2 text-white border border-dark "   name="nombre_usuario" required oninvalid="this.setCustomValidity('Por favor ingresa tu nombre')"><br>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input type="password" placeholder="Contraseña" class="form-control bg-dark  p-2 text-white border border-dark" name="contrasena"  pattern="[A-Za-z0-9]{1,15}" minlength="4" required><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input placeholder="Nombre y Apellidos" class="form-control bg-dark  p-2 text-white border border-dark" name="nombre_apellidos" required><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input type="email" placeholder="Correo electrónico" class="form-control bg-dark  p-2 text-white border border-dark" name="email"required><br>
                </div>
            </div>

            <div class="row">
                <div class="regis"><br>
                <div class="col-md-4">
                </div>
                    <button class="registro btn btn-danger link-white btn-lg" type="submit">Registrarse</button>
                </div>
            </form>
            </div>
        <br>

        </div>
        
</body>

</html>