<?php


class ratings_model extends CI_Model
{
	Public function __construct() {
		parent::__construct();

		$this->load->database();

	}
	public function getPhotographerDetails($ID){
		$this->db->select('*');
		$this->db->from('photographers');
		$this->db->where('ID',$ID);

		$result=$this->db->get()->result();
		return $result;
	}




}
