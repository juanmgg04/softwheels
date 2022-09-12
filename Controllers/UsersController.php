<?php
session_start();
include_once '../Models/User.php';

class UsersController extends User{

    public function CargarVistaRegistrarse()
    {
       include '../Views/pg3.php';
    }

    public function AlistarInformacion($nombre_usuario,$contrasena,$nombre_apellidos,$email){

        $this->nombre_usuario=$nombre_usuario;
        $this->contrasena=$contrasena;
        $this->nombre_apellidos=$nombre_apellidos;
        $this->email=$email;
        $contrasenaencript=password_hash($contrasena,PASSWORD_BCRYPT);
        $this->contrasena=$contrasenaencript;
        $this->GuardarUsuario();
        $this->RedirectLogin();

}

    public function CargarVistaLogin(){

        include '../Views/pg1.php';

}

public function RedirectLogin()
{
    header("location: UsersController.php?action=login");   
}
public function CargarVistaInicio()
{
    include '../Views/pg2.php';
}

public function VerificarLogin($nombre_usuario,$contrasena){
    $this->nombre_usuario=$nombre_usuario;
    $this->contrasena=$contrasena;
    $datosusuario= $this->ConsultarUsuarioEnBD();
    var_dump($datosusuario);
    foreach ($datosusuario as $u){}
    if(password_verify($this->contrasena,$u->contrasena)) {
        echo "la contraseña es correcta";
        // $_SESSION['nombre_usuario']=$u->nombre_usuario;
        // header("location: UsersController.php?action=inicio");
    }
    else{
        echo"no es";
    }
}

}

if (isset($_GET['action'])&& $_GET['action']=='registrar') {
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaRegistrarse();}

if (isset($_POST['action']) && $_POST['action']=="insertar") {
    $usercontroller= new Userscontroller();
    $usercontroller->AlistarInformacion($_POST['nombre_usuario'],$_POST['contrasena'],$_POST['nombre_apellidos'],$_POST['email']);
    } 
    
    if (isset($_GET['action'])&& $_GET['action']=='login') {
        $usercontroller = new UsersController();
        $usercontroller->CargarVistaLogin();
    }

    if (isset($_POST['action']) && $_POST['action']=="login") {
        $usercontroller= new Userscontroller();
        $usercontroller->VerificarLogin($_POST['nombre_usuario'],$_POST['contrasena']);
    }

    if (isset($_GET['action'])&& $_GET['action']=='inicio') {
        $usercontroller = new UsersController();
        $usercontroller->CargarVistaInicio();}



?>