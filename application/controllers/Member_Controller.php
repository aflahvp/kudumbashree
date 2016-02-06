<?php 
/**
* 
*/
class Member_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function add_member()
	{
		$this->load->view('admin/add_member');
	}

	
}
 ?>