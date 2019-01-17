<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Home_m extends CI_Model {
		
	function __construct() 
	{
		parent::__construct();
	}

	public function get_data($table,$where='')
	{
		if($where)
		{
			return $this->db->where($where)->get($table);
		}
		else
		{
			return $this->db->get($table);
		}
	}

	
	public function check_data($table,$at)
	{
		$count = $this->db->where($at)->get($table)->num_rows();

		if($count)
		{
			return true ;
		}
		else
		{
			return false ;
		}
	}

/*    public function get_data($table,$id='')
	{

		if($id)
		{
			return $this->db->where('id',$id)->get($table)->row_array();
		}
		else
		{
			return $this->db->get($table)->result_array();
		}	

	}*/


}
