<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actividad_Beneficiario
 *
 * @author ANDREY
 */
class Actividad_Beneficiario {
    //put your code here
    private $cumplimiento;
    
    public function getCumplimiento() {
        return $this->cumplimiento;
    }

    public function setId_condicion($cumplimiento) {
        $this->cumplimiento = $cumplimiento;
        return $this;
    }
    
    
}

?>
