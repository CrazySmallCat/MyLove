<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Database extends CI_Controller{
	public function LayBanh(){
		$this->load->model('Banh_model');
		
		echo "<pre>";
		$data['array'] = $this->Database->LayBanh();
		print_r($data);
		echo "</pre>";
	}
}