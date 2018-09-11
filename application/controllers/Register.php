<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index() {
		$this->session->unset_userdata('usuario');
		$this->load->view('v_register');
	}

}