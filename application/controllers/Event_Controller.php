<?php 

/**
* 
*/
class Event_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Event_Model');
	}

	public function index()
	{
		$data['result'] = $this->Event_Model->view_all();
		if ($data['result'] != FALSE) {
			$this->load->view('admin/view_events',$data);
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/view_events',$data);
			
		}
	}

	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');   	// form validation
		$this->form_validation->set_rules('type','Type','');
		$this->form_validation->set_rules('time','Time','required');	//('input name','error msg','must required or not')
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('venue','Venue','required');
		$this->form_validation->set_rules('description','Discription','required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/add_event');
		}
		else
		{
			$name = $this->input->post('name');			
			$type = $this->input->post('type');
			$time = $this->input->post('time');
			$date = $this->input->post('date');
			$venue = $this->input->post('venue');
			$description = $this->input->post('description');
			$data =array(
						'name'=>$name,				//datas are move in a array
						'type'=>$type,				//'index(feildname)'=>variab
						'time'=>$time,
						'date'=>$date,
						'venue'=>$venue,
						'description'=>$description
	              		);
	        $query=$this->Event_Model->add($data);		//call add() in event_model
	        if($query==true)
	        {
	        	var_dump('success');
	        }
	        else
	        {
	        	var_dump('fail');
	        }


		}
	}

	public function delete($id)
	{
		$where = ['id' => $id];							//$a=['0'=>1]
							     
		if($this->Events_model->delete($where) == true)
		{
			var_dump('success');
		}
		else
		{
			var_dump('failed');
		}
	}

	public function view()
	{
		$data['result']=$this->Event_Model->view_all();
		var_dump($data);
		// $this->load->view('admin\event',$data);

	}
}
 ?>