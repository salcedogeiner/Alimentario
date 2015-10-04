<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dia_tiquetera
 *
 * @author ANDREY
 */
class Dia_tiquetera {
    //put your code here
    private $id_dia;
    private $permiso;
    private $nombre_dia;

    public function getId_dia() {
        return $this->id_dia;
    }

    public function setId_dia($id_dia) {
        $this->id_dia = $id_dia;
        return $this;
    }
    
    public function getPermiso() {
        return $this->permiso;
    }

    public function setPermiso($permiso) {
        $this->permiso = $permiso;
        return $this;
    }
    
    public function getNombre_dia() {
        return $this->nombre_dia;
    }

    public function setNombre_dia($nombre_dia) {
        $this->nombre_dia = $nombre_dia;
        return $this;
    }
}

?>
