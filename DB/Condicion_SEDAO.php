<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condicion_SEDAO
 *
 * @author Sptn2
 */
include '../Negocio/Condicion_SE.php';
class Condicion_SEDAO {
    //put your code here
    public function __construct() {
        
    }
    
    public function crearCondicion_SE($condicion_SE){
        //$condicion_SE = new Condicion_SE();
        $sqltxt="insert into s_condicion_SE values(id_condicion_se.nextval,".$condicion_SE->getId_tipo_condicion().",'".$condicion_SE->getNombre_condicion().
                "',".$condicion_SE->getPuntaje().")";
        $stid = oci_parse($_SESSION['sesion_logueado'],$sqltxt);
        oci_execute($stid);
    }
    
    public function verCondiciones_SExtipo($id_tipo){
        $condiciones = array();
        $i=0;
        //$facultades=new ArrayObject($array);
        $sqltxt = "select * from s_condicion_se where id_tipo_cond =".$id_tipo;
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch_array($stid)) {
            $condicion = new Condicion_SE();
            $condicion->setId_condicion(oci_result($stid, 'ID_CONDICION'));   //setIdfacultad(oci_result($stid, 'ID_FACULTAD'));
            $condicion->setId_tipo_condicion(oci_result($stid, 'ID_TIPO_COND'));
            $condicion->setNombre_condicion(oci_result($stid, 'NOMBRE_CONDICION'));
            $condicion->setPuntaje(oci_result($stid, 'PUNTAJE'));
            $condiciones[$i]=$condicion;
            //echo $facultades[$i]->getNombre_facultad();
            $i+=1;
        }        
        return $condiciones;
    }
}
