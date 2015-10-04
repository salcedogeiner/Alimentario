<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Facultad
 *
 * @author ANDREY
 */
class Facultad {
    private $id_facultad;
    private $nombre_facultad;
    
    public function __construct() {
        
    }

    
     public function getId_facultad() {
        return $this->id_facultad;
    }

   
     public function getNombre_facultad() {
        return $this->nombre_facultad;
    }

    public function setNombre_facultad($nombre_facultad) {
        $this->nombre_facultad = $nombre_facultad;
        return $this;
    }
    
    public function setIdfacultad($id_facultad) {
        $this->id_facultad = $id_facultad;
        return $this;
    }
}
?>
