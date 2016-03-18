<?php


class Banh_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
// db la cai bien trong database $db = ...
	public function LayBanh(){ //error
		$query = $this->db->query("select * from banh");
		if($query->result()){
			return $query->result();
		} else {
			return FALSE;
		}
	}
}