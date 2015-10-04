<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DB/ConexionDB.php';
include '../logica/ControlPersona.php';


class SesionConvocatoria {

    public $usuario_login;
    public $usuario_password;
    private $cPersona;

    public function __construct() {
        $this->usuario_login = $_POST['usuario_login'];
        $this->usuario_password = $_POST['password_login'];
        $this->cPersona=new ControlPersona();
        
    }

    public function iniciarSesion() {

        $conn = new ConexionDB($this->usuario_login, $this->usuario_password);
        if ($conn->conectarDB()){
            session_start ();
            $sesion=$conn->getConn();
            //$persona=  new Persona();
            $persona=  $this->cPersona->buscarPersonaxUsuario($this->usuario_login,$sesion);     
            $_SESSION['nombre_logueado']=$persona->getNombre_persona();
            $_SESSION['apellido_logueado']=$persona->getApellido_persona();
            $_SESSION['tipo_logueado']=$persona->getTipo_persona();
            $_SESSION['documento_logueado']=$persona->getDocumento_persona();
            //echo $_SESSION['nombre_logueado'];//$persona->getNombre_persona()." ".$persona->getTipo_persona();
            
            header("Location: ../indexEstudiante.php");
            
            
        } else {
            session_destroy();
            header("Location: ../login.php");
            
        }
    }

}

$p = new Puente();
$p->iniciarSesion();

?>

