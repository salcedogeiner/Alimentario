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
include '../logica/ControlCondicionxSolicitud.php';
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

                <form id="form" method = "POST" > 
                    <div class="col-sm-8">

                        <div><br><br><br>

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
                                    $persona_documento = $persona->getDocumento_persona();

                                    $cEstudiante = new ControlEstudiante();
                                    $estudiante = $cEstudiante->buscarEstudiantexDocumento($persona_documento);
                                    $estudiante_codigo = $estudiante->getCodigo_estudiante();

                                    $cCondicionxSolicitud = new ControlCondicionxSolicitud();

                                    //echo $persona->getNombre_persona()." ".$persona->getApellido_persona(); //->getNombre_persona()." ".$persona->getTipo_persona();
                                    //echo $_SESSION['usuario_logueado'];
                                }
                                ?>
                                <div class="focus" style="width: 1075px">
                                    <center><h3 class="form-signin-heading">Informacion Personal</h3></center>
                                    <div class="col-sm-6"><center><?php
                                echo '<h3 class="form-signin-heading"> Nombre: ' . $persona->getNombre_persona() . ' ' . $persona->getApellido_persona() . '</h3>';
                                ?></center></div>

                                    <br>
                                    <input type="text" class="form-control" placeholder="" />
                                    <br>

                                    <div class="col-sm-6"><center><?php
                                            echo '<h3 class="form-signin-heading"> Documento: ' . $persona->getDocumento_persona() . '</h3>';
                                ?></center></div>
                                    <div class="col-sm-6"><center><?php
                                            echo '<h3 class="form-signin-heading"> Codigo: ' . $estudiante_codigo . '</h3>';
                                ?></center></div>
                                    <div class="col-sm-6"><center><?php
                                            echo '<h3 class="form-signin-heading"> Sexo: ' . $persona->getGenero_persona() . '</h3>';
                                ?></center></div>

                                </div>
                                <hr>
                            </div>



                            <?php
                            if (isset($_POST['submit'])) {
                                //echo 'ALGO ESTA PASANDO???????????????????????????????????';
                                //cho seleccion[];

                                $archivo_temp = $_POST['file'];
                                //$ass=  parse_url($archivo_temp);
                                echo $archivo_temp;
                                //echo $_POST['facultad']."aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
                                //$convocatoria=$cConvocatoria->buscarConvocatoriaxFacultad($_POST['id_convocatoria']);
                                //$convocatoria_id=$convocatoria->getId_convocatoria();
                                $cSolictud->CrearSolicitud($estudiante_codigo, $_POST['id_convocatoriasol'], $archivo_temp);
                                foreach ($_POST['seleccion'] as $sel) {
                                    echo $sel;
                                    $cCondicionxSolicitud->crearCondicionxSolicitud($estudiante_codigo, $sel, $_POST['id_convocatoriasol'], "na");
                                }
                            }
                            ?>


                            <div>
                                <br>

                                <div>
                                    <div class="container">
                                        <div class="col-sm-4">
                                            <?php
                                            //$tipo = new Tipo_Condicion_SE();
                                            //$contador=0;
                                            $tipo_cond = new ControlTipoCondicion_SE();
                                            $cond = new ControlCondicion_SE();
                                            foreach ($tipo_cond->verTipos_Condiciones() as $tipo) {
                                                echo '<div class="containerl2">';
                                                echo '';
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

                                                echo '<hr>';
                                                echo '</div>';
                                            }
                                            ?>
                                            <div class="col-sm-6">
                                            </div>                     

                                        </div>
                                    </div>

                                    <div class="container" >
                                        <br>
                                        <h3 class="form-signin-heading">Seleccione La convocatoria Para enviar Solicitud</h3>
                                        <select id="subject" name="id_convocatoriasol" class="form-control" required="required">
                                            <?php
                                            //->verFacultades();
                                            //$facul=new Facultad();
                                            $convo = new Convocatoria();

                                            foreach ($cConvocatoria->verConvocatoriasActivas() as $convo) {
                                                echo $convo->getCupos() . '  ' . $convo->getPeriodo();
                                                $facul = $cFacultad->buscarFacultad($convo->getId_facultad());
                                                echo '<option value="' . $convo->getId_convocatoria() . '">Convocatoria  ' . $facul->getNombre_facultad() . '  cupos:  ' . $convo->getCupos() .
                                                '  inicio:  ' . $convo->getFecha_inicio() . '  fin:  ' . $convo->getFecha_fin() . '</option>';
                                            }

                                            /* foreach ($cFacultad->verFacultades() as $fa) {
                                              echo '<option value="' . $fa->getId_facultad() . '">' . $fa->getNombre_facultad() . '</option>';
                                              } */
                                            ?> 
                                        </select>
                                        <br>



                                        <center><h2> Enviar este fichero:</h2>
                                            <br> <input name="file" type="file"  /></center>

                                    </div>

                                    <div class="container" >



                                        <br>
                                        <div class="col-sm-12"> </div>
                                        <div class="col-sm-12" style="padding-top: 10%"> 
                                            <button class= "btn btn-primary btn-block" type="submit" name="submit">Enviar</button>  
                                        </div>
                                        <div class="col-sm-12" style="padding-left:10%"> </div>
                                    </div>


                                </div>                         
                            </div> 
                            </form>
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
