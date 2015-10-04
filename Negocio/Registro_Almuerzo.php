<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registro_Almuerzo
 *
 * @author ANDREY
 */
class Registro_Almuerzo {
    //put your code here
    private $id_registro;
    private $fecha;

    public function getId_registro() {
        return $this->id_registro;
    }

    public function setId_registro($id_registro) {
        $this->id_registro = $id_registro;
        return $this;
    }
    
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
        return $this;
    }
   
}

?>
