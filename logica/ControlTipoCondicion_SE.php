<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlTipoCondicion
 *
 * @author ANDREY
 */
include '../DB/Tipo_condicionDAO.php';
class ControlTipoCondicion_SE{
    //put your code here
     private $tipo_condicion;
    private $tipo_condicionDAO;
    public function __construct() {
        $this->tipo_condicionDAO=new Tipo_condicionDAO();
    }
    
    public function crearTipo_Condicion($nombre_tipo_condicion){
         $this->tipo_condicion = new Tipo_Condicion_SE();
         $this->tipo_condicion->setNombre_tipo_condicion($nombre_tipo_condicion);
         $this->tipo_condicionDAO->crearTipo_condicion($this->tipo_condicion);      
    }
    
    public function verTipos_Condiciones(){
       // echo 'PASAAAAAAAAAAAAAAAAAAAAAAAAA';
        return $this->tipo_condicionDAO->verTipos_Condiciones();
    }
}
