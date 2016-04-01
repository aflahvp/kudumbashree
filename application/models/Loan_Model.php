<?php 

/**
* 
*/
class Loan_Model extends Ci_Model
{
	
	protected $table = 'loans';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function get_all()
	{
		$query = $this->db->select($this->table);
		if($query)
		{
			if($query->num_rows() >=1)
			{
				return true;
			}
			else
			{
				return false;
			}
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

	public function add()
	{
		if($this->db->insert($this->table,$data))
		{
			return true;
		}
		else
		{
			return false;
		}

	}


}