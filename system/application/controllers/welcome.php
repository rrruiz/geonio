<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{

                
                $this->load->model('Muser');

                $user = $this->Muser->get_user(0);

                $data['user'] = $user;
               
                
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */