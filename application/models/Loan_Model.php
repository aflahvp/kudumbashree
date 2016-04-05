<?php 

/**
* 
*/
class Loan_Model extends CI_Model
{
	
	protected $table = 'loans';
	protected $fields = [
		'loans.id as loan_id',
		'loans.bankname',
		'loans.accountno',
		'loans.loantype',
		'loans.mobile',
		'loans.email',
		'loans.loanamount',
		'loans.members_id as loan_member_id',
		'loans.status',
		'members.id as members_id',
		'members.name',
		'members.age',
		'members.dob',
		'members.address',
		'members.place'
	];
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

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

	public function get_join($where)
	{
		$this->db->select($this->fields);
		$this->db->where($where);
		$this->db->from($this->table);
		$this->db->join('members','members.id ='.$this->table.'.members_id');
		// var_dump($this->db->get_compiled_select($this->table));
		$query = $this->db->get();
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