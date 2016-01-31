<?php 


/**
* 
*/
class Unit_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Units_Model');
		$this->load->model('User_Model');
		$this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->library('form_validation');


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
		$this->form_validation->set_rules('username', 'User name', 'required');
		
		$this->form_validation->set_rules('ward', 'ward', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('place', 'place', 'required');
		
		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('admin/units');
		}
		else
		{
			$name = $this->input->post('username');
			$ward = $this->input->post('ward');
			$address = $this->input->post('address');
			$place = $this->input->post('place');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = [
				'name' => $name,
				'ward' => $ward,
				'address' => $address,
				'place' => $place,
				'username' => $username, 
				'password' => $password,
			];

			$query = $this->Units_Model->add_unit($data);

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
		if($this->Units_Model->delete($where) )
			var_dump('delete success');
		else
			var_dump('delete failed');
	}
}
