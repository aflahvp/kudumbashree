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
		$data = $this->load->Loan_Model->get_all();
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

	public function add()
	{
		$this->form_validation->set_rules('bankname', 'bankname', 'required');
		$this->form_validation->set_rules('accountno', 'accountno', 'required');
		$this->form_validation->set_rules('loantype', 'loantype', 'required');
		$this->form_validation->set_rules('mobno', 'mobno', 'required');
		$this->form_validation->set_rules('email', 'email', '');
		$this->form_validation->set_rules('loanamt', 'loanamt', 'required');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('member/loan_request');
		}
		else
		{
			$bname = $this->input->post('bankname');
			$accountno = $this->input->post('accountno');
			$loantype = $this->input->post('loantype');
			$mobno = $this->input->post('mobno');
			$email= $this->input->post('email');
			$loanamt= $this->input->post('loanamt');

			$data = [
				'id' => $id,
				'bankname' => $bankname,
				'accountno' => $accountno,
				'loantype' => $loantype,
				'mobno' => $mobno, 
				'email' => $email,
				'loanamt' => $loanamt,
				'status' => 'request'
				];

			// $query=$this->Loan_Model->add($data);

			if($this->Loan_Model->add($data) == true)
	        {
	        	redirect(base_url('dashboard/members/loans/view'));
	        }
	        else
	        {
	        	$data['error'] = 'faild';
	        	
	        }
		}


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