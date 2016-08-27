<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']='Home';
		$this->load->view('include/header',$data);
		$this->load->view('frontend/view_home');
		$this->load->view('include/footer');
	}
}
?>