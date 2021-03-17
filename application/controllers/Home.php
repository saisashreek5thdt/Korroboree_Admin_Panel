<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
		
	{
		$this->load->view('header');
		$this->load->view('login_view');
		$this->load->view('footer');
	}

	public function landing(){

		if($this->session->userdata('adminname')!=''){
			$this->load->view('header');	
			//echo $this->session->userdata('adminname');
			$this->load->view('selection_view');
			$this->load->view('footer');
		}
		else{
			redirect(base_url());
		}
	}

	
	public function selection()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			//post data storing to var 
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			//model function here
			$this->load->model('Main_model');
			if($this->Main_model->login_val($username,$password )){
				//retrieving values from model
				$categroies = $this->Main_model->get_admin($username,$password);
				//model values to session
				foreach($categroies as $row)
				{
				  $session_data = array(
					'adminid'  => $row->id,
					'adminname' => $row->username,
					'admintype' => $row->user_type,
					'admin_logged_in' => TRUE);
					$this->session->set_userdata($session_data);
				}
				if($this->session->userdata('adminname')!=''){
					redirect(base_url().'enter');
				}
				else{
					$this->session->set_flashdata('error','Invalid Username or password');
					redirect(base_url());
				}
			}
			else{
				$this->session->set_flashdata('error','Invalid Username or password');
				redirect(base_url());
			}
		}

		else{
			$this->session->set_flashdata('error','Invalid Username or password');
			redirect(base_url());
		}
		//$this->load->view('header');
		//$this->load->view('selection_view');
		//$this->load->view('footer');
	}

	public function logout(){
		$this->session->unset_userdata('adminname');
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}
