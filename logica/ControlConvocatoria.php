<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../DB/ConvocatoriaDAO.php';
class ControlConvocatoria{
    
    private $convocatoria;
    private $convocatoriaDAO;
    
    public function __construct() {
       $this->convocatoriaDAO = new ConvocatoriaDAO();     
    }
    
    public function crearConvocatoria($cupos,$fecha_inicio,$fecha_fin,$periodo,$id_facultad){
        
        $this->convocatoria=new Convocatoria();        
        $this->convocatoria->setCupos($cupos);
        $this->convocatoria->setFecha_inicio($fecha_inicio);
        $this->convocatoria->setFecha_fin($fecha_fin);   
        $this->convocatoria->setPeriodo($periodo);
        $this->convocatoria->setId_facultad($id_facultad);
        //echo $this->convocatoria->getId_facultad();
        $this->convocatoriaDAO->crearConvocatoria($this->convocatoria);
    }
    public function buscarConvocatoriaxFacultad($id_facultad){
        return $this->convocatoriaDAO->buscarConvocatoriaxFacultad($id_facultad);
    }
    
    public function verConvocatoriasActivas(){
        return $this->convocatoriaDAO->verConvocatoriasActivas(); 
    }
    
    public function verConvocatorias(){
        $convocatoria= $this->convocatoria;
    }
    
   
}