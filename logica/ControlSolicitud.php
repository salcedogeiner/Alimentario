<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../DB/SolicitudDAO.php';
class ControlSolicitud{
    private $solicitud;
    private $solicitudDAO;
    
    public function __construct() {
        $this->solicitudDAO=new SolicitudDAO();       
    }
    
    function CrearSolicitud($codigo,$id_convocatoria,$soportes_solicitud){
        $this->solicitud = new Solicitud();
        $this->solicitud->setCodigo_estudiante($codigo);
         $this->solicitud->setId_convocatoria($id_convocatoria);
        $this->solicitud->setSoportes_solicitud($soportes_solicitud);
        $this->solicitudDAO->crearSolicitud($this->solicitud); 
    }
    
    public function buscarSolicitudxId($id_solicitud){
        return $this->solicitudDAO->buscarSolicitudxId($id_solicitud);      
    }
    
    public function buscarSolicitudxFacultad($id_facultad){
        return $this->solicitudDAO->buscarSolicitudxFacultad($id_facultad);      
    }
    
    public function verSolicitudes(){
        return $this->solicitudDAO->buscarSolicitudes();
    }
            
      function modificarSolicitud($codigo,$id_solicitud,$id_convocatoria,$id_facultad,$soportes_solicitud){
        $this->solicitud = new Solicitud();
        $this->solicitud->setCodigo_estudiante($codigo);
        $this->solicitud->setId_solicitud($id_solicitud);
        $this->solicitud->setId_convocatoria($id_convocatoria);
        $this->solicitud->setId_facultad($id_facultad);
        $this->solicitud->setSoportes_solicitud($soportes_solicitud);
        $this->solicitudDAO->modificarSolicitud($this->solicitud); 
    }
     public function eliminarSolicitud($id_solicitud){
        return $this->solicitudDAO->eliminarSolicitud($id_solicitud);      
    }
    
}