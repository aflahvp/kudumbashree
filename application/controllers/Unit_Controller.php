<?php 



require_once(APPPATH.'controllers/Check_Logged.php');


class Unit_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Units_Model');
		$this->load->model('User_Model');
		$this->load->model('Member_Model');
		$this->load->model('Product_Model');
		$this->load->model('Loan_Model');
		$this->load->model('Event_Model');
		$this->load->library('table');
		// $this->load->helper('url');
	 //    $this->load->helper('form');
	 //    $this->load->library('form_validation');


	}

public function login()
	{

		if($this->logged === true and $_SESSION['type'] == 'unit')
	    {
	    	redirect(base_url($_SESSION['username'].'/unit-home'));
	    }
	    else
	    {
	    	$this->load->view('unit/login');
	    }
		
	}

	public function verify()
	{
		//to form action
		// 'type' => 'member';
		$this->form_validation->set_rules('username', 'User name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('unit/login');
		}
		else
		{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$password = md5($password);

			/*call the method from User Model*/

			$where = ['username' => $username, 'password' => $password];
			$login = $this->Units_Model->view_where($where);
			if( $login != FALSE)
			{
				$id = $login[0]->id;
				$user_data = [
					'username' => $username,
					'type' => 'unit',
					'id' => $id,
					'logged_in' => TRUE
				];
				$this->session->set_userdata($user_data,'logged_in');
				redirect(base_url($_SESSION['username'].'/unit-home'));
			}
			else
			{
				
				$data['message'] = 'invalid username or password';

				$this->load->view('unit/login',$data);
			}
		}
	}



	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}

	public function dashboard()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') {

			$this->load->view('unit/dashboard');
		}
		else
			redirect(base_url('unit-login'));
			// redirect(base_url($_SESSION['username'].'/unit-home'));
		
	}


	public function view_all_members()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') {

			$unit_id = $_SESSION['id'];
			$where = ['units_id' => $unit_id];
			$query = $this->Member_Model->get_where($where);

			if($query != FALSE)
			{
				$this->table->set_heading(array('id', 'name', 'address', 'place', anchor(base_url(uri_string()), 'add member', ['class' => 'button normal-button' ])));
				foreach ($query as $key => $value) 
				{
					$this->table->add_row(array($value->id, $value->name, $value->address, $value->place));
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
				$data['data']= $this->table->generate();

			}
			else
				// $data['data'] = 'no data found'.anchor(base_url($_SESSION['username'].'/unit-members/add'),'add',['class' => 'button normal-button']);
				$data['data'] = 'no data found'.anchor(base_url(uri_string().'/add'),'add',['class' => 'button normal-button']);

				$this->load->view('unit/view_members',$data);
		}
		else
			redirect(base_url('unit-login'));


	}

	public function add_member()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
			$this->load->view('unit/add_member');
		else
			redirect(base_url('unit-login'));
	}

	public function add_member_submit()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
		{
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');
			$this->form_validation->set_rules('confirmpassword','confirmpassword','required|matches[password]');
		 	$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('age', 'age', 'xss_clean');
			$this->form_validation->set_rules('day', 'day', 'xss_clean');
			$this->form_validation->set_rules('month', 'month', 'xss_clean');
			$this->form_validation->set_rules('year', 'year', 'xss_clean');
			$this->form_validation->set_rules('address', 'address', 'xss_clean');
			$this->form_validation->set_rules('place', 'place', 'xss_clean');
			$this->form_validation->set_rules('spousesname', 'spousesname', 'xss_clean');
			$this->form_validation->set_rules('fathername', 'fathername', 'xss_clean');
			$this->form_validation->set_rules('mothername', 'mothername', 'xss_clean');
			// $this->form_validation->set_rules('ration', 'ration', 'xss_clean');
			// $this->form_validation->set_rules('category', 'category', 'xss_clean');
			$this->form_validation->set_rules('bloodgroup', 'bloodgroup', 'xss_clean');
			$this->form_validation->set_rules('eligibility', 'eligibility', 'xss_clean');
			$this->form_validation->set_rules('religion', 'religion', 'xss_clean');
			$this->form_validation->set_rules('cast', 'cast', 'xss_clean');
			$this->form_validation->set_rules('district', 'district', 'xss_clean');
			$this->form_validation->set_rules('taluk', 'taluk', 'xss_clean');
			$this->form_validation->set_rules('panchayath', 'panchayath', 'xss_clean');
			$this->form_validation->set_rules('mobileno', 'mobileno', 'xss_clean');
			$this->form_validation->set_rules('accountno', 'accountno', 'xss_clean');
			$this->form_validation->set_rules('adharno', 'adharno', 'xss_clean');
		 	$this->form_validation->set_rules('email', 'email', '');

			if ($this->form_validation->run() === FALSE) {
			$this->load->view('unit/add_member');
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
				$unit_id = $_SESSION['id'];

				
			
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
					'email' => $email,
					'units_id' => $unit_id
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
						redirect(base_url($_SESSION['username'].'/unit-members'));
						// sucess
					}
					else
					{

						
					$data['error'] = '<script type="text/javaScript">
						alert("Server down");
					</script>';
					$this->load->view('unit/add_member',$data);
					}
						// failed
				}
				else
				{

					$data['error'] = '<script type="text/javaScript">
						alert("Server down");
					</script>';
					$this->load->view('unit/add_member',$data);
				}

			}
		}
		else
			redirect(base_url('unit-login'));
	}

	/*To view all products*/

	public function view_products()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') {
			$unit_id = $_SESSION['id'];
			$where = ['units_id' => $unit_id];
			$query = $this->Product_Model->view_where($where);
			if($query != FALSE)
			{
				$this->table->set_heading(array('id', 'name', 'description', anchor(base_url(uri_string().'/add'), 'add', ['class' => 'button normal-button' ])));
				foreach ($query as $key => $value) 
				{
					$this->table->add_row(array($value->id, $value->name, $value->description, anchor(base_url(uri_string().'/delete/'.$value->id),'delete', ['class' => 'button normal-button'])));
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
				$data['data']= $this->table->generate();

			}
			else
				// $data['data'] = 'no data found'.anchor(base_url($_SESSION['username'].'/unit-members/add'),'add',['class' => 'button normal-button']);
				$data['data'] = 'no data found'.anchor(base_url(uri_string().'/add'),'add',['class' => 'button normal-button']);

				$this->load->view('unit/view_products',$data);
		}
		else
			redirect(base_url('unit-login'));
	}


	/*to add products*/
	public function add_products()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
			$this->load->view('unit/add_product');
		else
			redirect(base_url('unit-login'));
	}


	public function add_product_submit()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
		{
			$this->form_validation->set_rules('name','Name','required');
	 		$this->form_validation->set_rules('description','Description','required');

	 		if($this->form_validation->run() === FALSE)
	 		{
	 			$this->load->view('unit/add_product');
	 		}
	 		else
	 		{
	 			$name = $this->input->post('name');
	 			$description = $this->input->post('description');
	 			$unit_id = $_SESSION['id'];

	 			$data = [

	 						'name' => $name,
	 						'description'=> $description,
	 						'units_id' => $unit_id
	 					];
	 			$query = $this->Product_Model->add($data);		
	 		

		 		if($query == true)
		 		{
		 			
		 			redirect(base_url($_SESSION['username'].'/unit-products'));
		 		}
		 		else
		 		{
						$data['error'] = '<script type="text/javaScript">
							alert("Server down");
						</script>';
						$this->load->view('unit/add_product',$data);
		 		}
		 	}
	 	}
	 	else
	 		redirect(base_url('unit-login'));

	}

	public function delete_product($id)
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') {
			$product_id = $this->uri->segment(4);
			$where = ['id' => $product_id];							//$a=['0'=>1]
			if($this->Product_Model->delete($where))
			{
				$data['message'] = '<script>
										alert("deleted!");
										window.location = "'.$_SERVER['HTTP_REFERER'].'";
									</script>';
				$this->load->view('unit/view_product',$data);
			}
			else
			{
				$data['message'] = '<script>
										alert("Server Error .please try again later!");
										window.location = "'.$_SERVER['HTTP_REFERER'].'";
									</script>';
				$this->load->view('unit/view_product',$data);
			}
		}
		else
		redirect(base_url('unit-login'))	;
	}



	public function view_loan()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') {

			$unit_id = $_SESSION['id'];
			$where = ['units_id' => $unit_id];

			// var_dump($this->Loan_Model->get_join($where));

			$query = $this->Loan_Model->get_join($where);
			if($query != FALSE)
			{
				$this->table->set_heading(array('id', 'member name','bank', 'accountno', 'loan type','mobile', 'status'));
				foreach ($query as $key => $value) 
				{
					$this->table->add_row(array($value->loan_id, $value->name ,$value->bankname, $value->loantype, $value->mobile, $value->status ));
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
				$data['data']= $this->table->generate();

			}
			else
				// $data['data'] = 'no data found'.anchor(base_url($_SESSION['username'].'/unit-members/add'),'add',['class' => 'button normal-button']);
				$data['data'] = 'no data found'.anchor(base_url(uri_string().'/add'),'add',['class' => 'button normal-button']);

				$this->load->view('unit/view_loan',$data);
			}
			else
				redirect(base_url('unit-login'));

	}



	/*to view all events*/

	public function view_event()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') {

			$unit_id = $_SESSION['id'];
			$where = ['units_id' => $unit_id];
			$query = $this->Event_Model->view_where($where);
			if($query != FALSE)
			{
				$this->table->set_heading(array('id', 'name', 'description', anchor(base_url(uri_string().'/add'), 'add', ['class' => 'button normal-button' ])));
				foreach ($query as $key => $value) 
				{
					$this->table->add_row(array($value->id, $value->name, $value->description, anchor(base_url(uri_string().'/delete/'.$value->id),'delete', ['class' => 'button normal-button'])));
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
				$data['data']= $this->table->generate();

			}
			else
				// $data['data'] = 'no data found'.anchor(base_url($_SESSION['username'].'/unit-members/add'),'add',['class' => 'button normal-button']);
				$data['data'] = 'no data found'.anchor(base_url(uri_string().'/add'),'add',['class' => 'button normal-button']);

				$this->load->view('unit/view_events',$data);
			}
			else
				redirect(base_url('unit-login'));
	}



	/*to add event*/

	public function add_event()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
			$this->load->view('unit/add_event');
		else
			redirect(base_url('unit-login'));

	}


	public function add_event_submit()
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
		{
			$this->form_validation->set_rules('name','Name','required');   	// form validation
			$this->form_validation->set_rules('type','Type','xss_clean');
			$this->form_validation->set_rules('time','Time','required');	//('input name','error msg','must required or not')
			$this->form_validation->set_rules('date','Date','required');
			$this->form_validation->set_rules('venue','Venue','required');
			$this->form_validation->set_rules('description','Discription','xss_clean');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('unit/add_event');
			}
			else
			{
				$name = $this->input->post('name');			
				$type = $this->input->post('type');
				$time = $this->input->post('time');
				$date = $this->input->post('date');
				$venue = $this->input->post('venue');
				$description = $this->input->post('description');
				$unit_id = $_SESSION['id'];
				$data =array(
							'name' => $name ,				//datas are move in a array
							'type' => $type ,				//'index(feildname)'=>variab
							'time' => $time ,
							'date' => $date ,
							'venue' => $venue ,
							'description' => $description,
							'units_id' => $unit_id
		              		);
		        $query=$this->Event_Model->add($data);		//call add() in event_model
		        
		        if($query==true)
		        {
		        	redirect(base_url($_SESSION['username'].'/unit-events'));   //Event_Controller/index
		        	// $this->load->view('admin/view_events',$data);
		        	//$this->load->view('Event_Controller/view');
		        }
		        else
		        {
		        	$data['message'] = '<script>
		        							alert("Server Error . please try again later");
		        							window.location = "'.$_SERVER['HTTP_REFERER'].'";
	        							</script>';
		        	//redirect(base_url('Event_Controller/add'));
		        }


			}
		}
		else
			redirect(base_url('unit-login'));
	}

	/*to delete event*/
	public function delete_event($id)
	{
		if ($this->logged === true and $_SESSION['type'] == 'unit') 
		{
			/*to get events id from url*/
			$event_id = $this->uri->segment(4);		

			$where = ['id' => $event_id];

			if($this->Event_Model->delete($where))
			{
				$data['message'] = '<script>
										alert("deleted!");
										window.location = "'.$_SERVER['HTTP_REFERER'].'";
									</script>';
				$this->load->view('unit/view_events',$data);
			}
			else
			{
				$data['message'] = '<script>
										alert("Server Error .please try again later!");
										window.location = "'.$_SERVER['HTTP_REFERER'].'";
									</script>';
				$this->load->view('unit/view_events',$data);
			}
		}
		else
			redirect(base_url('unit-admin'));
	}


	public function view_all()
	{
		$data['result'] = $this->Units_Model->view_all();
		if($data['result'] != FALSE)
		{
			$this->load->view('admin/view_units',$data);
		}
	}







	public function add_unit()
	{
		$this->form_validation->set_rules('name', 'User name', 'required');
		
		$this->form_validation->set_rules('ward', 'ward', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('place', 'place', 'required');
		
		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('admin/units');
		}
		else
		{
			$name = $this->input->post('name');
			$ward = $this->input->post('ward');
			$address = $this->input->post('address');
			$place = $this->input->post('place');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			
			$data = [
				'name' => $name,
				'ward' => $ward,
				'address' => $address,
				'place' => $place,
				'username' => $username, 
				'password' => $password,
			];

			$query = $this->Units_Model->add_unit($data);

			 if($query==true)
	        {
	        	redirect(base_url('dashboard/units'));
	        	
	        }
	        else
	        {
	        	$data['message'] = '<script>
	        							alert("Server Error . please try again later");
	        							</script>';
			}

		}
	}




	public function delete($id)
	{
		$where = ['id' => $id];							//$a=['0'=>1]
							     
		if($this->Units_Model->delete($where) )
		{
			$data['message'] = '<script>
									alert("deleted!");
									window.location = "'.base_url('dashboard/units').'";
								</script>';
			$this->load->view('admin/view_units',$data);
		}
		else
		{
			$data['message'] = '<script>
									alert("Server Error .please try again later!");
									window.location = "'.base_url('dashboard/units').'";
								</script>';
			$this->load->view('admin/view_units',$data);
		}
	}
}
