<?php 


/**
* 
*/
class User_Controller extends CI_Controller
{
	
	public function __construct()
	{
	 parent::__construct();
	 $this->load->helper('url');
	}
	public function login()
	{
	$this->load->view('admin/login');
	}
}

 ?>