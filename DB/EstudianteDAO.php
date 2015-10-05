<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstudianteDAO
 *
 * @author ANDREY
 */
include '../Negocio/Estudiante.php';

class EstudianteDAO {
    //put your code here
    public function __construct() {
        
    }

    public function buscarEstudiantexDocumento($documento) {
        
        $estudiante = new Estudiante();
        $sqltxt = "select * from estudiante where documento = '".$documento."'";
        $stid = oci_parse($_SESSION['sesion_logueado'], $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            //$persona->setCodigo_persona(oci_result($stid, 'CODIGO'));
            $estudiante->setCodigo_estudiante(oci_result($stid, 'CODIGO_EST'));
            $estudiante->setDocumento_estudiante(oci_result($stid, 'DOCUMENTO'));
            $estudiante->setMatriculas_estudiante(oci_result($stid, 'MATRICULAS_EST'));
            $estudiante->setActivo_estudiante(oci_result($stid, 'ACTIVO'));
            $estudiante->setCarrera_estudiante(oci_result($stid, 'CARRERA'));            
            $estudiante->setPromedio_estudiante(oci_result($stid, 'PROMEDIO'));
        }
        //echo $persona->getApellido_persona();
        return $estudiante;
    }
    
 
   
}

?>

