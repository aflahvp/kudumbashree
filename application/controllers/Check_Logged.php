<?php 
/**
* 
*/
class Check_Logged extends Ci_Controller
{

	public $logged="";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form','security']);
		$this->load->library(['form_validation','session']);
		$this->logged=$this->session_check();
	}

	public function session_check()
	{
		if($this->session->userdata('logged_in') != null)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}

 ?>