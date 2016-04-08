<?php 

/**
* 
*/
class Deposit_model extends CI_Model
{
	protected $table='deposits';	
	
	public function __construct()
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
			return false;
		}
	}

	public function view_all()
	{
		$query = $this->db->get($this->table);
		if ($query != false) 
		{
			if ($query->num_rows() >= 1) 
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public function get_all()
	{
		$query = $this->db->get($this->table);
		if ($query != false) 
		{
			if ($query->num_rows() >= 1) {
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public function get_where($where)
	{
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if($query)
		{
			if($query->num_rows() >= 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
	}

}
 ?>