<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/project_view');
		$this->load->view('journal_5th/footer');
	}
	
	public function kanban()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/kanban_view');
		$this->load->view('journal_5th/footer');
	}
	
}
