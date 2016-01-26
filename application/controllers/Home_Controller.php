<?php 
/**
* 
*/
class Home_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('aaa');
	}

	public function registration()
	{
		$this->load->view('registration');
	}

}

 ?>