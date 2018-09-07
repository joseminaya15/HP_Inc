<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorio extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_Directorio');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }
	public function index(){
        $comboTipo  = '';
        $comboPais  = '<option value="">Seleccionar Todo</option>';
        $paises     = $this->M_Directorio->getPaises();
        $tipo       = $this->M_Directorio->getTipoMensaje();
        foreach ($paises as $key) {
            $comboPais .= '<option value="'.$key->nombre.'">'.$key->nombre.'</option>';
        }
        foreach ($tipo as $key) {
            $comboTipo .= '<option value="'.$key->tipo_saludo.'">'.$key->tipo_saludo.'</option>';
        }
        $data['comboPais'] = $comboPais;
        $data['comboTipo'] = $comboTipo;
		$this->load->view('v_directorio', $data);
	}
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}