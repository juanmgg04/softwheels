<?php

class User{

    protected $id;
    protected $nombre_usuario;
    protected $contrasena;
    protected $nombre_apellidos;
    protected $email;

    public function GuardarUsuario(){
        include_once '../Config/Conexion.php';
        $conexion= new Conexion();
        $sql="INSERT INTO usuarios(nombre_usuario,nombre_apellidos,email,contrasena) VALUES (?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_usuario);
        $insertar->bindParam(2,$this->nombre_apellidos);
        $insertar->bindParam(3,$this->email);
        $insertar->bindParam(4,$this->contrasena);
        $insertar->execute();
    }

    public function ConsultarUsuarioEnBD()
    {
        include_once '../Config/Conexion.php';
        $conexion=new Conexion();
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$this->nombre_usuario'";
        $usuario= $conexion->stm->prepare($sql);
        $usuario->execute();
        $usuarioobjeto=$usuario->fetchAll(PDO::FETCH_OBJ);
        return $usuarioobjeto;
    }



}
?>