<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inforación usuario</title>

        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="../public/css/index_style.css">
        <link rel="stylesheet"  href="../public/css/style.css"/>
    </head>
    <body>
        <?php 
 include './headerlog.php';
 include './menuLateral.php';
      ?>
        <div class="container">
<div class="col-sm-8">
    
        <div><center> <h3>Información usuario</h3></center></div>
        
       
            <div class="wrapper">
                <form class="form"  method = "POST" >      
                    <div>
                        
                        <br><br><br><br>
                        
                        <div>
                        
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">NOMBRE:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder="Prueba nombre"></div>
                        </div>
                            
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">APELLIDO:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div>
                            
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">DOCUMENTO:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div>
                            
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">DIRECCIÓN:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                            
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">BARRIO Y LOCALIDAD</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                        
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">E-MAIL:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div>    
                        
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">TELEFONO:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                            
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">ESTADO CIVIL:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                                                 
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">ESTRATO SOCIO ECONOMICO:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                        
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">POBLACIÓN A LA QUE PETENESE:</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                            
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">VALOR DE LA MATRICULA</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                        
                        <div class="container">
                            <div class="col-md-6"><h3 for="subject">INGRESOS MENSUALES</h3></div>
                            <div class="col-md-6"><input class="form-control" readonly="" type="text" placeholder=""></div>
                        </div> 
                            
                        </div>                        
                        
                    </div>                   
                    
                    <div class="span-4">
                        <br>
                        <center><h3 class="form-signin-heading">.</h3></center>
                    </div>
                    
                    
                    
                    <div class="row" >
                        <div class="col-sm-4"> </div>
                        <div class="col-sm-4" style="padding-top: 10%"> 
                            <button class= "btn btn-primary btn-block" type="submit">Confimar</button>  
                        </div>
                        <div class="col-sm-4" style="padding-left:10%"> </div>
                    </div>
                </form>
            </div>                         
            </div> 
</div>
        <br><br>
        
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script> 
</html>