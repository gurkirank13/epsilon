<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function dashboard()
	{
		$this->load->view('admin/user');
	}
	
	public function login()
	{
		$data['title']='Admin Login';
		$this->load->view('include/header',$data);
		$this->load->view('admin/login');
		$this->load->view('include/footer');
	}
}
?>