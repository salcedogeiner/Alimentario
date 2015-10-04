<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        include './headerlog.php';
        include './menuLateral.php';
        ?>
        <div class="containerl">
            <div class="col-sm-8">
                <br><br><br>
                <form id="form" method="post" action="#">
                    <div class="header">
                        <h3>Crear Actividad</h3>                    
                    </div>
                    <br>
                    <label for="subject">Escriba el nombre de la actividad</label>
                    <br>
                    <input type="text" name="crear_actividad" class="form-control" placeholder="" />
                    <br>
                    <label for="subject">Descripción</label>
                    <br>
                    <textarea name="descripcion" rows="6" cols="30"></textarea>
                    
                    <div class="col-sm-6" style="padding-top: 10%"> 
                        <button class= "btn btn-primary btn-block" type="submit" name="submitcrear">Crear</button>  
                    </div>
                    
                </form> 
            </div>
        </div>
    </body>
</html>
