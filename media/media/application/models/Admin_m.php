<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Admin_m extends CI_Model {
		
	function __construct() 
	{
		parent::__construct();
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

	public function admincontact()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('auth_level',9);
		return $this->db->get()->row_array();
	}

	public function contact_details()
	{
		return $this->db->order_by('id desc')->get('contact_list')->result_array();
	}

	
}
