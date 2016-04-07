<?php 
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Loan_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Loan_Model');

	}
	
	public function view()
	{
		$data = $this->Loan_Model->get_all();
		if($data != FALSE)
		{
			$this->load->view('admin/view_loans',$data);
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/view_loans',$data);
			
		}
	}

	// public function add()
	// {
		
	// 	}


		// public function accept()
		// {
		//  	if($this->Loan_Model->update($data) === true)
		//  	{
		//  		redirect(base_url('dashboard/loans'));

		//  	}
		// }

	 	// public function reject()
	 	// {
	 	
	 	// }

}
	}



 ?>