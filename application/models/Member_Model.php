<?php 

/**
* 
*/
class Member_Model extends CI_Model
{
	
	protected $table = 'members';

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function view_all()
	{
		$query = $this->db->get($this->table);
		if($query != FALSE)
		{
			if($query->num_rows() >= 1)
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}

	}



	public function add_member($data)
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
		if($this->db->insert($this->table, $data) )
		{
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}

	public function delete($where)
	{

		$this->db->where($where);
		if($this->db->delete($this->table))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
  
}
 ?>