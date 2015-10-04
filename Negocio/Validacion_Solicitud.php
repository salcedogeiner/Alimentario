<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validacion_Solicitud
 *
 * @author ANDREY
 */
class Validacion_Solicitud {
    //put your code here
    private $puntaje_total;
    private $beneficio;
    
    public function getPuntaje_total() {
        return $this->puntaje_total;
    }

    public function setPuntaje_total($puntaje_total) {
        $this->puntaje_total = $puntaje_total;
        return $this;
    }
    
    public function getBeneficio() {
        return $this->beneficio;
    }

    public function setBeneficio($beneficio) {
        $this->beneficio = $beneficio;
        return $this;
    }
    
}

?>
