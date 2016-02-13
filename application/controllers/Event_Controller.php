<?php 


/**
* 
*/
class Event_Controller extends CI_Controller
{
	
	public function __construct(argument)
	{
		parent::__construct();
		$this->load->model('Member_Model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
}
 ?>