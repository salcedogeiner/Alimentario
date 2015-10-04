<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DB/ConexionDB.php';
include '../logica/ControlPersona.php';

class Sesion {

    public $suario_login;
    public $usuario_password;
    private $instancia;
    private $sesion;
    private $cPersona;

    public function __construct() {
        $this->usuario_login = $_POST['usuario_login'];
        $this->usuario_password = $_POST['password_login'];
        $this->cPersona = new ControlPersona();
    }

    public function iniciarSesion() {

        $conn = new ConexionDB($this->usuario_login, $this->usuario_password);
        if ($conn->conectarDB()) {
            session_start();
            $sesion = $conn->getConn();
            $_SESSION['sesion_logueado'] = $sesion;
            echo $_SESSION['sesion_logueado'] . "--------" . $sesion;
            $sesion = $conn->getConn();
            $persona = new Persona();
            $persona = $this->cPersona->buscarPersonaxUsuario($this->usuario_login);
            echo $persona->getNombre_persona() . " " . $persona->getTipo_persona();

            //header("Location: ../GUI/indexPersona.php");
        } else {
            header("Location: ../GUI/login.php");
        }
    }

}

$p = new Sesion();
$p->iniciarSesion();
?>

