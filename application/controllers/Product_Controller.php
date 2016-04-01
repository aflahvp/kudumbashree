<?php

/**
 * 
 */
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
 		if ($data['result'] != FALSE)
 		{
 			$this->load->view('admin/view_product');
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
 			redirect(base_url('Product_Model/view'));

 		}
 		else
 		{
 			return false;
 		}
	 	}
 	}

 } 
 ?>