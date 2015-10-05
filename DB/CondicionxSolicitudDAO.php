<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlxSolicitudDAO
 *
 * @author Sptn2
 */
include '../Negocio/CondicionxSolicitud.php';
class CondicionxSolicitudDAO {
    //put your code here
    
    public function __construct() {
        
    }

    public function crearCondicionxSolicitud($condicionxsolicitud){
        $condicionxsolicitud=new CondicionxSolicitud();
        
        $sqltxt="insert into CondicionxSolicitud values(".$condicionxsolicitud->getId_condicion().",'".$condicionxsolicitud->getCodigo_est()."',".
                $condicionxsolicitud->getId_convocatoria().",'".$condicionxsolicitud->getDescripcion()."')";
        $stid = oci_parse($_SESSION['sesion_logueado'],$sqltxt);
        oci_execute($stid);
        
    }
    
    
    
    
    
}
