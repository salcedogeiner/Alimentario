<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subsidio
 *
 * @author ANDREY
 */
class Subsidio {
    //put your code here
    private $id_subsidio;
    private $tipo_subsidio;
    private $descuento;
    
    public function getId_subsidio() {
        return $this->id_subsidio;
    }

    public function setId_subsidio($id_subsidio) {
        $this->id_subsidio = $id_subsidio;
        return $this;
    }
    
    public function getTipo_subsidio() {
        return $this->tipo_subsidio;
    }

    public function setTipo_subsidio($tipo_subsidio) {
        $this->tipo_subsidio = $tipo_subsidio;
        return $this;
    }
    
    public function getDescuento() {
        return $this->descuento;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
        return $this;
    }
}

?>
