<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kteam extends CI_Controller {

	public function dashboard()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/dashboard');
		$this->load->view('k_team_journal/footer');
	}
	
	public function project_list()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/project_list');
		$this->load->view('k_team_journal/footer');
	}
	
	public function kteam_file_manager()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_file');
		$this->load->view('k_team_journal/footer');
	}
	
	public function kteam_library()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_library');
		$this->load->view('k_team_journal/footer');
	}
	
	public function kteam_userdata()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_userdata');
		$this->load->view('k_team_journal/footer');
	}
	
	public function userdata_view()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/userdata_view');
		$this->load->view('k_team_journal/footer');
	}
	
	public function userdata_topic_view()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/userdata_topic_view');
		$this->load->view('k_team_journal/footer');
	}
	
}
