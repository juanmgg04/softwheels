<?php

    $id = $_GET['id'];


    include_once '../Config/Conexion.php';


    $conexion = new Conexion();
    $sql = "DELETE FROM usuarios WHERE id=$id";
    $borrar = $conexion->stm->prepare($sql);
    $borrar->execute();

    header("location: ../index.html");

    

?>