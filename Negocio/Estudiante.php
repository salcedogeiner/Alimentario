<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Estudiante{
    
    private $codigo;
    private $documento_estudiante;
    private $matriculas_estudiante;
    private $activo_estudiante;
    private $carrera_estudiante;
    private $promedio_estudiante;
    
    
    public function __construct() {
        
    }

    

    public function getMatriculas_estudiante() {
        return $this->matriculas_estudiante;
    }

    public function getDocumento_estudiante() {
        return $this->documento_estudiante;
    }

    public function getCodigo_estudiante() {
        return $this->codigo;
    }

    public function getUsuario_estudiante() {
        return $this->usuario_estudiante;
    }

    public function getCarrera_estudiante() {
        return $this->carrera_estudiante;
    }

    public function getActivo_estudiante() {
        return $this->activo_estudiante;
    }

    public function setNombre_estudiante($nombre_estudiante) {
        $this->nombre_estudiante = $nombre_estudiante;
        return $this;
    }

    public function setApellido_estudiante($apellido_estudiante) {
        $this->apellido_estudiante = $apellido_estudiante;
        return $this;
    }

    public function setMatriculas_estudiante($matriculas_estudiante) {
        $this->matriculas_estudiante = $matriculas_estudiante;
        return $this;
    }

    public function setDocumento_estudiante($documento_estudiante) {
        $this->documento_estudiante = $documento_estudiante;
        return $this;
    }
    
     public function setPromedio_estudiante($promedio_estudiante) {
        $this->promedio_estudiante = $promedio_estudiante;
        return $this;
    }
    public function setCodigo_estudiante($codigo_estudiante) {
        $this->codigo = $codigo_estudiante;
        return $this;
    }

    public function setUsuario_estudiante($usuario_estudiante) {
        $this->usuario_estudiante = $usuario_estudiante;
        return $this;
    }

    public function setCarrera_estudiante($carrera_estudiante) {
        $this->carrera_estudiante = $carrera_estudiante;
        return $this;
    }

    public function setActivo_estudiante($activo_estudiante) {
        $this->activo_estudiante = $activo_estudiante;
        return $this;
    }


    
    
    
    
}