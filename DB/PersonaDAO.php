<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Negocio/Persona.php';

class PersonaDAO {

    public function __construct() {
        
    }

    public function buscarPersonaxUsuario($usuario) {
        
        $persona = new Persona();
        $sqltxt = "select * from s_persona where usuario = '".$usuario."'";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            //$persona->setCodigo_persona(oci_result($stid, 'CODIGO'));
            $persona->setNombre_persona(oci_result($stid, 'NOMBRE_PER'));
            $persona->setApellido_persona(oci_result($stid, 'APELLIDO_PER'));
            $persona->setTipo_persona(oci_result($stid, 'TIPO'));
            $persona->setUsuario_persona(oci_result($stid, 'USUARIO'));
            $persona->setGenero_persona(oci_result($stid, 'GENERO'));            
            $persona->setDocumento_persona(oci_result($stid, 'DOCUMENTO'));
        }
        //echo $persona->getApellido_persona();
        return $persona;
    }
    
 
    
    public function crearPersona($persona) {
         $sqltxt="insert into s_persona values(".$persona->getCodigo_persona().",'".$persona->getNombre_persona()."','".$persona->getApellido_persona()."','".$persona->getTipo_persona()."','".$persona->getUsuario_persona()."','".$persona->getGenero_persona()."',".$persona->getDocumento_persona().")";
         $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
         oci_execute($stid);
         
    }
    
     public function modificarPersona($persona) {
        $sqltxt="update s_persona set nombre_per='".$persona->getNombre_persona()."',apellido_per='".$persona->getApellido_persona()."',tipo='".$persona->getTipo_persona()."',usuario='".$persona->getUsuario_persona()."',genero='".$persona->getGenero_persona()."',documento=".$persona->getDocumento_persona()." where codigo=".$persona->getCodigo_persona()."";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
    }
}