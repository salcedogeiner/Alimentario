<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlActividad
 *
 * @author ANDREY
 */
include '../DB/ActividadDAO.php';
class ControlActividad {
    //put your code here
     private $actividad;
    private $actividadDAO;
    public function __construct() {
        $this->actividadDAO=new ActividadDAO();
    }
    
    public function crearActividad($nombre_actividad,$descripcion){
         $this->actividad = new Actividad();
         $this->actividad->setNombre_actividad($nombre_actividad);
         $this->actividad->setDescripcion($descripcion);
         $this->actividadDAO->crearActividad($this->actividad);  
    }
}

?>
