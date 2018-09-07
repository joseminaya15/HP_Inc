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
        $comboCanal = '';
        $comboPais  = '<option value="">Seleccionar Todo</option>';
        $bodyUsers  = '';
        $paises     = $this->M_Directorio->getPaises();
        $tipo       = $this->M_Directorio->getTipoMensaje();
        $canal      = $this->M_Directorio->getCanales(null);
        $users      = $this->M_Directorio->getUsers(null,null,null,null,null);
        $totaUser   = count($users);
        $contador   = 1;
        foreach ($paises as $key) {
            $comboPais .= '<option value="'.$key->nombre.'">'.$key->nombre.'</option>';
        }
        foreach ($tipo as $key) {
            $comboTipo .= '<option value="'.$key->tipo_saludo.'">'.$key->tipo_saludo.'</option>';
        }
        foreach ($canal as $key) {
            $comboCanal .= '<option value="'.$key->empresa.'">'.$key->empresa.'</option>';
        }
        foreach ($users as $key) {
            $bodyUsers .= '<tr>
                               <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-'.$contador.'">
                                   <input type="checkbox" id="checkbox-'.$contador.'" class="mdl-checkbox__input">
                               </label></td>
                               <td class="js-flex"><img class="js-image" src="'.RUTA_IMG.'user/user2.jpg"><span>'.$key->nombre_completo.'</span></td>
                               <td>'.$key->pais.'</td>
                               <td>'.$key->empresa.'</td>
                               <td>'.$key->cumpleanos.'</td>
                               <td class="text-center">
                                   <button id="menu-'.$contador.'" class="mdl-button mdl-js-button mdl-button--icon">
                                       <i class="mdi mdi-more_vert"></i>
                                   </button>
                                   <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-'.$contador.'">
                                       <li class="mdl-menu__item">Editar</li>
                                       <li class="mdl-menu__item">Eliminar</li>
                                   </ul>
                               </td>
                           </tr>';
            $contador++;
        }
        $data['totaUser']   = $totaUser;
        $data['comboPais']  = $comboPais;
        $data['comboCanal'] = $comboCanal;
        $data['comboTipo']  = $comboTipo;
        $data['bodyUsers']  = $bodyUsers;
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
    function buscador(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $bodyUsers  = '';
            $comboCanal = '';
            $pais       = $this->input->post('pais');
            $canal      = $this->input->post('canal');
            $users      = $this->M_Directorio->getUsers($pais,$canal,null,null,null);
            $canal      = $this->M_Directorio->getCanales($pais);
            $totaUser   = count($users);
            $contador   = 1;
            foreach ($users as $key) {
                $bodyUsers .= '<tr>
                                   <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-'.$contador.'">
                                       <input type="checkbox" id="checkbox-'.$contador.'" class="mdl-checkbox__input">
                                   </label></td>
                                   <td class="js-flex"><img class="js-image" src="'.RUTA_IMG.'user/user2.jpg"><span>'.$key->nombre_completo.'</span></td>
                                   <td>'.$key->pais.'</td>
                                   <td>'.$key->empresa.'</td>
                                   <td>'.$key->cumpleanos.'</td>
                                   <td class="text-center">
                                       <button id="menu-'.$contador.'" class="mdl-button mdl-js-button mdl-button--icon">
                                           <i class="mdi mdi-more_vert"></i>
                                       </button>
                                       <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-'.$contador.'">
                                           <li class="mdl-menu__item">Editar</li>
                                           <li class="mdl-menu__item">Eliminar</li>
                                       </ul>
                                   </td>
                               </tr>';
                $contador++;
            }
            foreach ($canal as $key) {
                $comboCanal .= '<option value="'.$key->empresa.'">'.$key->empresa.'</option>';
            }
            $data['htmlBody']   = $bodyUsers;
            $data['totaUser']   = $totaUser;
            $data['comboCanal'] = $comboCanal;
            $data['error']      = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}