<?php 
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Home_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index');
	}


    public function gallery()
    {
        $this->load->view('gallery');
    }
	// public function registration()
	// {
	// 	$this->load->view('registration');
	// }

}

 ?>