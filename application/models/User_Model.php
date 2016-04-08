<?php 

/**
* 
*/
class User_Model extends CI_Model
{
	
	protected $table = 'users';

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}


	public function login($username, $password, $utype)
	{
		$query = $this->db->get_where($this->table, ['username' => $username, 'password' => $password,'usertype' => $utype]);
		if($query->num_rows() >= 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	public function add_user($data)
	{
		$query = $this->db->insert($this->table, $data);
		if ($query != FALSE) 
		{
			return $query;
		}
		else
		{
			return FALSE;
		}
	}
}
 ?>