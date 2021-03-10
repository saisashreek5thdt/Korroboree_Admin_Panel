<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {

	public function episode_list()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_list');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function create()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_create');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function view()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_view');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function edit()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_edit');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function tracker()
	{
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/episode_tracker');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
}
