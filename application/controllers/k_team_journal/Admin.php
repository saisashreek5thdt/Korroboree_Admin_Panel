<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function account()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/account');
		$this->load->view('k_team_journal/footer');
	}
	
	public function settings()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/settings');
		$this->load->view('k_team_journal/footer');
	}
	
}
