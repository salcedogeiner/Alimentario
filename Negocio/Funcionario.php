<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Funcionario{
    private $nombre_funcionario;
    private $apellido_funcionario;
    private $codigo;
    private $usuario_funcionario;
    
    public function __construct() {
        
    }

    
    public function getNombre_funcionario() {
        return $this->nombre_funcionario;
    }

    public function getApellido_funcionario() {
        return $this->apellido_funcionario;
    }

    public function getId_funcionario() {
        return $this->id_funcionario;
    }

    public function getUsuario_funcionario() {
        return $this->usuario_funcionario;
    }

    public function setNombre_funcionario($nombre_funcionario) {
        $this->nombre_funcionario = $nombre_funcionario;
        return $this;
    }

    public function setApellido_funcionario($apellido_funcionario) {
        $this->apellido_funcionario = $apellido_funcionario;
        return $this;
    }

    public function setId_funcionario($id_funcionario) {
        $this->id_funcionario = $id_funcionario;
        return $this;
    }

    public function setUsuario_funcionario($usuario_funcionario) {
        $this->usuario_funcionario = $usuario_funcionario;
        return $this;
    }


    
    
    
}