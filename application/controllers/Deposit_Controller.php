<?php 
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Deposit_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Deposit_Model');
		$this->load->library('table');
	}

	public function view()
	{
		$data = $this->Deposit_Model->get_all();
		if($data != FALSE)
		{
			$this->load->view('admin/add_deposit',$data);
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/add_deposit',$data);
			
		}
	}

	public function add()
	{
		$this->form_validation->set_rules('id', 'id', 'required');
		$this->form_validation->set_rules('amount', 'amount', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		// $this->form_validation->set_rules('balance', 'balance', 'required');

		if ($this->form_validation->run() === FALSE) {
		$this->load->view('admin/add_deposit');
		}

   
 		else
		{	
			$id = $this->input->post('id');
			$amount = md5($this->input->post('amount'));
			$date = $this->input->post('date');
			// $balance = $this->input->post('balance');


			$data = [
				'id' => $id,
				'amount' => $amount,
				'payeddate' => $date,
				'balance' => 'balance'
					];
					

			$query=$this->Deposit_Model->add($data);		//call add() in event_model
	        
	        if($query==true)
	        {
	        	redirect(base_url('Deposit_Controller/view'));   //Deposit_Controller/index
	        	$this->load->view('admin/view_deposit',$data);
	        	//$this->load->view('Event_Controller/view');
	        }
	        else
	        {
	        	$data['message'] = '<script>
	        							alert("Server Error . please try again later");
	        							</script>';
	        	//redirect(base_url('Event_Controller/add'));
	        }


		}		
	}


  /*member_controller*/
	public function view_deposit()
	{
		$query = $this->Deposit_Model->get_where();
		if($query != false)
		{
			$this->table->set_heading(array('amount', 'payeddate'));
			foreach ($query as $key => $value) 
			{
				$this->table->add_row(array($value->amount, $value->payeddate));
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
			$data['deposit']= $this->table->generate();
			
			
			$this->load->view('admin/view_deposit', $data);
		}
		
	}

}


 ?>