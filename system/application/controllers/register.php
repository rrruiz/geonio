<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
	}

	function index()
	{

            // rules validations
                $rules['user'] = "required|min_length[5]|max_length[15]";
		$rules['pass'] = "required|min_length[5]|max_length[15]";
		$rules['pass2'] = "required|min_length[5]|max_length[15]|matches[pass]";
		$rules['mail'] = "required|valid_email";
		$rules['terms'] = "required";
		$this->validation->set_rules($rules);


                $fields['user'] = "<b>".$user."</b>";
		$fields['pass']	= '<b>Contrase&ntilde;a</b>';
		$fields['pass2'] = '<b>Confirmar contrase&ntilde;a</b>';
		$fields['mail']	= '<b>Correo electr&oacute;nico</b>';
		$fields['terms'] = '<b>T&eacute;rminos y condiciones</b>';
		$this->validation->set_fields($fields);

                //error

		if ($this->validation->run() == FALSE){

			$data['title'] = "Registrarme";
			$data['subtitle'] = "nuevo usuario";
                	$data['info'] = "";

                        $this->load->view('vregister', $data);

		}else{





                }
               
            
        }

}

?>
