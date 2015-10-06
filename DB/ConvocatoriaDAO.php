<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Negocio/Convocatoria.php';
//include './ConexionDB.php';


class ConvocatoriaDAO{
    
    
    private $conn;
    
    public function __construct() {
        
        
    }

    
    public function crearConvocatoria($convocatoria){
        //$convocatoria=new Convocatoria();
            //echo $convocatoria->getId_facultad()."noadsno";
             $sqltxt="insert into s_convocatoria values(id_convocatoria.nextval,".$convocatoria->getId_facultad().",TO_DATE('".$convocatoria->getFecha_inicio()."','yyyy-mm-dd'),TO_DATE('".
            $convocatoria->getFecha_fin()."','yyyy,mm,dd'),".$convocatoria->getCupos().",'".$convocatoria->getPeriodo()."')";
             //echo $sqltxt;
            $stid = oci_parse($_SESSION['sesion_logueado'],$sqltxt);
            oci_execute($stid); 
    }
    public function buscarConvocatoriaxFacultad($id_facultad){
        $convocatoria = new Convocatoria();
        $sqltxt = "select * from s_convocatoria where id_facultad =".$id_facultad." AND fecha_fin > sysdate";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            //$persona->setCodigo_persona(oci_result($stid, 'CODIGO'));
            $convocatoria->setId_convocatoria(oci_result($stid, 'ID_CONVOCATORIA'));
            $convocatoria->setId_facultad(oci_result($stid, 'ID_FACULTAD'));
            $convocatoria->setFecha_inicio(oci_result($stid, 'FECHA_INICIO'));
            $convocatoria->setFecha_fin(oci_result($stid, 'FECHA_FIN'));
            $convocatoria->setCupos(oci_result($stid, 'CUPOS'));            
            $convocatoria->setPeriodo(oci_result($stid, 'PERIODO'));
        }
        echo $convocatoria->getId_convocatoria()."aaaaaaaaaaaaaaaaadwwqqwd";
        return $convocatoria;
    }
    public function verConvocatoriasActivas(){
        $convocatorias=array();
        $i=0;
        $sqltxt = "select * from s_convocatoria where fecha_inicio< sysdate AND fecha_fin > sysdate";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            //$persona->setCodigo_persona(oci_result($stid, 'CODIGO'));
            $convocatoria = new Convocatoria();
            $convocatoria->setId_convocatoria(oci_result($stid, 'ID_CONVOCATORIA'));
            $convocatoria->setId_facultad(oci_result($stid, 'ID_FACULTAD'));
            $convocatoria->setFecha_inicio(oci_result($stid, 'FECHA_INICIO'));
            $convocatoria->setFecha_fin(oci_result($stid, 'FECHA_FIN'));
            $convocatoria->setCupos(oci_result($stid, 'CUPOS'));            
            $convocatoria->setPeriodo(oci_result($stid, 'PERIODO'));
            $convocatorias[$i]=$convocatoria;
            $i+=1;
        }
        //echo $convocatoria->getId_convocatoria()."aaaaaaaaaaaaaaaaadwwqqwd";
        return $convocatorias;
        
    }
}