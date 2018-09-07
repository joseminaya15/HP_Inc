<?php

class M_Directorio extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getPaises() {
    	$sql = "SELECT * 
    			  FROM pais";
    	$result = $this->db->query($sql);
    	return $result->result();
    }
    function getTipoMensaje() {
    	$sql = "SELECT * 
    			  FROM tipo_saludo";
    	$result = $this->db->query($sql);
    	return $result->result();
    }
    function getUsers($pais, $canal, $persona, $fechaIni, $fechaFin){
        $andPais = ($pais == null) ? '' : "AND c.pais LIKE '%".$pais."%' ";
        if ($pais == null && $canal == null && $persona == null && $fechaIni == null && $fechaFin == null) {
            $sql = "SELECT c.* 
                      FROM champion c"; 
        } else {
            $sql = "SELECT c.* 
                      FROM champion c,
                           pais p
                     WHERE c.pais = p.nombre 
                     ".$andPais;
        }
        $result = $this->db->query($sql);
        return $result->result();
    }
}