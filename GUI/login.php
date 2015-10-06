<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
//session_start();
include '../DB/ConexionDB.php';
//include '../logica/ControlPersona.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Apoyo</title>
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    </head>
    <body>        
        <div id="header">
            <div>
                <a href="index.php" id="logo"><img src="../public/images/bienestar.png" alt="logo" height="90"></a>
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
        <br><br>
        <?php
        if (isset($_POST['submit'])) {
            //include '../DB/ConexionDB.php';
            $conn = new ConexionDB($_POST['usuario_login'], $_POST['password_login']);
            if ($conn->conectarDB()) {
                $usuario_login = $_POST['usuario_login'];
                $usuario_password = $_POST['password_login'];
                session_start();
                $sesion = $conn->getConn();
                $_SESSION['sesion_logueado'] = $conn->getConn();
                $_SESSION['usuario_login'] = $usuario_login;
                $_SESSION['password_login'] = $usuario_password;
                //$_SESSION['sesion_logueado'];
                /*$cPersona=  new ControlPersona();
                $persona=new Persona();
                $persona=  $cPersona->buscarPersonaxUsuario($usuario_login);
                echo $persona->getApellido_persona();//->getNombre_persona()." ".$persona->getTipo_persona();*/
                header("Location: menu.php");
            } else {
                echo '<center><h1>ingerese un usuario o contrasena validos</h1></center>';
                //header("Location: ../GUI/login.php");
            }
        } 
        ?>
<br><br>
        <div class="containerl">

            <form action="#" id="signup" method="post">

                <div class="header">

                    <h3>Entrar</h3>

                    <p>Entra para obtener nuestros beneficios</p>

                </div>

                <div class="sep"></div>

                <div class="inputs">

                    <input type="text"  name="usuario_login" placeholder="user" autofocus />

                    <input type="password" name="password_login" placeholder="Password" />

                    <input type="submit" id="submit" name="submit"/>
                </div>

            </form>
        </div>
<?php 
 include './footer.php';
 ?>
    </body>
</html>