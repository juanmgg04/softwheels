<?php
class conexion{
    public $stm;

    public function __construct()
    {
        
    
        try {
            // va a intentar crear lo que le diga
            $this->stm = new PDO("mysql:host=localhost;dbname=login",'root','');
        } catch (PDOException $error) {
            echo "error en : ->". $error-> getMessage();
        }


    }


}

// $conexion = new Conexion();
// $conexion->Bdconnect();

?>