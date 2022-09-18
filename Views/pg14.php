<?php 
    $id = $_SESSION['id'];
    include '../Config/Conexion.php';
    $conexion = new Conexion();
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $consulta = $conexion->stm->prepare($sql);
    $consulta->execute();
    $persona = $consulta->fetchAll(PDO::FETCH_OBJ);
    foreach($persona as $u){}
?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
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
                <h1> Actualizar Usuario </h1>
            </legend>
        </fieldset>
            
        
        <form action="UsersController.php?action=usuarioactualizado" method="POST">
        <div class="row">
            <div class="col-md-4">
                </div>
                <div class="col-md-4">
                <input type="hidden" name="action" value="usuarioactualizado">
                    <input placeholder="Nombre de usuario" class="form-control bg-dark  p-2 text-white border border-dark "   name="nombre_usuario" required oninvalid="this.setCustomValidity('Por favor ingresa tu nombre')" value="<?php echo $_SESSION['nombre_usuario']; ?>"><br>
                    <input type="hidden" name='id' value='<?php echo $_SESSION['id'] ?>'>
                    
                </div>
            </div>
                

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input placeholder="Nombre y Apellidos" class="form-control bg-dark  p-2 text-white border border-dark" name="nombre_apellidos" required value="<?php echo $_SESSION['nombre_apellidos'];?>"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input type="email" placeholder="Correo electrónico" class="form-control bg-dark  p-2 text-white border border-dark" name="email"required value="<?php echo $_SESSION['email'];?>"> <br>
                </div>
            </div>

            <div class="row">
                <div class="regis"><br>
                <div class="col-md-4">
                </div>
                    <button class="registro btn btn-danger link-white btn-lg" type="submit">Actualizar</button>
                </div>
            </form>
            </div>
        <br>

        </div>
        
</body>

</html>