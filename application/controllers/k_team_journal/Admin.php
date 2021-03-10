<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function account()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/account');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
		
	}
	
	public function settings()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/settings');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
}
