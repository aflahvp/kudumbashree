<?php 


/**
* 
*/
class User_Controller extends CI_Controller
{
	
	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->helper('url','form');
	 	$this->load->library(['form_validation','session']);

	 	$this->load->model('User_Model');

	}


	public function login()
	{
		$this->load->view('admin/login');
	}


	public function home()
	{
		$this->load->view('admin/dashboard');
	}

	public function verify()
	{
		$this->form_validation->set_rules('username', 'User name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/login');
		}
		else
		{

			/*Validate fields*/

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			/*call the method from User Model*/

			if($this->User_Model->login($username, $password,'admin') === TRUE)
			{
				$user_data = [
					'username' => $username,
					'logged_in' => TRUE
				];
				$this->session->set_userdata($user_data,'logged_in');
				redirect('User_Controller/home');
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