<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlFacultad
 *
 * @author ANDREY
 */
include '../DB/FacultadDAO.php';


class ControlFacultad {
    //put your code here
    private $facultad;
    private $facultadDAO;
    public function __construct() {
        $this->facultadDAO=new FacultadDAO();
    }
    
    public function crearFacultad($nombre_facultad){
         $this->facultad = new Facultad();
         $this->facultad->setNombre_facultad($nombre_facultad);
         $this->facultadDAO->crearFacultad($this->facultad);      
    }
    
    public function buscarFacultad($id_facultad){
        return $this->facultadDAO->buscarFacultad($id_facultad);      
        
    } 
    
    public function verFacultades(){
        return $this->facultadDAO->verFacultades();      
        
    } 
    
    public function modificarFacultad($facultad){
       $this->facultadDAO->modificarFacultad($facultad);      
        
    } 
    public function eliminarFacultad($id_facultad){
        $this->facultadDAO->eliminarFacultad($id_facultad);      
        
    } 
    
}
