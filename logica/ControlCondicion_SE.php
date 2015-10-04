<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlCondicion
 *
 * @author Sptn2
 */
include '../DB/Condicion_SEDAO.php';
class ControlCondicion_SE {
    //put your code here
    private $condicion_SE;
    private $condicion_SEDAO;
    
    public function __construct() {
        $this->condicion_SEDAO= new Condicion_SEDAO();
        
    }

    public function crearCondicion_SE($id_tipo_condicion,$nombre_condicion,$puntaje){
        $this->condicion_SE = new Condicion_SE();
        $this->condicion_SE->setId_tipo_condicion($id_tipo_condicion);
        $this->condicion_SE->setNombre_condicion($nombre_condicion);
        $this->condicion_SE->setPuntaje($puntaje);
        
        $this->condicion_SEDAO->crearCondicion_SE($this->condicion_SE);
        
        
        
    }
    
}
