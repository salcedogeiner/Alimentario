<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Convocatoria</title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <script src="public/js/bootstrap.min.js"></script> 
        
    </head>
    <body>
        <div id="header">
            <div>
                <a href="index.php" id="logo"><img src="public/images/bienestar.jpg" alt="logo" height="90"></a>
                <ul>
                    <li >
                        <a href="index.php">Inicio</a>
                    </li>
                    <li >
                        <a href="info.php">Info</a>
                    </li>
                    <li class="selected">
                        <a href="login.php">Entrar</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="containerl">

            <form id="signup" method="post">

                <div class="header">

                    <h3>Crear convocatoria</h3>

                    <p>Llena el formuario para crear una convocatoria</p>

                </div>
                <br>
                <div class="inputs">
                    
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Facultad</option>
                                <option value="Desplazado">Ingenieria</option>
                                <option value="Indigena">Tecnologica</option>
                                <option value="Desmovilizado">Vivero</option>
                                <option value="Reinsertado">Asab</option>
                                <option value="Afrocolombiano">Macarena</option>
                            </select>
                    <br>
                    <input type="numeric" name="cupos" class="form-control" placeholder="cupos" />
                    <br>
                    <input type="text" name="periodo" class="form-control" placeholder="periodo" />
                    
                    <div class="inputs">
                            <div class="row">
                                <div class='col-sm-6'>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <script type="text/javascript">
                                $(function () {
                                $('#datetimepicker1').datetimepicker();
                                });
                            </script>
                            </div>
                </div>
                
                <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>
    </div>
</div>

                    <a id="submit" href="#">CREAR</a>
                </div>
                
                

            </form>
        </div>







        <div id="footer">
            <div>
                <br></br>
                    <br></br>
                <p>
                <center>&#169; 2015 Bases de Datos 2.</center>
                </p>
                
            </div>
        </div>
    </body>
    
</html>