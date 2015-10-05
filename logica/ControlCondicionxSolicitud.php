<?php


include '../DB/CondicionxSolicitudDAO.php';
include '../Negocio/CondicionxSolicitud.php';



class ControlCondicionxSolicitud {
    //put your code here
    
    private $condicionxsolicitud;
    private $condicionxsolicitudDAO;
    
    public function __construct() {
        $this->condicionxsolicitudDAO=new CondicionxSolicitudDAO();        
    }
    
    public function crearCondicionxSolicitud($codigo_est,$id_condicion,$id_convocatoria,$descripcion){
        $this->condicionxsolicitud = new CondicionxSolicitud();
        $this->condicionxsolicitud->setCodigo_est($codigo_est);
        $this->condicionxsolicitud->setId_condicion($id_condicion);
        $this->condicionxsolicitud->setId_convocatoria($id_convocatoria);
        $this->condicionxsolicitud->setDescripcion($descripcion);
        $this->condicionxsolicitudDAO->crearCondicionxSolicitud($this->condicionxsolicitud);        
        
    }
            

    
    
    
}
