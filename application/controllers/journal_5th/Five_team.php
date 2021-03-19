<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Five_team extends CI_Controller {

	public function dashboard_five()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/dashboard');
		$this->load->view('journal_5th/footer');
	}
	
	public function account_five()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/account');
		$this->load->view('journal_5th/footer');
	}
	
	public function settings_five()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/settings');
		$this->load->view('journal_5th/footer');
	}
	public function topics()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/settings');
		$this->load->view('journal_5th/footer');
	}
}
