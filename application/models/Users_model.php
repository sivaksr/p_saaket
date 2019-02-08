<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_course_details($data){
	$this->db->insert('course_details',$data);
		return $this->db->insert_id();
	}
	
	public function get_course_list(){
	 $this->db->select('course_details.*')->from('course_details');
		return $this->db->get()->result_array();			
	}
	public function get_course_list_data($c_d_id){
	$this->db->select('course_details.*')->from('course_details');
     $this->db->where('course_details.c_d_id',$c_d_id);
	return $this->db->get()->result_array();			
	}
	
		

}