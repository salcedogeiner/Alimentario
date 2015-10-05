<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlCondicionxSolicitud
 *
 * @author Sptn2
 */
include '../DB/CondicionxSolicitudDAO.php';
include '../Negocio/CondicionxSolicitud.php';
class ControlCondicionxSolicitud {
    //put your code here
    
    private $condicionxsolicitud;
    private $condicionxsolicitudDAO;
    
    function __construct() {
        $this->condicionxsolicitudDAO=new CondicionxSolicitudDAO();        
    }
    
    public function crearCondicionxSolicitud(){
        $this->condicionxsolicitud = new CondicionxSolicitud();
        //$this->condicionxsolicitud->
        $this->condicionxsolicitudDAO->crearCondicionxSolicitud($condicionxsolicitud);
        
        
    }
            

    
    
    
}
