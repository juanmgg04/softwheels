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
        $this->nombre_apellidos=$nombre_apellidos;
        $this->email=$email;
        $contrasenaencript=password_hash($contrasena,PASSWORD_ARGON2ID);
        $this->contrasena=$contrasenaencript;
        $this->GuardarUsuario();
        $this->RedirectLogin();

        // echo $nombre_usuario;
        // echo "guardado" . "<br>";
        // echo $contrasenaencript;
        
    }
    public function VerificarLogin($nombre_usuario,$contrasena){
        $this->nombre_usuario=$nombre_usuario;
        $this->contrasena=$contrasena;
        $datosusuario= $this->ConsultarUsuarioEnBD();
        // var_dump($datosusuario);
        foreach ($datosusuario as $u){}
        if(password_verify($this->contrasena,$u->contrasena)){
            echo "la contraseña es correcta";
            $_SESSION['nombre_apellidos'] = $u->nombre_apellidos;
            header("location: UsersController.php?action=inicio");
        }
        else{
            echo '<script language="javascript">alert("USUARIO O CONTRASEÑA INCORRECTOS, INTÉNTALO DE NUEVO.");window.location.href="UsersController.php?action=login"</script>';

            // header("location: UsersController.php?action=login");
            }
            
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