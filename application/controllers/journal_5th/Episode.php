<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {

	public function episode_list_five()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/episode_list_view');
		$this->load->view('journal_5th/footer');
	}
	
}
