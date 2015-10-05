<?php
session_start();
//include '../logica/ControlPersona.php';
include '../DB/ConexionDB.php';
include '../logica/ControlFacultad.php';
include '../logica/ControlPersona.php';
include '../logica/ControlTipoCondicion_SE.php';
include '../logica/ControlCondicion_SE.php';
include '../logica/ControlSolicitud.php';
include '../logica/ControlConvocatoria.php';
include '../logica/ControlEstudiante.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>

        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="../public/css/index_style.css">
        <link rel="stylesheet"  href="../public/css/style.css"/>
        <script src="../public/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <?php 
        include 'headerlog.php';
        ?>
        
        <?php 
        include 'menuLateral.php';
        ?>
<div class="container">
<div class="col-sm-8">
        
    <div><br><br><br>
                <form id="form" method = "POST" >      
                    <div>
                        
                        <?php
                        $cFacultad = new ControlFacultad();
                        $cConvocatoria = new ControlConvocatoria();
                $conn = new ConexionDB($_SESSION['usuario_login'], $_SESSION['password_login']);
                if ($conn->conectarDB()) {
                    $sesion = $conn->getConn();
                    $_SESSION['sesion_logueado'] = $sesion;
                   //echo $sesion;
                    $cPersona = new ControlPersona();
                    $persona = new Persona();
                    $persona = $cPersona->buscarPersonaxUsuario($_SESSION['usuario_login']);
                    
                     $cSolictud = new ControlSolicitud();
                      $persona_documento=$persona->getDocumento_persona();
                        
                        $cEstudiante = new ControlEstudiante();
                        $estudiante = $cEstudiante->buscarEstudiantexDocumento($persona_documento);
                        $estudiante_codigo= $estudiante->getCodigo_estudiante();
                    //echo $persona->getNombre_persona()." ".$persona->getApellido_persona(); //->getNombre_persona()." ".$persona->getTipo_persona();
                    //echo $_SESSION['usuario_logueado'];
                }
                ?>
                        <div class="focus" style="width: 1075px">
                                                        <center><h3 class="form-signin-heading">Informacion Personal</h3></center>
                            <div class="col-sm-6"><center><?php 
                echo '<h3 class="form-signin-heading"> Nombre: '.$persona->getNombre_persona().' '.$persona->getApellido_persona().'</h3>';
                            ?></center></div>
                            <div class="col-sm-6"><center><?php 
                echo '<h3 class="form-signin-heading"> Documento: '.$persona->getDocumento_persona().'</h3>';
                            ?></center></div>
                            <div class="col-sm-6"><center><?php 
                echo '<h3 class="form-signin-heading"> Codigo: '.$estudiante_codigo.'</h3>';
                            ?></center></div>
                            <div class="col-sm-6"><center><?php 
                echo '<h3 class="form-signin-heading"> Sexo: '.$persona->getGenero_persona().'</h3>';
                            ?></center></div>
                                            
                        </div>
                         
                    </div>
                    
                </form>
                <div class="col-sm-12"><center><h3 class="form-signin-heading"> Información socio economica</h3></center></div>

                <div >
                    <br>
                    <center><h3 class="form-signin-heading">.</h3></center>
                </div>

                <div>
                   
                    <div>
                        <div class="container">
 <?php
                                //$tipo = new Tipo_Condicion_SE();
                                //$contador=0;
                                foreach ($tipo_cond->verTipos_Condiciones() as $tipo) {
                                    echo '<div class="containerl2">';
                                    echo '<form id="form" method="post">';
                                    echo '<div class="container" style="width: 1075px">';
                                    echo '<center><h3 class="form-signin-heading">' . $tipo->getNombre_tipo_condicion() . '</h3></center>';
                                    //$condi=new Condicion_SE();
                                    foreach ($cond->verCondiciones_SE($tipo->getId_tipo_condicion()) as $condi) {
                                        echo '<div class="col-sm-6">';
                                        echo '<br>';
                                        echo '<input type="checkbox" name="seleccion[]" value="' . $condi->getId_condicion() . '"/><h4 class="form-signin-heading">' . $condi->getNombre_condicion() . '</h4></br>';
                                        echo '<br>';
                                        //echo '<input type="radio" name="hogar" checked="" value="si"><label for="name">SI</label>';
                                        //echo '<br>';
                                        //echo '<input type="radio" name="hogar" value="no"><label for="name">NO</label>';
                                        echo '</div>';
                                        //$contador+=1;
                                    }
                                    echo '</div>';

                                    echo '</form>';
                                    echo '</div>';
                                }
                                ?>
                                                                 
                    </div>                     
                    
                </div>
                </div>
    
                <div class="container" >
                    <br>
                   <select id="subject" name="facultad" class="form-control" required="required">
                    <?php
                    //->verFacultades();
                    //$fa=new Facultad();
                    foreach ($cFacultad->verFacultades() as $fa) {
                        echo '<option value="' . $fa->getId_facultad() . '">' . $fa->getNombre_facultad() . '</option>';
                    }
                    ?> 
                     </select>
                <br>
                    
                    <form enctype="multipart/form-data" action="#" method="POST">
                    Enviar este fichero: <input name="file" type="file" />
                    </form>
                    
                </div>
                
                <div class="container" >
                    
                    
                    
                    <br>
                    <div class="col-sm-12"> </div>
                    <div class="col-sm-12" style="padding-top: 10%"> 
                        <button class= "btn btn-primary btn-block" type="submit">Enviar</button>  
                    </div>
                    <div class="col-sm-12" style="padding-left:10%"> </div>
                </div>
                <?php 
                  if (isset($_POST['submit'])) {
                        $archivo_temp = $_FILES['file']['tmp_name'];
                        $archivo_string = file_get_contents($archivo_temp);
                        $convocatoria=$cConvocatoria->buscarConvocatoriaxFacultad($_POST['facultad']);
                        $convocatoria_id=$convocatoria->getId_convocatoria();
                 $cSolictud->CrearSolicitud($estudiante_codigo,$convocatoria_id,$archivo_string);
                      } 
                
                ?>

            </div>                         
        </div> 
</div>
        <br><br>

        <div id="footer">
            <div>
                <br></br>
                <br></br>
                
                <center><p>&#169; 2015 Bases de Datos 2.</p></center>
                

            </div>
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script> 
</html>
