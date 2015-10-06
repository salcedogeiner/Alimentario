<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipo_actividadDAO
 *
 * @author ANDREY
 */

include '../Negocio/Tipo_Condicion_SE.php';
class Tipo_condicionDAO{
    
    
    public function __construct() {
        
    }

    
    public function crearTipo_condicion($tipo_condicion){
        //$tipo_condicion=new Tipo_Condicion_SE();
        
        $sqltxt="insert into s_Tipo_Condicion values(id_tipo_condicion_se.nextval,'".$tipo_condicion->getNombre_tipo_condicion()."')";
            $stid = oci_parse($_SESSION['sesion_logueado'],$sqltxt);
            oci_execute($stid);           
    }
    public function verTipos_Condiciones(){
        $tipos_condiciones = array();
        $i=0;
        //$facultades=new ArrayObject($array);
        $sqltxt = "select * from s_Tipo_Condicion";
        //echo $sqltxt;
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch_array($stid)) {
            $tipo = new Tipo_Condicion_SE();
            $tipo->setId_tipo_condicion(oci_result($stid, 'ID_TIPO_COND'));
            $tipo->setNombre_tipo_condicion(oci_result($stid, 'NOMBRE_TIPO_COND'));
            $tipos_condiciones[$i]=$tipo;
            //echo $tipos_condiciones[$i]->getNombre_tipo_condicion();
            $i+=1;
        }        
        return $tipos_condiciones;
    }
    
    
    
    
    
}