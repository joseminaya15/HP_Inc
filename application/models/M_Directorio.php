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
        $sql = "SELECT * 
                  FROM champion";
        $result = $this->db->query($sql);
        return $result->result();
    }
}