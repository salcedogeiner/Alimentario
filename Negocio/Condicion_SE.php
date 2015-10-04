<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condicion_SE
 *
 * @author ANDREY
 */
class Condicion_SE {
    //put your code here
    private $id_condicion;
    private $id_tipo_condicion;
    private $nombre_condicion;
    private $puntaje;
    
    public function __construct() {
        
    }
    
    public function getId_condicion() {
        return $this->id_condicion;
    }

    public function getId_tipo_condicion() {
        return $this->id_tipo_condicion;
    }

    public function getNombre_condicion() {
        return $this->nombre_condicion;
    }

    public function getPuntaje() {
        return $this->puntaje;
    }

    public function setId_condicion($id_condicion) {
        $this->id_condicion = $id_condicion;
        return $this;
    }

    public function setId_tipo_condicion($id_tipo_condicion) {
        $this->id_tipo_condicion = $id_tipo_condicion;
        return $this;
    }

    public function setNombre_condicion($nombre_condicion) {
        $this->nombre_condicion = $nombre_condicion;
        return $this;
    }

    public function setPuntaje($puntaje) {
        $this->puntaje = $puntaje;
        return $this;
    }
}

?>
