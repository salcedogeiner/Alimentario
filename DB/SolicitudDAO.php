<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SolicitudDAO
 *
 * @author ANDREY
 */
include '../Negocio/Solicitud.php';
class SolicitudDAO {
    //put your code here
    public function __construct() {
        
    }
    public function buscarSolicitudxId($id_solicitud) {
        
        //$solicitud = new Solicitud();
        $sqltxt = "select * from solicitud where id_solicitud = ".$id_solicitud."";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            $solicitud->setCodigo_estudiante(oci_result($stid, 'CODIGO'));
            $solicitud->setId_solicitud(oci_result($stid, 'ID_SOLICITUD'));
            $solicitud->setId_convocatoria(oci_result($stid, 'ID_CONVOCATORIA'));
            $solicitud->setId_facultad(oci_result($stid, 'ID_FACULTAD'));
            $solicitud->setSoportes_solicitud(oci_result($stid, 'SOPORTES'));
        }
        //echo $persona->getApellido_persona();
        return $solicitud;
    }
    
    public function buscarSolicitudxFacultad($id_facultad) {
        
        $solicitud = new Solicitud();
        $sqltxt = "select * from solicitud where id_facultad = ".$id_facultad."";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            $solicitud->setCodigo_estudiante(oci_result($stid, 'CODIGO'));
            $solicitud->setId_solicitud(oci_result($stid, 'ID_SOLICITUD'));
            $solicitud->setId_convocatoria(oci_result($stid, 'ID_CONVOCATORIA'));
            $solicitud->setId_facultad(oci_result($stid, 'ID_FACULTAD'));
            $solicitud->setSoportes_solicitud(oci_result($stid, 'SOPORTES'));
        }
        //echo $persona->getApellido_persona();
        return $solicitud;
    }
    
    public function CrearSolicitud($solicitud) {
         $sqltxt="insert into solicitud values(".$solicitud->getCodigo_estudiante().",".$solicitud->getId_solicitud().",".$solicitud->getId_convocatoria().",".$solicitud->getId_facultad().",".$solicitud->getSoportes_solicitud().")";
         $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
         oci_execute($stid);
         
    }
    
     public function modificarSolicitud($solicitud) {
        $sqltxt="update solicitud set codigo=".$solicitud->getCodigo_estudiante().",id_convocatoria=".$solicitud->getId_convocatoria().",id_facultad=".$solicitud->getId_facultad().",soportes=".$solicitud->getSoportes_solicitud()." where id_solicitud=".$solicitud->getId_solicitud()."";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
    }
    
     public function eliminarSolicitud($id_solicitud) {
        $sqltxt="delete FROM solicitud where id_solicitud=".$id_solicitud."";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
    }
}

?>
