<?php 
/**
* 
*/
class Admin_Controller extends CI_Controller
{
	

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');  //use base url
	    $this->load->helper('form'); //load helper class ->form
	    $this->load->library(['form_validation','table']); //validation
	    $this->load->model('Loan_Model');
	    $this->load->model('Event_Model');
	    $this->load->model('Unit_Model');
	    $this->load->model('Member_Model');
	    $this->load->model('Product_Model');
	}
	

	public function dashboard($page = 'dashboard')
	{
		$this->load->view('admin/'.$page);
	}	

        /* UNITS */
	public function add_unit()
	{
		$this->load->view('admin/units');
	}
    
   
	     /* MEMBERS*/

	public function add_member()
	{
		$this->load->view('admin/add_member');
	}

        /* EVENTS */
	public function add_event()
	{
		$this->load->view('admin/add_event');
		
	}


	     /* LOANS */

	public function view_loans($page = 'view_loans')
	{
		$data = $this->Loan_Model->get_where(['status' => 'approved']);
		if ($data != false) {
			$this->table->set_heading('id','bankname','accountno','mobile','email');
			$data['result'] = $this->table->generate($query);
		}
		else
		{
			$data['message'] = 'No record found.';
		}
		$this->load->view('admin/view_loans',$data);
	}
	 public function accept()
	 {
	 	
	 }

	 public function reject()
	 {
	 	
	 }

}

  ?>