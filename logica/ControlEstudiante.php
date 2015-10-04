<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../Negocio/Estudiante.php';

class ControlEstudiante{
    
    private $estudiante;
    
    
    private function __construct() {
        $this->estudiante=new Estudiante();
        
    }
    
    public function hacerEstudiante($nombre_estudiante,$apellido_estudiante,$documento_estudiante,$codigo_estudiante,
                                    $carrera_estudiante,$activo_estudiante,$usuario_estudiante,$matriculas_estudiante){
        $estudiante=  $this->estudiante;
        $estudiante->setNombre_estudiante($nombre_estudiante);
        $estudiante->setApellido_estudiante($apellido_estudiante);
        $estudiante->setDocumento_estudiante($documento_estudiante);
        $estudiante->setCodigo_estudiante($codigo_estudiante);
        $estudiante->setCarrera_estudiante($carrera_estudiante);
        $estudiante->setActivo_estudiante($activo_estudiante);
        $estudiante->setUsuario_estudiante($usuario_estudiante);
        $estudiante->setMatriculas_estudiante($matriculas_estudiante);
    }
    
    
    
}
