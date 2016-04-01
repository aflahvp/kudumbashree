<?php 


/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class User_Controller extends Check_Logged
{
	
	public function __construct()
	{
	 	parent::__construct();

	 	$this->load->model('User_Model');

	}


	public function login()
	{
		$this->load->view('admin/login');
	}

	public function verify()
	{
			/*Validate fields*/
		$this->form_validation->set_rules('username', 'User name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/login');
		}
		else
		{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$password = md5($password);

			/*call the method from User Model*/

			if($this->User_Model->login($username, $password,'admin') === TRUE)
			{
				$user_data = [
					'username' => $username,
					'logged_in' => TRUE
				];
				$this->session->set_userdata($user_data,'logged_in');
				redirect(base_url('Admin_Controller/dashboard	'));
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('User_Controller/login');
	}
}


 ?>