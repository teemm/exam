<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{	
		$this->load->Model('Model');
		$this->load->view('header');
		$this->load->view('nav');
		$data['result']=$this->Model->Main();
		$this->load->view('video');
		$this->load->view('Main', $data);
		$this->load->view('persons', $data);
		$this->load->view('footer');
	}
	// public function json(){
	// 	$this->load->model('Model');
	// 	echo (json_encode($this->model->Main()));
	// }
}
