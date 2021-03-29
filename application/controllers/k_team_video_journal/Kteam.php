<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kteam extends CI_Controller {

	public function dashboard_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/dashboard');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function project_list_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/project_list_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function kteam_file_manager()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/kteam_file');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function kteam_library()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/kteam_library');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function kteam_userdata()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/kteam_userdata');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function userdata_view()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/userdata_view');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function userdata_topic_view()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/userdata_topic_view');
		$this->load->view('k_team_video_journal/footer');
	}
	
}
