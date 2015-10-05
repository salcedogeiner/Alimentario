<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Solicitud{
    private $soportes_solicitud;
    private $codigo_estudiante;
    private $id_convocatoria;
    private $id_facultad;
    private $descripcion;
    
    public function __construct() {
        
    }

  
    
    public function getCodigo_estudiante() {
        return $this->codigo_estudiante;
    }
    
    public function getId_convocatoria() {
        return $this->id_convocatoria;
    }

    public function getId_facultad() {
        return $this->id_facultad;
    }
    
    public function getDescripcion() {
        return $this->descripcion;
    }
    
    public function getSoportes_solicitud() {
        return $this->soportes_solicitud;
    }



    public function setSoportes_solicitud($soportes_solicitud) {
        $this->soportes_solicitud = $soportes_solicitud;
        return $this;
    }
    
    public function setCodigo_estudiante($codigo_estudiante) {
        $this->codigo_estudiante = $codigo_estudiante;
        return $this;
    }
    
    public function setId_convocatoria($id_convocatoria) {
        $this->id_convocatoria = $id_convocatoria;
        return $this;
    }
    
    public function setId_facultad($id_facultad) {
        $this->id_facultad = $id_facultad;
        return $this;
    }
    
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }
    
    
}