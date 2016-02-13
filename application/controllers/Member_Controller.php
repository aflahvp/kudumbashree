<?php 
/**
* 
*/
class Member_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_Model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
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
	 	$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('age', 'age', 'required');
		$this->form_validation->set_rules('dob', 'dob', 'required');
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
		// $this->form_validation->set_rules('email', 'email', 'required');
	
			
		if ($this->form_validation->run() === FALSE) 
	
	{
		$this->load->view('admin/add_member');
	}

   
 		else
		{
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$dob = $this->input->post('dob');
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
				];

			$query = $this->Member_Model->add_member($data);

			if ($query != FALSE) {
				var_dump('success');
			}else
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
			var_dump('delete success');
		else
			var_dump('delete failed');
	}
}


	

 ?>