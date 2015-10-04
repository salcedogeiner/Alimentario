<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './ConexionDB.php';
include './PersonaDAO.php';
include '../Negocio/Facultad.php';

class ConsultasAux{
    
   
    
    function __construct() {


    }
    public function consultar(){
       //$prub = Conexion::getInstancia("system", "admin");
        //$p=new Persona();
        $persina=new PersonaDAO();
        
       $aa=new ConexionDB("apoyo_alimentario","apoyo_alimentario");
       if($aa->conectarDB()){
           $sesion=$aa->getConn();
          
        $facultades = array();
        $i=0;
        $sqltxt = "select * from facultad";
        $stid = oci_parse($sesion, $sqltxt);
        oci_execute($stid);
        while(oci_fetch($stid)) {
            $facultad = new Facultad();
            $facultad->setIdfacultad(oci_result($stid, 'ID_FACULTAD'));
            $facultad->setNombre_facultad(oci_result($stid, 'NOMBRE_FACULTAD'));
            $facultades[$i]=$facultad;
            $i+=1;
        }
        return $facultades;
       
       //oci_parse($a, $sql_text);    
       //echo $a;
        
    }
    }
    
}
   
$consu = new ConsultasAux();
//$consu->consultar();
foreach ($consu->consultar() as $facu){
    echo $facu->getNombre_facultad();
}
