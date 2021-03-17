<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {

	public function episode_list()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_list');
		$this->load->view('k_team_journal/footer');
	}
	
	public function create()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_create');
		$this->load->view('k_team_journal/footer');
	}
	
	public function view()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_view');
		$this->load->view('k_team_journal/footer');
	}
	
	public function edit()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_edit');
		$this->load->view('k_team_journal/footer');
	}
	
	public function tracker()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_tracker');
		$this->load->view('k_team_journal/footer');
	}
	
}
