<?php 


/**
* 
*/
class Event_Controller extends CI_Controller
{
	
	public function __construct(argument)
	{
		parent::__construct();
		$this->load->model('Member_Model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function view_all()
	{

	}

	public function add_events()
	{
		$this->form_validation->set_rule('eid','eid','required');
		$this->form_validation->set_rule('etype','etype','required');
		$this->form_validation->set_rule('ename','ename','required');
		$this->form_validation->set_rule('etym','etym','required');
		$this->form_validation->set_rule('edate','edate','required');
		$this->form_validation->set_rule('evenue','evenue','required');
		$this->form_validation->set_rule('edescription','ediscription','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/event');
		}

		else
		{
			$eid = $this->input->post('eid');
			$etype = $this->input->post('etype');
			$ename = $this->input->post('ename');
			$etym = $this->input->post('etym');
			$edate = $this->input->post('edate');
			$evenue = $this->input->post('evenue');
			$edescription = $this->input->post('edescription');

			$data = [
				'eid' => $eid,
				'etype' => $etype,
				'ename' => $ename,
				'etym' => $etym,
				'edate' => $edate,
				'evenue' => $evenue,
				'edescription' => $edescription,
				];

			$query = $this->Event_Model->event($date);
			
			if ($query != FALSE)
			{
				var_dump('success');
			}	

			else
			{
				$data['error'] = 'Server down' ;
				$this->load->view('',$data);
			}

		}
	}
}
 ?>