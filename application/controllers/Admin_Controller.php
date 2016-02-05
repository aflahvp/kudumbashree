<?php 
/**
* 
*/
class Admin_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	}

	public function add_unit()
	{
		$this->load->view('admin/units');
	}
    
   public function verify()
	{
		
	}

	public function add_member()
	{
		$this->load->view('admin/add_member');
	}
}

  ?>