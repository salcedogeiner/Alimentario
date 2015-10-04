<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php 
session_start();
include '../DB/ConexionDB.php';
include '../logica/ControlFacultad.php';
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Facultad</title>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/index_style.css">
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">        
        <script src="../public/js/bootstrap.min.js"></script> 
    </head>
    <body>
         <?php 
        if (isset($_POST['submitcrear'])) {
            //include '../DB/ConexionDB.php';
            $conn = new ConexionDB($_SESSION['usuario_login'], $_SESSION['password_login']);
            if ($conn->conectarDB()) {
                $sesion = $conn->getConn();                
                $_SESSION['sesion_logueado']=$sesion;
                $cFacultad =new ControlFacultad();
                $cFacultad->crearFacultad($_POST['crear_facultad']);
                echo 'facultad creada con exito';                
                /*$cPersona=  new ControlPersona();
                $persona=new Persona();
                $persona=  $cPersona->buscarPersonaxUsuario($usuario_login);
                echo $persona->getApellido_persona();//->getNombre_persona()." ".$persona->getTipo_persona();*/
                //header("Location: menu.php");
            } 
        } 
        ?>
         
      <?php 
 include './headerlog.php';
 include './menuLateral.php';
      ?>
        
        <div class="containerl">
            <div class="col-sm-8">
            <br><br><br>
            <form id="form" method="post" action="#">
                <div class="header">
                    <h3>Crear facultad</h3>                    
                </div>
                <br>
                <label for="subject">Escriba el nombre de la facultad</label>
                <br>
                <input type="text" name="crear_facultad" class="form-control" placeholder="" />
                <br>
                <div class="col-sm-6" style="padding-top: 10%"> 
                    <button class= "btn btn-primary btn-block" type="submit" name="submitcrear">Crear</button>  
                </div>
                <div class="col-sm-6" style="padding-top: 10%"> 
                    <button class= "btn btn-primary btn-block" type="submit" name="submitborrar">Borrar</button>  
                </div>
                
            </form> 
            </div>
        </div>
        
    </body>
</html>
