

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login_view');
		$this->load->view('footer');
	}
	
	public function selection()
	{
		$this->load->view('header');
		$this->load->view('selection_view');
		$this->load->view('footer');
	}
	public function logout(){
	
	 redirect("admin/admindashboard");
	}
}
