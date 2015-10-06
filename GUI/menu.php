<?php
session_start();
//include '../logica/ControlPersona.php';
include '../DB/ConexionDB.php';
include '../logica/ControlPersona.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>menu</title>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/index_style.css">
        <link rel="stylesheet" href="../public/css/style.css">
    </head>
    <body>
<?php 
        include './headerlog.php'; ?>
       
        
        <?php 
        
include './menuLateral.php';
?>      
        <div class="col-sm-8">
            
            <center><h2>Bienvenido <?php
                $conn = new ConexionDB($_SESSION['usuario_login'], $_SESSION['password_login']);
                if ($conn->conectarDB()) {
                    $sesion = $conn->getConn();
                    $_SESSION['sesion_logueado'] = $sesion;
                    //echo $sesion;
                    $cPersona = new ControlPersona();
                    $persona = new Persona();
                    $persona = $cPersona->buscarPersonaxUsuario($_SESSION['usuario_login']);
                    echo $persona->getNombre_persona()." ".$persona->getApellido_persona(); //->getNombre_persona()." ".$persona->getTipo_persona();
                    //echo $_SESSION['usuario_logueado'];
                }
                ?>
            </h2></center>


                </div>
 <?php 
//include './footer.php';
        ?>
    </body>
</html>