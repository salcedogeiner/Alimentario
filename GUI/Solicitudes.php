<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
include '../DB/ConexionDB.php';
include '../logica/ControlSolicitud.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Solicitudes</title>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/index_style.css">
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">        
        <script src="../public/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <?php
        include './headerlog.php';
        include './menuLateral.php';
        // put your code here
        ?>
        
        <div class="col-sm-10">
            <?php
        $conn = new ConexionDB($_SESSION['usuario_login'], $_SESSION['password_login']);
        if ($conn->conectarDB()) {
            $sesion = $conn->getConn();
            $_SESSION['sesion_logueado'] = $sesion;
        }
        $cSolicitud=new ControlSolicitud();
        
        ?>
        <table class="table table-bordered">
            <thead>
                <tr><th>Id Convocatoria</th><th> Codigo estudiante</th><th>link</th></tr>
            </thead>
            <tbody>
                <?php 
                //$soli=new Solicitud();
                foreach($cSolicitud->verSolicitudes() as $soli){
                   echo '<tr><th>'.$soli->getId_convocatoria().'</th><th>'.$soli->getCodigo_estudiante().'</th><th>'.ociloadlob($soli->getSoportes_solicitud()).'</th></tr>';
                }
                ?>
            </tbody>
        </table>
        </div>
        
        
        
        
    </body>
</html>
