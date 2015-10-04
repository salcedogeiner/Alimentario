<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include '../DB/ConexionDB.php';
include '../logica/ControlTipoCondicion_SE.php';
include '../logica/ControlCondicion_SE.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Actividad</title>
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
        $cTipoCondicion_SE = new ControlTipoCondicion_SE();
        $cCondicion_SE = new ControlCondicion_SE();
        ?>
        
        <div class="col-sm-8">
            <center><div class="col-sm-6">
                <br><br><br>
                <form id="form" method="post" >
                    <div class="header">
                        <h3>Crear Condición</h3>                    
                    </div>
                    <br>
                    <label for="subject">Seleccione el Tipo de Coondición</label>
                    <br>
                    <select id="subject" name="tipo_condicion" class="form-control" required="required">
                        <?php
                    //->verFacultades();
                    //$fa=new Tipo_Condicion_SE();
                    foreach ($cTipoCondicion_SE->verTipos_Condiciones() as $fa) {
                        echo '<option value="' . $fa->getId_tipo_condicion(). '">' . $fa->getNombre_tipo_condicion() . '</option>';
                    }
                    ?>                     
                    </select>
                    <br>
                    <label for="subject">Escriba el nombre de la nueva Condición</label>
                    <br>
                    <input type="text" name="nombre_condicion" class="form-control" placeholder="" />
                    <br>
                    <label for="subject">Puntaje</label>
                    <br>
                    <input type="number" class="form-control" name="puntaje"/>
                    
                    <div class="col-sm-6" style="padding-top: 10%"> 
                        <button class= "btn btn-primary btn-block" type="submit" name="submit">Crear</button>  
                    </div>
                    
                </form> 
                
       <?php 
        if (isset($_POST['submit'])) {
            //$id_facu= (string)$_POST['facultad'];
            //echo $id_facu;
            $cCondicion_SE->crearCondicion_SE($_POST['tipo_condicion'], $_POST['nombre_condicion'], $_POST['puntaje']);
            //Convocatoria->crearConvocatoria($_POST['cupos'],$_POST['fechaI'],$_POST['fechaF'], $_POST['periodo'],$_POST['facultad']);
            echo $_POST['tipo_condicion'];
           echo $_POST['nombre_condicion'];
            echo $_POST['puntaje'];
            //echo $_POST['fechaI'];
            //echo $_POST['fechaF'];
            
                      } 
         if (isset($_POST['submittipo'])) {
            //$id_facu= (string)$_POST['facultad'];
            //echo $id_facu;
            $cTipoCondicion_SE->crearTipo_Condicion($_POST['nombre_tipo_condicion']);
            //$cCondicion_SE->crearCondicion_SE($_POST['tipo_condicion'], $_POST['nombre_condicion'], $_POST['puntaje']);
            //Convocatoria->crearConvocatoria($_POST['cupos'],$_POST['fechaI'],$_POST['fechaF'], $_POST['periodo'],$_POST['facultad']);
            //echo $_POST['tipo_condicion'];
           //echo $_POST['nombre_condicion'];
            echo 'HOLA';//$_POST['puntaje'];
            //echo $_POST['fechaI'];
            //echo $_POST['fechaF'];
            
                      } 
        ?>
         </div></center>
            <div class="col-sm-6">
                <br><br><br>
                <form id="form" method="post" action="#">
                    <div class="header">
                        <h3>Crear Tipo de Condición</h3>                    
                    </div>
                                      
                    <br>
                    <label for="subject">Escriba el nombre del nuevo tipo de Condición</label>
                    <br>
                    <input type="text" name="nombre_tipo_condicion" class="form-control" placeholder="" />
                                        
                    <div class="col-sm-6" style="padding-top: 10%"> 
                        <button class= "btn btn-primary btn-block" type="submit" name="submittipo">Crear</button>  
                    </div>
                    
                </form> 
                
            </div>
        </div>
    </body>
</html>
