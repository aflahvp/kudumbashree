<?php 


/**
* 
*/
class Event_Controller extends CI_Controller
{
	
	public function __construct(argument)
	{
		parent::__construct();
		$this->load->model('Event_Model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function view_all()
	{

	}

	public function add_events()
	{
		$this->form_validation->set_rules('eid', '', 'required');
	}
}
 ?>