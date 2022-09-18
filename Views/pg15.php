<?php
    
    $id = $_POST['id'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $nombre_apellidos = $_POST['nombre_apellidos'];
    $email = $_POST['email'];
    
    include '../Config/Conexion.php';

    $conexion = new Conexion();
   
    $sql = "UPDATE usuarios SET nombre_usuario='$nombre_usuario', nombre_apellidos='$nombre_apellidos', email='$email' WHERE id=$id";
    $insertar = $conexion->stm->prepare($sql);
    $insertar->execute();

    header('location: UsersController.php?action=inicio');
    
    ?> 