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
    
    public function __construct() {
        
    }

    public function getId_condicion() {
        return $this->id_condicion;
    }

    public function getCodigo_est() {
        return $this->codigo_est;
    }

    public function getId_convocatoria() {
        return $this->id_convocatoria;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setId_condicion($id_condicion) {
        $this->id_condicion = $id_condicion;
    }

    public function setCodigo_est($codigo_est) {
        $this->codigo_est = $codigo_est;
    }

    public function setId_convocatoria($id_convocatoria) {
        $this->id_convocatoria = $id_convocatoria;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }




}

?>
