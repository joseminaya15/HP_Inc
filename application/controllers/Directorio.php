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
        $bodyUsers  = '';
        $comboCanal = '<option value="">Seleccionar Todo</option>';
        $comboPais  = '<option value="">Seleccionar Todo</option>';
        $paises     = $this->M_Directorio->getPaises();
        $tipo       = $this->M_Directorio->getTipoMensaje();
        $canal      = $this->M_Directorio->getCanales(null);
        $users      = $this->M_Directorio->getUsers(null,null,null,null,null);
        $datos      = $this->M_Directorio->getEblast(1);
        $totaUser   = count($users);
        $contador   = 1;
        $contador2  = 1;
        $nombre     = '';
        $primer_ap  = '';
        $nombre_nu  = '';
        $cont       = '';
        $eblast     = '';
        foreach ($paises as $key) {
            $comboPais .= '<option value="'.$key->nombre.'">'.$key->nombre.'</option>';
        }
        foreach ($tipo as $key) {
            $comboTipo .= '<option value="'.$key->id.'">'.$key->tipo_saludo.'</option>';
        }
        foreach ($canal as $key) {
            $comboCanal .= '<option value="'.$key->empresa.'">'.$key->empresa.'</option>';
        }
        foreach ($users as $key) {
            $nombre     = explode(' ',$key->nombre_completo);
            $cont       = count($nombre);
            if ($cont > 2 ) {
                $primer_ap = str_split($nombre[$cont-2]);
                $nombre_nu = $nombre[0].' '.$primer_ap[0].'.';
            } else {
                $primer_ap = str_split($nombre[$cont-1]);
                $nombre_nu = $nombre[0].' '.$primer_ap[0].'.';
            }
            $encode    = base64_encode($key->id);
            $bodyUsers .= '<tr>
                               <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-'.$contador.'">
                                   <input type="checkbox" id="checkbox-'.$contador.'" class="mdl-checkbox__input" data-id="'.$encode.'">
                               </label></td>
                               <td class="js-flex"><img class="js-image" src="'.RUTA_IMG.'user/nouser.png" data-toggle="tooltip" data-placement="bottom" title="'.$key->nombre_completo.'"><span>'.$nombre_nu.'</span></td>
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
        foreach ($datos as $key) {
            $transform = ( $contador2 == 2 ) ? 'js-transform' : '';
            $checked   = ( $contador2 == 2 ) ? 'checked' : '';
            $encode    = base64_encode($key->id);
            $eblast .= '<div class="js-card '.$transform.'">
                            <div class="js-card__contenido">
                                <img src="'.RUTA_IMG.'template/'.$key->nombre.'.png">
                            </div>
                            <div class="js-card__select">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$contador2.'">
                                    <input type="radio" id="option-'.$contador2.'" class="mdl-radio__button" name="options-'.$key->id_tipo_saludo.'" value="'.$contador2.'" data-id="'.$encode.'" onclick="selectTemplate(this.id)" '.$checked.'>
                                    <span class="mdl-radio__label">Seleccionar</span>
                                </label>
                            </div>
                        </div>';
            $contador2++;
        }
        $data['eblast']     = $eblast;
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
            $comboCanal = '<option value="">Seleccionar Todo</option>';
            $pais       = $this->input->post('pais');
            $canal      = $this->input->post('canal');
            $persona    = $this->input->post('persona');
            $fechaIni   = $this->input->post('fechaIni');
            $fechaFin   = $this->input->post('fechaFin');
            $users      = $this->M_Directorio->getUsers($pais,$canal,$persona,$fechaIni,$fechaFin);
            $canal      = $this->M_Directorio->getCanales($pais);
            $totaUser   = count($users);
            $contador   = 1;
            $nombre     = '';
            $primer_ap  = '';
            $nombre_nu  = '';
            $cont       = '';
            foreach ($users as $key) {
                $nombre     = explode(' ',$key->nombre_completo);
                $cont       = count($nombre);
                if ($cont > 2 ) {
                    $primer_ap = str_split($nombre[$cont-2]);
                    $nombre_nu = $nombre[0].' '.$primer_ap[0].'.';
                } else {
                    $primer_ap = str_split($nombre[$cont-1]);
                    $nombre_nu = $nombre[0].' '.$primer_ap[0].'.';
                }
                $encode    = base64_encode($key->id);
                $bodyUsers .= '<tr>
                                   <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-'.$contador.'">
                                       <input type="checkbox" id="checkbox-'.$contador.'" class="mdl-checkbox__input" data-id="'.$encode.'">
                                   </label></td>
                                   <td class="js-flex"><img class="js-image" src="'.RUTA_IMG.'user/nouser.png" data-toggle="tooltip" data-placement="bottom" title="'.$key->nombre_completo.'"><span>'.$nombre_nu.'</span></td>
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
    function buscadorTipo () {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try{
            $eblast = '';
            $tipo   = $this->input->post('tipo');
            $datos  = $this->M_Directorio->getEblast($tipo);
            $contador = 1;
            foreach ($datos as $key) {
                $transform = ( $contador == 2 ) ? 'js-transform' : '';
                $checked   = ( $contador == 2 ) ? 'checked' : '';
                $encode    = base64_encode($key->id);
                $eblast .= '<div class="js-card '.$transform.'">
                                <div class="js-card__contenido">
                                    <img src="'.RUTA_IMG.'template/'.$key->nombre.'.png">
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$contador.'">
                                        <input type="radio" id="option-'.$contador.'" class="mdl-radio__button" name="options-'.$key->id_tipo_saludo.'" value="'.$contador.'" data-id="'.$encode.'" onclick="selectTemplate(this.id)" '.$checked.'>
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
                            </div>';
                $contador++;
            }
            $data['eblast'] = $eblast;
            $data['error']  = EXIT_SUCCESS;
        } catch(Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function guardarProgramacion() {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try{
            $usuario  = '';
            $tipo     = $this->input->post('tipo');
            $fechaIni = $this->input->post('fechaIni');
            $fechaFin = $this->input->post('fechaFin');
            $user     = $this->input->post('user');
            $eblast   = base64_decode($this->input->post('eblast'));
            foreach ($user as $key) {
                $usuario .= base64_decode($key).',';
            }
            $usuario = substr($usuario, 0, -1);
            $arrayInsert = array('id_tipo_saludo' => $tipo,
                                 'fecha_inicio'   => $fechaIni,
                                 'fecha_fin'      => $fechaFin,
                                 'id_user'        => $usuario,
                                 'estado'         => ESTADO_PENDIENTE,
                                 'id_eblast'      => $eblast );
            $insetDatos  = $this->M_Directorio->insertarDatos($arrayInsert, 'saludo_programado');
            $data['eblast'] = $eblast;
            $data['error']  = EXIT_SUCCESS;
        } catch(Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}