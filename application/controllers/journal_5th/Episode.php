<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episode extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        
        
    }
	public function episode_list_five()
	{
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/episode_list_view');
		$this->load->view('journal_5th/footer');
	}
	
	// public function create(){
	// $this->load->view('journal_5th/header');
	// 	$this->load->view('journal_5th/view_create');
	// 	$this->load->view('journal_5th/footer');
	// }
	// public function add(){
	// echo "add";
	// }
	
	public function episode_2()
	{
        $data['list'] =	$this->Home_model->why_get();  
        
        //print_r($data['list']);die;
		$this->load->view('journal_5th/header');
		$this->load->view('journal_5th/topics_2',$data);
		$this->load->view('journal_5th/footer');
	}
	
	public function create(){
	
	       

	
	    $this->load->view('journal_5th/header');
		$this->load->view('journal_5th/create_topic_2');
		$this->load->view('journal_5th/footer');
	}
	public function add(){
	 $data = array(
		"title_1"=> $this->input->post("text_1"),
		"title_2"=> $this->input->post("text_2"),
		"title_3"=> $this->input->post("text_3"),
		"title_4"=> $this->input->post("text_4"),
	);
	//print_r($data);die;
	$topic	= $this->Home_model->insert_why($data );
		  if ($topic == true)  {
            $this->session->set_flashdata('true', ' Added Successfully!.');
           redirect('journal_5th/episode/episode_2');
            $this->session->set_flashdata('err', 'Please Enter Correct  deatilas');
           redirect('journal_5th/episode/create');
        }
	}
	public function  edit($id){
	
	  $data['edit'] =	$this->Home_model->why_id($id);  
	//  print_r( $data['edit']);die;
	 $this->load->view('journal_5th/header');
		$this->load->view('journal_5th/edit_topic-2', $data);
		$this->load->view('journal_5th/footer');
	}
	
	public function update($id){
	 $data = array(
		"title_1"=> $this->input->post("text_1"),
		"title_2"=> $this->input->post("text_2"),
		"title_3"=> $this->input->post("text_3"),
		"title_4"=> $this->input->post("text_4"),
	);
	//print_r($data);die;
         $this->Home_model->update_why($data ,$id);
		
            $this->session->set_flashdata('true', ' update Successfully!.');
           redirect('journal_5th/episode/episode_2');
            
        }
	 public function delete($id)
    {
        $this->Home_model->delete_why($id);
        $this->session->set_flashdata('true', 'Delete Successfully');
        redirect('journal_5th/episode/episode_2');
    }
	
	 public function video(){
	 
	 $data['video'] =	$this->Home_model->video_get();
	 
	    $this->load->view('journal_5th/header');
		$this->load->view('journal_5th/video',	 $data);
		$this->load->view('journal_5th/footer');
	 }
	 
	 
	  public function video_add(){
	 
	 
	    $this->load->view('journal_5th/header');
		$this->load->view('journal_5th/video_add');
		$this->load->view('journal_5th/footer');
	 }
	public function insert_video() {
         if (!empty($_FILES['offline']['name'])) {
                $config['upload_path'] = 'uploads/video/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES['offline']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('offline')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                } else {
                    $picture = '';
                }
            } else {
                $picture = '';
            }
             //print_r( $picture);die;
        $data['link'] = ($this->input->post('link')) ? $this->input->post('link') :'' ;
        $data['video'] = $picture ;    
       // print_r($data['video']);die;
        $this->Home_model->insert_video($data);
        $this->session->set_flashdata('true', ' add Successfully!.');
       redirect('journal_5th/episode/video');
    }
	  public function edit_video($id){
	 
	 
	    $data['v_edit'] =	$this->Home_model->video_id($id);  
	 // print_r( $data['v_edit']);die;
	 $this->load->view('journal_5th/header');
		$this->load->view('journal_5th/video_edit', $data);
		$this->load->view('journal_5th/footer');
	 }
	 public function video_update($id){
	 
	 $link = ($this->input->post('link')) ? $this->input->post('link') :'' ;
		
		if($_FILES['offline']['name'] != ""){
			$config['upload_path'] = 'uploads/video/';
			$config['allowed_types'] = '*';
			$config['file_name'] = $_FILES['offline']['name'];				 

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
          
			if($this->upload->do_upload('offline')){
				$uploadData = $this->upload->data();
				$picture = 'uploads/video/'.$uploadData['file_name'];
					
					unlink($this->input->post("old_video"));
						
				}
			}else{
					$picture = $this->input->post("old_video");

			
		}
		$data = array(
            "video" => $picture,
			"link"=>$link,
			
        );
	//print_r($data );die;
		$this->db->where('id', $id);
		$n = 	$this->db->update('video', $data);

        
		if($n){
		   $this->session->set_flashdata('true', ' update Successfully!.');
       redirect('journal_5th/episode/video');
		}else{
			 $this->session->set_flashdata('err', 'Please Enter Correct  deatilas');
				//$this->alert->pnotify("error","Error Occured While Updating Navbar Menu","error");
				      redirect('journal_5th/episode/edit_video');
		}
	 
	 
	 }
	 
	  public function video_delete($id)
    {
        $this->Home_model->delete_video($id);
        $this->session->set_flashdata('true', 'Delete Successfully');
          redirect('journal_5th/episode/video');
    }
	 
}
