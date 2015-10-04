<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condicion_SEDAO
 *
 * @author Sptn2
 */
include '../Negocio/Condicion_SE.php';
class Condicion_SEDAO {
    //put your code here
    public function __construct() {
        
    }
    
    public function crearCondicion_SE($condicion_SE){
        //$condicion_SE = new Condicion_SE();
        $sqltxt="insert into condicion_SE values(2,".$condicion_SE->getId_tipo_condicion().",'".$condicion_SE->getNombre_condicion().
                "',".$condicion_SE->getPuntaje().")";
        $stid = oci_parse($_SESSION['sesion_logueado'],$sqltxt);
        oci_execute($stid);
    }

}
