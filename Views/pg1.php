<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Softwheels</title>
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e6a247fa57.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Public/Css/style1.css">
    
    <!-- http://127.0.0.1:5501/pg1.html# -->
</head>

<body>
    <div class="loader"></div>

    <div class="container-fluid">

        <div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <fieldset>

            <legend>
                <img src="../Public/Img/logopr.png" id="logo" class="zindex-sticky ">
            </legend>

        </fieldset>


        <h1>Inicio de sesión</h1>

        <form  action="UsersController.php" method="POST">

        <div class="container-fluid" id="dates">
            <div class="row">
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <input type="hidden" name="action" value="login">
                    <img src="../Public/Img/person_FILL0_wght400_GRAD0_opsz48.png" id="usuario">
                    <input placeholder="Usuario" class="form-control bg-dark  p-2 text-white border border-dark" name="nombre_usuario" required><br>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <img src="../Public/Img/lock_FILL0_wght400_GRAD0_opsz48.png" id="contraseña">
                    <input type="password" placeholder="Contraseña" class="form-control bg-dark  p-2 text-white border border-dark" name="contrasena" required><br>
                </div>

                <div>
                     <button  id="inicio" class="btn btn-danger" type="submit">Iniciar sesión</button>
                </div>
            </div>
            <br>
            
            <div id="btn-contrasena">
                <a href="../Views/pg4.html" class="registro btn btn-outline-dark link-white">Recupera tu contraseña</u></a>
            </div>
            
        </div>
        
        
        
        
    </form>
    </body>
    
</html>