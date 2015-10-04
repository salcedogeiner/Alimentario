<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actividad
 *
 * @author ANDREY
 */
class Actividad {
    //put your code here
    private $id_actividad;
    private $nombre_actividad;
    private $descripcion;
    
    public function getId_actividad() {
        return $this->id_actividad;
    }

    public function setId_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
        return $this;
    }
    
    public function getNombre_actividad() {
        return $this->nombre_actividad;
    }

    public function setNombre_actividad($nombre_actividad) {
        $this->nombre_actividad = $nombre_actividad;
        return $this;
    }
    
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }
}

?>
