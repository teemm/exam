<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{	
		$this->load->model('Model');
		$this->Model->Main();
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('video');
		$this->load->view('Main');
		$this->load->view('persons');
		$this->load->view('footer');
	}
}
