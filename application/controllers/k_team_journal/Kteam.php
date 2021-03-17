<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kteam extends CI_Controller {

	public function dashboard()
	{
		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/dashboard');
		$this->load->view('k_team_journal/footer');
		}
		else{
			redirect(base_url());

		}

	}
	
	public function project_list()
	{
		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/project_list');
		$this->load->view('k_team_journal/footer');	
	}else{
			redirect(base_url());

		}
	}
	
	public function kteam_file_manager()
	{
		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_file');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function kteam_library()
	{

		if($this->session->userdata('adminname')!=''){
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_library');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}

	}
	
	public function kteam_userdata()
	{

	
		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/kteam_userdata');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function userdata_view()
	{

		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/userdata_view');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
	public function userdata_topic_view()
	{

		if($this->session->userdata('adminname')!=''){	
		$this->load->view('k_team_journal/header');
		$this->load->view('k_team_journal/userdata_topic_view');
		$this->load->view('k_team_journal/footer');
	}else{
		redirect(base_url());

	}
	}
	
}
