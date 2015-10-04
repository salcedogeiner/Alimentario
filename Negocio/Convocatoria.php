<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Convocatoria
 *
 * @author ANDREY
 */
class Convocatoria {
    //put your code here
    private $id_convocatoria;
    private $id_facultad;
    private $fecha_inicio;
    private $fecha_fin;
    private $cupos;
    private $periodo;
    
          public function __construct() {
        
    }
   
    public function getId_convocatoria() {
        return $this->id_convocatoria;
    }

    public function getId_facultad() {
        return $this->id_facultad;
    }

    public function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    public function getFecha_fin() {
        return $this->fecha_fin;
    }

    public function getCupos() {
        return $this->cupos;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setId_convocatoria($id_convocatoria) {
        $this->id_convocatoria = $id_convocatoria;
        return $this;
    }

    public function setId_facultad($id_facultad) {
        $this->id_facultad = $id_facultad;
        return $this;
    }

    public function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
        return $this;
    }

    public function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
        return $this;
    }

    public function setCupos($cupos) {
        $this->cupos = $cupos;
        return $this;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
        return $this;
    }


    
    
}

?>
