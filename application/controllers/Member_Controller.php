<?php 
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Member_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_Model');
		$this->load->model('User_Model');
		$this->load->model('Loan_Model');

		// $this->load->helper('form');
		// $this->load->helper('url');
		// $this->load->library('form_validation');
	}

	public function dashboard()
	{
		$this->load->view('member/dashboard');
	}

	public function view_all()
	{
		$data['result'] = $this->Member_Model->view_all();
		if($data['result'] != FALSE)
		{
			$this->load->view('admin/view_members',$data);
		}
	}

	public function add_member()
	{	

		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('confirmpassword','confirmpassword','required|matches[password]');
	 	$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('age', 'age', 'required');
		$this->form_validation->set_rules('day', 'day', 'required');
		$this->form_validation->set_rules('month', 'month', 'required');
		$this->form_validation->set_rules('year', 'year', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('place', 'place', 'required');
		$this->form_validation->set_rules('spousesname', 'spousesname', 'required');
		$this->form_validation->set_rules('fathername', 'fathername', 'required');
		$this->form_validation->set_rules('mothername', 'mothername', 'required');
		$this->form_validation->set_rules('ration', 'ration', 'required');
		$this->form_validation->set_rules('category', 'category', 'required');
		$this->form_validation->set_rules('bloodgroup', 'bloodgroup', 'required');
		$this->form_validation->set_rules('eligibility', 'eligibility', 'required');
		$this->form_validation->set_rules('religion', 'religion', 'required');
		$this->form_validation->set_rules('cast', 'cast', 'required');
		$this->form_validation->set_rules('district', 'district', 'required');
		$this->form_validation->set_rules('taluk', 'taluk', 'required');
		$this->form_validation->set_rules('panchayath', 'panchayath', 'required');
		$this->form_validation->set_rules('mobileno', 'mobileno', 'required');
		$this->form_validation->set_rules('accountno', 'accountno', 'required');
		$this->form_validation->set_rules('adharno', 'adharno', 'required');
	 	$this->form_validation->set_rules('email', 'email', '');

		if ($this->form_validation->run() === FALSE) {
		$this->load->view('admin/add_member');
		}

   
 		else
		{	
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$confirmpassword = $this->input->post('confirmpassword');
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$address = $this->input->post('address');
			$place = $this->input->post('place');
			$spousesname = $this->input->post('spousesname');
			$fathername = $this->input->post('fathername');
			$mothername = $this->input->post('mothername');
			$rationcardtype = $this->input->post('rationcardtype');
			$category = $this->input->post('category');
			$bloodgroup = $this->input->post('bloodgroup');
			$eligibility = $this->input->post('eligibility');
			$religion = $this->input->post('religion');
			$cast = $this->input->post('cast'); 	
			$district = $this->input->post('district');
			$taluk = $this->input->post('taluk');
			$panchayath = $this->input->post('panchayath');
			$mobileno = $this->input->post('mobileno');
			$accountno = $this->input->post('accountno');
			$adharno = $this->input->post('adharno');
			$email= $this->input->post('email');

			$dob = $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('day');

			
		
			$data = [
				'name' => $name,
				'age' => $age,
				'dob' => $dob,
				'address' => $address,
				'place' => $place,
				'spousesname' => $spousesname, 
				'fathername' => $fathername,
				'mothername' => $mothername,
				'rationcardtype' => $rationcardtype,
				'category' => $category,
				'bloodgroup' => $bloodgroup,
				'eligibility' => $eligibility, 
				'religion' => $religion,
				'cast' => $cast,
				'district' => $district,
				'taluk' => $taluk,
				'panchayath' => $panchayath,
				'mobileno' => $mobileno, 
				'accountno' => $accountno,
				'adharno' => $adharno, 
				'email' => $email
				];


			$query = $this->Member_Model->add_member($data);

			if ($query != FALSE)
			{

				$data = [
					'username' => $username,
					'password' => $password,
					'usertype' => 'member'
				];
				

				// call the add_user() from model
				if ($this->User_Model->add_user($data))
				{
					redirect(base_url('Member_Controller/view_all'));
					// sucess
				}
				else
				{

					var_dump('fail');
				}
					// failed
			}
			else
			{
				$data['error'] = 'Server down ';
				$this->load->view('',$data);
			}

		}
	}




	public function delete($id)
	{
		$where = ['id' => $id];
		if($this->Member_Model->delete($where) )
		{
			$data['message'] = '<script>
									alert("deleted!");
									window.location = "'.base_url('dashboard/members').'";
								</script>';
			$this->load->view('admin/view_members',$data);
		}
		else
		{
			var_dump('delete failed');
		}
	}

	   /*MEMBER LOGIN*/
	public function login()
	{
		 if($this->logged === true)
	    {
	    	redirect(base_url('dashboard/veiw'));
	    }
	    else
	    {
	    	$this->load->view('member/login');
	    }
		
	}

	public function verify()
	{
		//to form action
		// 'type' => 'member';
		$this->form_validation->set_rules('username', 'User name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('member/login');
		}
		else
		{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$password = md5($password);

			/*call the method from User Model*/

			if($this->User_Model->login($username, $password,'member') === TRUE)
			{
				$user_data = [
					'username' => $username,
					'type' => 'member',
					'logged_in' => TRUE
				];
				$this->session->set_userdata($user_data,'logged_in');
				redirect(base_url('member/home'));
			}
			else
			{
				
				$data['message'] = 'invalid username or password';

				$this->load->view('member/login',$data);
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(base_url('dashboard/members/login'));
	}


	  /*MEMBER LOANS*/
	public function loan_registration()
	{
		$this->load->view('member/loan_request');
	}


	public function view_loans()
	{
		redirect(base_url('member/loan'.$id));
	}


	public function view_loan($members_id)
	{
		$this->load->library('table');

		$where = ['members_id' => $members_id];
		$query = $this->Loan_Model->get_where($where);
		if ($query != false) 
		{
			$this->table->set_heading(array('id', 'bankname', 'accountno', 'loantype', 'mobile', 'email', 'loanamount','status'));
			foreach ($query as $key => $value) 
			{
				$this->table->add_row(array($value->id, $value->bankname, $value->accountno, $value->loantype, $value->mobile, $value->email, $value->loanamount, $value->status ));
			}
		$template = array(
        'table_open'            => '<table class="table">',

        'thead_open'            => '<thead class="header">',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
		);

			$this->table->set_template($template);
			$data['loan']= $this->table->generate();
			
			
			$this->load->view('member/view_loan', $data);
		}
	}


	public function available_balance()
	{
		
	}


	public function updateprofiles()
	{
		
	}

}


	

 ?>