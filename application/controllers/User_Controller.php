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
		 if($this->logged === true)
	    {
	    	redirect(base_url('dashboard'));
	    }
	    else
	    {
	    	$this->load->view("admin/login");
	    }
	}


	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(base_url('dashboard/users/login'));
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

			$query = $this->User_Model->login($username, $password,'admin');
			if( $query != FALSE)
			{
				$user_data = [
					'username' => $username,
					'type' => 'admin',
					'logged_in' => TRUE
				];
				$this->session->set_userdata($user_data,'logged_in');
				redirect(base_url('dashboard'));
			}
			else{

				echo "login error";
				$this->load->view('admin/login');
			}

		}
	}

	
}


 ?>