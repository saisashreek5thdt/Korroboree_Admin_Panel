<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$this->load->view('front/index');
		//$this->load->view('front/index1');
	
		
	}
		public function index1()
	{
		
		$this->load->view('front/index1');
		//$this->load->view('front/index1');
	
		
	}
	public function view(){
		$this->load->view('front/index2');
	
	}
	
	public function selection()
	{
		$this->load->view('header');
		$this->load->view('selection_view');
		$this->load->view('footer');
	}
	
}
