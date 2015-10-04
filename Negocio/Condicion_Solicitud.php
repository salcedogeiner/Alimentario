<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condicion_Solicitud
 *
 * @author ANDREY
 */
class Condicion_Solicitud {
    //put your code here
    
    private $descripcion;
    
   
    
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }
}

?>
