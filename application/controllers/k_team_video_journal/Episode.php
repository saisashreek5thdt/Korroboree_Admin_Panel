<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {

	public function episode_list_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_list_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function create_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_create_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function view_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_view_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function edit_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_edit_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
	public function tracker_v()
	{
		$this->load->view('k_team_video_journal/header');
		$this->load->view('k_team_video_journal/episode_tracker_v');
		$this->load->view('k_team_video_journal/footer');
	}
	
}
