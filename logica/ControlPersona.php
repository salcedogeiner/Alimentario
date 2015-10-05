<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DB/PersonaDAO.php';

class ControlPersona{
    
    private $persona;
    private $personaDAO;
    public function __construct() {
        $this->personaDAO=new PersonaDAO();
    }
    
    public function crearPersona($codigo_persona,$nombre_persona,$apellido_persona,$tipo_persona,$usuario,$genero,$documento){
        $this->persona = new Persona();
        //$this->persona->setCodigo_persona($codigo_persona);
        $this->persona->setNombre_persona($nombre_persona);
        $this->persona->setApellido_persona($apellido_persona);
        $this->persona->setTipo_persona($tipo_persona);
        $this->persona->setUsuario_persona($usuario);
        $this->persona->setGenero_persona($genero);
        $this->persona->setDocumento_persona($documento);
        $this->personaDAO->crearPersona($this->persona); 
    }
    
    public function buscarPersonaxUsuario($usuario){
        return $this->personaDAO->buscarPersonaxUsuario($usuario);      
    }
    
    public function modificarPersona($codigo_persona,$nombre_persona,$apellido_persona,$tipo_persona,$usuario,$genero,$documento){
        $this->persona = new Persona();
       // $this->persona->setCodigo_persona($codigo_persona);
        $this->persona->setNombre_persona($nombre_persona);
        $this->persona->setApellido_persona($apellido_persona);
        $this->persona->setTipo_persona($tipo_persona);
        $this->persona->setUsuario_persona($usuario);
        $this->persona->setGenero_persona($genero);
        $this->persona->setDocumento_persona($documento);
        return $this->personaDAO->modificarPersona($this->persona);      
    } 
}
