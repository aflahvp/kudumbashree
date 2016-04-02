<?php 


require_once(APPPATH.'controllers/Check_Logged.php');

class Unit_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Units_Model');
		$this->load->model('User_Model');
		// $this->load->helper('url');
	 //    $this->load->helper('form');
	 //    $this->load->library('form_validation');


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
