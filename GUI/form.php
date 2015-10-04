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
                $conn = new ConexionDB($_SESSION['usuario_login'], $_SESSION['password_login']);
                if ($conn->conectarDB()) {
                    $sesion = $conn->getConn();
                    $_SESSION['sesion_logueado'] = $sesion;
                   //echo $sesion;
                    $cPersona = new ControlPersona();
                    $persona = new Persona();
                    $persona = $cPersona->buscarPersonaxUsuario($_SESSION['usuario_login']);
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
                //echo '<h3 class="form-signin-heading"> Codigo: '.$persona->getCodigo_persona().'</h3>';
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

                            <div class="containerl2">
                                <form id="form" method="post">
                                    <br>
                                    <div class="container" style="width: 1075px">
                                        <div class="col-sm-6"><h3 class="form-signin-heading">Ingresos Familiares</h3></div>
                                        <div class="col-sm-6"><input type="text" class="form-control" name="ingresos" placeholder=" Escriba el valor mensual de los ingresos familiares o propios" required=""/>
                                            <input type="file" name="file1">
                                        </div>
                                    </div>                                        
                                </form>           
                            </div>

                            <div class="containerl2">
                                <form id="form" method="post">
                                    <br>
                                    <div class="container" style="width: 1075px">
                                        <center><h3 class="form-signin-heading">Condiciones familiares</h3></center>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject"> ¿Como estudiante sostiene el hogar en que vive?:</label>
                                            <br>
                                            <input type="radio" name="hogar" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="hogar" value="no"><label for="name">NO</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Como estudiante se sostiene económicamente a si mismo?</label>
                                            <br>
                                            <input type="radio" name="sostiene" checked="" value="si"><label for="name" required="">SI</label>
                                            <br>
                                            <input type="radio" name="sostiene" value="no"><label for="name" required="">NO</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Vive fuera de su núcleo familiar de origen (papá, mamá, hermanos)?</label>
                                            <br>
                                            <input type="radio" name="nucleo" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="nucleo" value="no"><label for="name">NO</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Tiene conyuge, hijos u otras personas a cargo?</label>
                                            <br>
                                            <input type="radio" name="conyuge" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="conyuge" value="no"><label for="name">NO</label>
                                        </div>
                                        <br>
                                        <input type="file" name="file2">
                                    </div>
                                </form>
                            </div> 

                            <div class="containerl2">
                                <form id="form" method="post">
                                    
                                    <div class="container" style="width: 1075px">
                                        
                                        <center><h3 class="form-signin-heading">Procedencia y lugar de procedencia</h3></center>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Vive en casa de empleador? </label>
                                            <br>
                                            <input type="radio" name="peracar" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="peracar" value="no"><label for="name">NO</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Se encuentra en condición de desplazamiento forzado?</label>
                                            <br>
                                            <input type="radio" name="sostiene" checked="" value="si"><label for="name" required="">SI</label>
                                            <br>
                                            <input type="radio" name="sostiene" value="no"><label for="name" required="">NO</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Proviene de Municipios o ciudades distintos a Bogotá?</label>
                                            <br>
                                            <input type="radio" name="municipio" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="municipio" value="no"><label for="name">NO</label>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Recide en zonas de alto grado de vulnerabilidad social y economica?</label>
                                            <br>
                                            <input type="radio" name="zona" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="zona" value="no"><label for="name">NO</label>
                                        </div>
                                        <input type="file" name="file3">
                                    </div>                                        
                                </form>           
                            </div>
                            
                            <div class="containerl2">
                                <form id="form" method="post">
                                    
                                    <div class="container" style="width: 1075px">
                                        
                                        <center><h3 class="form-signin-heading">Condiciones de salud</h3></center>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Presenta algún tipo de discapacidad fisica o mental? </label>
                                            <br>
                                            <input type="radio" name="discapacidad" checked="" value="si"><label for="name">SI</label>
                                            <br>
                                            <input type="radio" name="discapacidad" value="no"><label for="name">NO</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <br>
                                            <label for="subject">¿Sufre de algún problema de alimentación?</label>
                                            <br>
                                            <input type="radio" name="alimentacion" checked="" value="si"><label for="name" required="">SI</label>
                                            <br>
                                            <input type="radio" name="alimentacion" value="no"><label for="name" required="">NO</label>
                                        </div>

                                        <input type="file" name="file3">
                                    </div>                                        
                                </form>           
                            </div>
                                       
                        </div>
                                                                 
                    </div>                                               
                </div>

                <div class="container" >
                    <div class="col-sm-12"> </div>
                    <div class="col-sm-12" style="padding-top: 10%"> 
                        <button class= "btn btn-primary btn-block" type="submit">Enviar</button>  
                    </div>
                    <div class="col-sm-12" style="padding-left:10%"> </div>
                </div>

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
