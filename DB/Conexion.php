<?php
  /**
     * Clase de conexion
     * Implementada con patron de diseño singleton
     *
     * @author leswider
     */
    class Conexion {
 
        private $_oLinkId; //objeto resource que indicara si se ha conectado
        private $_sServidor;
        private $_sNombreBD;
        private $_sUsuario;
        private $_sClave;
        private $_sPuerto;
        public static $sMensaje;
        private static $_oSelf = null; //Almacenara un objeto de tipo Conexion
 
        /**
         *
         * @param string Nombre del usuario a conectarse.
         * @param string Password de conexión.
         * @param string Nombre de la base de datos.
         * @param string Nombre del servidor.
         */
 
        private function __construct() {
 
            //$this->_sServidor = '192.168.X.X';
            //$this->_sNombreBD = 'MYDB';
            $this->_sUsuario = $_SESSION['usuario_login'];
            $this->_sClave = $_SESSION['password_login'];
            $this->_sPuerto = "localhost/XE"; // PUERTO QUE ESCUCHA ORACLE
        }
 
        /**
         * Este es el pseudo constructor singleton
         * Comprueba si la variable privada $_oSelf tiene un objeto
         * de esta misma clase, si no lo tiene lo crea y lo guarda
         * @static
         * @return resource
         */
        public static function getInstancia() {
 
            if (!isset(self::$_oSelf)) {
                $instancia = new self(); //new self ejecuta __construct()
                self::$_oSelf = $instancia;
                $this->_oLinkId =$instancia->conectar();
                }
            $conex = self::$_oSelf;
            return $conex->_oLinkId; //Se devuelve el link a la conexion
        }
 
       
        private function conectar() {
 
            $this->_oLinkId = null;
            $intentos = 0;
            while (!is_resource($this->_oLinkId) && $intentos < 1) {
                $intentos++;
                $this->_oLinkId =oci_connect($this->_sUsuario, $this->_sClave, $this->_sPuerto);
            }
 
            if (is_resource($this->_oLinkId)) {
                self::$sMensaje = "Conexion exitosa!<br/>";
            } else {
                
                self::$sMensaje = "ERROR: No se puede conectar a la base de datos..!<br/>";
            }
            //echo self::$sMensaje;
            return $this->_oLinkId;
        }
 
        /**
         * Este método verifica si había una conexión abierta anteriormenete. Si había la cierra.
         *
         * @static
         * @return boolean true si existía la conexión, false si no existía.
         */
        public static function desconectar() {
 
            $conexion_activa = false;
            if (self::$_oSelf instanceof self) {
                $bandera = true;
                $instancia = self::$_oSelf;
                oci_close($instancia->_oLinkId); //cierro la conexion activa
                self::$_oSelf = null; //destruyo el objeto
            }
            return $conexion_activa;
        }
 
    }
$_SESSION['usuario_login']=$_POST['password_login'];;    
$_SESSION['password_login']=$_POST['password_login'];;
$link=Conexion::getInstancia(); 
echo $link;
//include '../GUI/indexEstudiante.php';