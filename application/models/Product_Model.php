<?php 

/**
* 
*/
class Product_Model extends CI_Model
{
	protected $table='products';
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function add($data)
	{
		if($this->db->insert($this->table,$data))
		{
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}

	public function view()
	{
		$result=$this->db->get('products');
		if($result->num_rows()>=1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function delete()
	{
		
	}
}
 ?>