<?php 

class Event_Model extends CI_Model
{

	protected $table='events';	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();	//load database	
	}

	public function add($data)
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
	public function view_all()
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
	public function delete($where)
	{
		$this->db->where($where);

		if($this->db->delete($this->table))
		{
			return true;
		}

		else
		{
			return false;
		}
	}

}
?>

