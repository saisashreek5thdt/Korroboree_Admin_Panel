<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

	public function topic_list()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_list');
		$this->load->view('k_team_journal/footer');
	}
	
	public function topic_create()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_create');
		$this->load->view('k_team_journal/footer');
	}
	
	public function topic_view()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_view');
		$this->load->view('k_team_journal/footer');
	}
	
	public function topic_edit()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_edit');
		$this->load->view('k_team_journal/footer');
	}
	
	public function topic_tracker()
	{
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/topic_tracker');
		$this->load->view('k_team_journal/footer');
	}
	
}
