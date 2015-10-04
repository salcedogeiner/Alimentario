<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Condicion
 *
 * @author ANDREY
 */
class Tipo_Condicion_SE {
    //put your code here
    private $id_tipo_condicion;
    private $nombre_tipo_condicion;
    
    public function __construct() {
        
    }

    public function getId_tipo_condicion() {
        return $this->id_tipo_condicion;
    }

    public function getNombre_tipo_condicion() {
        return $this->nombre_tipo_condicion;
    }

    public function setId_tipo_condicion($id_tipo_condicion) {
        $this->id_tipo_condicion = $id_tipo_condicion;
        return $this;
    }

    public function setNombre_tipo_condicion($nombre_tipo_condicion) {
        $this->nombre_tipo_condicion = $nombre_tipo_condicion;
        return $this;
    }

     
}
