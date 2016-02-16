<?php


  
class Hello extends CI_Controller {
  
    public function index() {
        echo 'Freetuts.net Hello Nobody';
    }

    public function other(){
        echo 'Freetuts.net Other No money';
    }
	
	public function LayBanh(){
		$this->load->model('Banh_model');
		
		echo "<pre>";
		$data = $this->Banh_model->LayBanh();
		print_r($data);
		echo "</pre>";
	}
}
?>