<?php /*if (!isset($_SESSION)){
     session_start();
}?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ConexionDB {

    private $user;        //usuario creado por la base de datos              
    private $password;      //pass del usuario
    private $host = "localhost/XE";     //host del servidor
    private $nombreBD="apoyo_alimentario";      //nombre del schema de la base de datos
    private $conn;          //sesion de conexion a la bd

    
    //se pasan los parametros para una sesion nueva sobre oracle
    public function __construct($usuario, $clave) {
        $this->user = $usuario;         
        $this->password = $clave;
    }

    //se realiza la conexion a la base de datos
    public function conectarDB() {
        //error_reporting(0);
        $this->conn = oci_connect($this->user, $this->password, $this->host);
        if (!$this->conn) {
            
            //$m = oci_error();
            //echo $m['message'], "n";
            return FALSE;
        } else {
            //echo 'Conexion con exito a Oracle';
            return TRUE;
        }
// Close the Oracle connection         
        //oci_close($conn);  
    }
    //funcion para finalizar sesion creada por la base de datos
    public static function desconectar() {
        oci_close($this->conn); //cierro la conexion activa 
        $this->conn=null;   //elimina conexion
    }

    public function getConn() {
        return $this->conn;        //returna la sesion
    }

}

