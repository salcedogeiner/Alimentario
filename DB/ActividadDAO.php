<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActividadDAO
 *
 * @author ANDREY
 */
include '../Negocio/Actividad.php';
class ActividadDAO {
    //put your code here
    public function __construct() {
        
    }

    public function crearActividad($actividad){
       session_start();
       $sqltxt="insert into s_actividad values(14,'".$actividad->getNombre_actividad()."','".$actividad->getDescripcion()."')";
            $stid = oci_parse($_SESSION['sesion_logueado'],$sqltxt);
            oci_execute($stid);   
    }
}

?>
