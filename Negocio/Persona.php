<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Persona{
    
    private $documento_persona;
    private $nombre_persona;
    private $apellido_persona;
    private $tipo_persona;
    private $genero_persona;
    private $usuario_persona;
    //private $codigo_persona;
    
    public function __construct() {
        
    }


    public function getDocumento_persona() {
        return $this->documento_persona;
    }

    public function getNombre_persona() {
        return $this->nombre_persona;
    }

    public function getApellido_persona() {
        return $this->apellido_persona;
    }

    public function getTipo_persona() {
        return $this->tipo_persona;
    }

    public function getGenero_persona() {
        return $this->genero_persona;
    }

    public function getUsuario_persona() {
        return $this->usuario_persona;
    }
  /*public function getCodigo_persona() {
        return $this->codigo_persona;
    }*/
    public function setDocumento_persona($documento_persona) {
        $this->documento_persona = $documento_persona;
        return $this;
    }

    public function setNombre_persona($nombre_persona) {
        $this->nombre_persona = $nombre_persona;
        return $this;
    }

    public function setApellido_persona($apellido_persona) {
        $this->apellido_persona = $apellido_persona;
        return $this;
    }

    public function setTipo_persona($tipo_persona) {
        $this->tipo_persona = $tipo_persona;
        return $this;
    }

    public function setGenero_persona($genero_persona) {
        $this->genero_persona = $genero_persona;
        return $this;
    }

    public function setUsuario_persona($usuario_persona) {
        $this->usuario_persona = $usuario_persona;
        return $this;
    }

    /* public function setCodigo_persona($codigo_persona) {
        $this->codigo_persona = $codigo_persona;
        return $this;
    }*/

 
    
    
    
    
}