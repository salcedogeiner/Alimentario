<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php 
session_start();
include '../DB/ConexionDB.php';
include '../logica/ControlSolicitud.php';
include '../logica/ControlFacultad.php';
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Solicitud</title>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/index_style.css">
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">        
        <script src="../public/js/bootstrap.min.js"></script> 
    </head>
    <body>
       
         <?php
        include './headerlog.php';
        include './menuLateral.php';
        ?>

        <?php
        $conn = new ConexionDB($_SESSION['usuario_login'], $_SESSION['password_login']);
        if ($conn->conectarDB()) {
            $sesion = $conn->getConn();
            $_SESSION['sesion_logueado'] = $sesion;
        }
        $cFacultad = new ControlFacultad();
        $cSolicitud = new ControlSolicitud();
        ?>
        
    
        
        <div class="containerl">
            <div class="col-sm-8">
            <br><br><br>
            <form id="form" method="post" action="#">
                <div class="header">
                    <h3>Crear Solicitud</h3>                    
                </div>
                <br>
                <label for="subject">codigo estudiante:</label>
                <br>
                <input type="number" name="codigo"  class="form-control" placeholder="codigo" />
                <br>
                <label for="subject">convocatoria:</label>
                <br>
                <input type="number" name="convocatoria"  class="form-control" placeholder="id_convocatoria" />
                <br>
                <label for="subject">archivos a adjuntar:</label>
                <br>
                <input type='file' name='archivo1' id='archivo1'>
                <br>
                
                <div class="col-sm-6" style="padding-top: 50%"> 
                    <button class= "btn btn-primary btn-block" type="submit" name="submitcrear">Crear</button>  
                </div>
                
                
            </form> 
            </div>
             <?php 
        if (isset($_POST['submit'])) {
            //$id_facu= (string)$_POST['facultad'];
            //echo $id_facu;
            $cSolicitud->CrearSolicitud($_POST['codigo'],$_POST['convocatoria'],$_POST['archivo1']);
            //echo $_POST['facultad'];
            //echo $_POST['cupos'];
            
            
                      } 
        
        
        ?>
        </div>
    </body>
</html>
