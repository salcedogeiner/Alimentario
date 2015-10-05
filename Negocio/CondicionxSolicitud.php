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
class CondicionxSolicitud {
    //put your code here
    
    private $id_condicion;
    private $codigo_est;
    private $id_convocatoria;
    private $descripcion;
    
    function __construct() {        
    }
    
    function getId_condicion() {
        return $this->id_condicion;
    }

    function getCodigo_est() {
        return $this->codigo_est;
    }

    function getId_convocatoria() {
        return $this->id_convocatoria;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_condicion($id_condicion) {
        $this->id_condicion = $id_condicion;
    }

    function setCodigo_est($codigo_est) {
        $this->codigo_est = $codigo_est;
    }

    function setId_convocatoria($id_convocatoria) {
        $this->id_convocatoria = $id_convocatoria;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}

?>
