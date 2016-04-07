<?php

/**
 * 
 */
require_once(APPPATH.'controllers/Check_Logged.php');
 class Product_Controller extends Check_Logged
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Product_Model');
 		// $this->load->helper(['form','url']);
 		// $this->load->library('form_validation');

 	}

 	public function index()
 	{
 		$data['result'] = $this->Product_Model->view();
		if ($data['result'] != FALSE) {
			$this->load->view('admin/view_product',$data);
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/view_product',$data);
			
		}
 	}

 // 	public function view()
	// {
	// 	$data['result']=$this->Product_Model->view_all();
	// 	$this->load->view('admin\view_product',$data);

	// }

 	public function add()
 	{
 		$this->form_validation->set_rules('name','Name','required');
 		$this->form_validation->set_rules('description','Description','required');

 		if($this->form_validation->run() === FALSE)
 		{
 			$this->load->view('admin/add_product');
 		}
 		else
 		{
 			$name = $this->input->post('name');
 			$description = $this->input->post('description');

 			$data = [

 						'name' => $name,
 						'description'=> $description,
 					];
 			$query = $this->Product_Model->add($data);		
 		

 		if($query == true)
 		{
 			redirect(base_url('dashboard/products'));

 		}
 		else
 		{
 			return false;
 		}
	 	}
 	}

 	public function delete($id)
	{

		$where = ['id' => $id];							//$a=['0'=>1]
							     
		if($this->Product_Model->delete($where))
		{
			$data['message'] = '<script>
									alert("deleted!");
									window.location = "'.base_url('dashboard/products').'";
								</script>';
			$this->load->view('admin/view_product',$data);
		}
		else
		{
			$data['message'] = '<script>
									alert("Server Error .please try again later!");
									window.location = "'.base_url('dashboard/products').'";
								</script>';
			$this->load->view('admin/view_product',$data);
		}
	}

 } 
 ?>