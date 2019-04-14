<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/libraries/phpqrcode/qrlib.php');
class Qr extends My_Controller {
	public function index(){
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('index');
	}

	public function doGenrateQr(){
		if($this->input->post()) {
			$codesDir = "./images/";
			$codeFile = date('d-m-Y-h-i-s').'.png';
			$formData = $this->input->post('formData');
			QRcode::png($formData, $codesDir.$codeFile, $this->input->post('ecc'), $this->input->post('size'));
			echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
		} 
		else {
			redirect('qr');
		}
	}

	public function list(){
		$this->load->helper('directory');
		$map = directory_map('./images/');
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('list',['data'=>$map]);
	}

	public function decode(){
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('decode');
	}
}

/* End of file qr.php */
/* Location: ./application/controllers/qr.php */
?>