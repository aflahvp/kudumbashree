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


	public function login($username, $password)
	{
		$query = $this->db->get_where($this->table, ['username' => $username, 'password' => $password]);
		if($query->num_rows() >= 1)
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