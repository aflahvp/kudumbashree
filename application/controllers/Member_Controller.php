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
		$this->load->model('Deposit_Model');
		$this->load->library('table');

		$this->load->helper('html');
		// $this->load->helper('url');
		// $this->load->library('form_validation');
	}

	public function dashboard()
	{
		if($this->logged === true and $_SESSION['type'] == 'member'){
			$this->load->view('member/dashboard');
		}
		else{
			redirect(base_url('member/login'));
		}

	}

	public function view_all()
	{
		if($this->logged === true and $_SESSION['type'] == 'member'){

			$data['result'] = $this->Member_Model->view_all();
			if($data['result'] != FALSE)
			{
				$this->load->view('admin/view_members',$data);
			}
		}
		else
			redirect(base_url('member/login'));
	}

	public function add_member()
	{	
		if($this->logged === true and $_SESSION['type'] == 'member'){
					
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
			$this->form_validation->set_rules('rationcardtype', 'rationcardtype', 'required');
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
					'category' => $category,
					'rationcardtype' => $rationcardtype,
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
						redirect(base_url('dashboard/members.'));
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
		else
		{
			redirect(base_url('member/login'));
		}
	}




	public function delete($id)
	{
		if($this->logged === true and $_SESSION['type'] == 'member'){

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
		else
			redirect(base_url('member/login'));
	}

	   /*MEMBER LOGIN*/
	public function login()
	{
		 if($this->logged === true and $_SESSION['type'] == 'member')
	    {
	    	redirect(base_url($_SESSION['username'].'/home'));
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
				$where = ['username' => $username, 'password' => $password];
			$query = $this->Member_Model->get_where($where);
				// $query =$this->Member_Model->login($username, $password);
				if($query != FALSE)
				{
					$id = $query[0]->id;
					$user_data = [
						'username' => $username,
						'type' => 'member',
						'id' => $id,
						'logged_in' => TRUE
					];
					$this->session->set_userdata($user_data,'logged_in');
					redirect(base_url($_SESSION['username'].'/home'));
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
		redirect(base_url('home'));
	}


	  /*MEMBER LOANS*/
	  
	public function loan_registration()
	{
		if($this->logged === true and $_SESSION['type'] == 'member'){

			$data['member_id'] = $this->uri->segment(4);

			$this->load->view('member/loan_request', $data);
		}
		else
		{
			redirect(base_url('member/login'));
		}

	}


	public function view_loans()
	{
		if($this->logged === true and $_SESSION['type'] == 'member'){

			// var_dump($this->uri->segment(1));
			$username = $this->uri->segment(1);
			$where = ['username' => $username];
			$id = $_SESSION['id'];
			$member = $this->Member_Model->get_where(['id' => $id]);
			// echo "<pre>";		print_r($member);
			foreach ($member as $key => $value) 

			{
				$member_id = $value->id;
			}

			$where = ['members_id' => $member_id];
			$query = $this->Loan_Model->get_where($where);
		
			if ($query != false) 
			{
				$this->table->set_heading(array('bankname', 'accountno', 'loantype', 'mobile', 'email', 'loanamount', anchor(base_url(uri_string().'/apply/'.$member_id), 'apply loan', ['class' => 'button normal-button' ])));
				foreach ($query as $key => $value) 
				{
					$this->table->add_row(array($value->bankname, $value->accountno, $value->loantype, $value->mobile, $value->email, $value->loanamount, $value->status ));
				}
			$template = array(
	        'table_open'            => '<table class="table table-striped">',


	        'thead_open'            => '<thead>',
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
			else
			{
				// var_dump(base_url(uri_string()));
				$data['message'] = anchor(base_url(uri_string().'/apply/'.$member_id), 'apply loan', ['class' => 'button normal-button' ]);
				$this->load->view('member/view_loan', $data);
			}
		}
		else
			redirect(base_url('member/login'));

	}


	public function loan_submit()
	{
		if($this->logged === true and $_SESSION['type'] == 'member'){


/*			$this->form_validation->set_rules('bname', 'bankname');
			$this->form_validation->set_rules('accountno', 'accountno');
			$this->form_validation->set_rules('loantype', 'loantype');
			$this->form_validation->set_rules('mobno', 'mobno');
			$this->form_validation->set_rules('email', 'email');
			$this->form_validation->set_rules('loanamt', 'loanamt');*/

				$bankname = $this->input->post('bname');
				$accountno = $this->input->post('accountno');
				$loantype = $this->input->post('loantype');
				$mobno = $this->input->post('mobno');
				$email= $this->input->post('email');
				$loanamt= $this->input->post('loanamt');
				$member_id = $this->input->post('member_id');

				$data = [
					//'id' => $id,
					'bankname' => $bankname,
					'accountno' => $accountno,
					'loantype' => $loantype,
					'mobile' => $mobno, 
					'email' => $email,
					'loanamount' => $loanamt,
					'members_id' => $member_id,
					'status' => 'request'
					];

				// $query=$this->Loan_Model->add($data);

				$query = $this->Loan_Model->add($data);
				if($query != false)
		        {
		        	$data['error'] = '<script type="text/javascript">
		        		alert("sucess.");
		        		window.location = "'.base_url($_SESSION['username'].'/loan').'";
		        	</script>';
		        	$this->load->view('member/loan_request', $data);


		        	// redirect(base_url($_SESSION['username'].'/loan')); //Loan_Controller/view
		        }
		        else
		        {
		        	$data['error'] = '<script type="text/javascript">
		        		alert("Server down! try again later");
		        		window.location = "'.base_url($_SESSION['username'].'/loan').'";
		        	</script>';
		        	$this->load->view('member/loan_request', $data);
		        	
		        }
		}
		else
			redirect(base_url('member/login'));
	}

    public function view_deposit()
    {
        $member_id = $_SESSION['id'];
//        var_dump($member_id);
        $where = ['members.id' => $member_id];
        $data = $this->Deposit_Model->view_join_where($where);
        if ($data != false) {
//            var_dump($data);
            $this->table->set_heading(array('name', 'amount', 'pay date'));
            foreach ($data as $key => $value)
            {
                $this->table->add_row(array($value->name, $value->amount, $value->payeddate));
            }
            $template = array(
                'table_open'            => '<table class="table table-striped">',


                'thead_open'            => '<thead>',
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
            $data['deposit']= $this->table->generate();
        } else {
            $data['message'] = 'no data found';
        }
        $this->load->view('member/view_deposit',$data);

    }

	// public function available_balance()
	// {
		
	// }


	// public function updateprofiles()
	// {
		
	// }

}


	

 ?>