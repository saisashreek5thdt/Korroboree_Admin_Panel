<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function account_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/account_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function settings_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/settings_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
}
