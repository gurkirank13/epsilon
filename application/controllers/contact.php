<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data['title']='Contact Us';
		$this->load->view('include/header',$data);
		$this->load->view('frontend/view_contact');
		$this->load->view('include/footer');
	}
}
?>