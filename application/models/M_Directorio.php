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
        $andPais  = ($pais == null) ? '' : " AND c.pais LIKE '%".$pais."%' ";
        $andCanal = ($canal == null) ? '' : " AND c.empresa LIKE '".$canal."' ";
        $andPerson= ($persona == null) ? '' : " AND c.nombre_completo LIKE '%".$persona."%' ";
        if ($pais == null && $canal == null && $persona == null && $fechaIni == null && $fechaFin == null) {
            $sql = "SELECT c.* 
                      FROM champion c"; 
        } else {
            $sql = "SELECT c.* 
                      FROM champion c,
                           pais p
                     WHERE c.pais = p.nombre 
                     ".$andPais
                     .$andCanal
                     .$andPerson;
        }
        $result = $this->db->query($sql);
        return $result->result();
    }
    function getCanales($pais) {
        if ($pais == null) {
            $sql = "SELECT empresa 
                      FROM champion
                  GROUP BY empresa";
        } else {
            $sql = "SELECT empresa 
                      FROM champion
                     WHERE pais LIKE '%".$pais."%'
                  GROUP BY empresa";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }
    function getEblast($tipo){
        $sql = "SELECT *
                  FROM eblast
                 WHERE id_tipo_saludo = ? ";
        $result = $this->db->query($sql, array($tipo));
        return $result->result();
    }
    function insertarDatos($arrayInsert, $tabla) {
        $this->db->insert($tabla, $arrayInsert);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sql);
    }
    function insertRegistro($arrayInsert, $tabla) {
        $this->db->insert($tabla, $arrayInsert);
        $sql = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sql);
    }
}