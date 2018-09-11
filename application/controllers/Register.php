<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_Directorio');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index() {
		$this->session->unset_userdata('usuario');
		$this->load->view('v_register');
	}

	function register() {
		$data['error'] = EXIT_ERROR;
		$data['msj']   = ''
		try{
			$nombre   = $this->input->post();
			$apellido = $this->input->post();
			$correo   = $this->input->post();
			$pass	  = $this->input->post();
			$empresa  = $this->input->post();
			$pais	  = $this->input->post();
			$cargo    = $this->input->post();
			$celular  = $this->input->post();
			$cumpleano= $this->input->post();
			$ingreso  = $this->input->post();
			$sexo     = $this->input->post();
			$arrayInsert('nombre_completo' => $nombre.' '.$apellido,
						 'correo' 		   => $correo,
						 'password' 	   => $pass,
						 'cumpleanos' 	   => $cumpleano,
						 'pais' 		   => $pais,
						 'empresa' 		   => $empresa,
						 'cargo' 		   => $cargo,
						 'celular' 		   => $celular,
						 'ingreso_empresa' => $ingreso,
						 'sexo' 		   => $sexo);
			$this->M_Directorio->insertRegistro($arrayInsert, 'champion');
            $data['error']  = EXIT_SUCCESS;
		} catch (Exception $ex) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}

}