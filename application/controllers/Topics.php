<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        
        
    }

	public function index()
	{
	$data['video'] =	$this->Home_model->get_video_single();  
	
		$this->load->view('front/topic_1',$data);
	}
	
	public function topic_2()
	{
	    $data['edit'] =	$this->Home_model->get_why();  
		$this->load->view('front/topic_2',$data);
	}
	
	public function topic_3_1()
	{
		$data['video_list'] =	$this->Home_model->get_video_single();  
		$this->load->view('front/topic_3_1',$data);
	}
	public function topic_3_2(){
	
	$this->load->view('front/topic_3_2');
	}
	public function topic_3_3()
	{
		$this->load->view('front/topic_3_3');
	}
	
	public function topic_3_4()
	{
		$this->load->view('front/topic_3_4');
	}
	
	public function topic_3_c()
	{
		$this->load->view('front/topic_3_c');
	}
	public function topic_3_insert(){
	
	 $data = array(
            'topic_name	' => $this->input->post('answer'),
            'topic_info	' => $this->input->post('info'),
        );
       $this->Home_model->topic_save($data);
        $this->session->set_flashdata('true', ' added Successfully!.');
	    redirect("topics/topic_3_4");
	}
	public function topic_4_1()
	{
		$this->load->view('front/topic_4_1');
	}
	public function topic_4()
	{
		$this->load->view('front/topic_4');
	}
	public function topic_4_insert(){
	
	    $data = array(
            'topics_name	' => $this->input->post('topic1'),
            'topics_name_1	' => $this->input->post('topic2'),
            'topics_name_2	' => $this->input->post('topic3'),
            'topics_name_3	' => $this->input->post('topic4'),
        );
  //print_r( $data);die;
        $this->Home_model->topic_save_1($data);
	     redirect("topics/topic_4_1");
	}
	
	public function topic_5_1()
	{
		$this->load->view('front/topic_5_1');
	}
	
	public function topic_5()
	{
	$data = array(
            'topics_name_1	' => $this->input->post('topic1'),
            'topics_name_2	' => $this->input->post('topic2'),
            'topics_name_3	' => $this->input->post('topic3'),
            'topics_name_4	' => $this->input->post('topic4'),
             'topics_name_5	' => $this->input->post('topic5'),
        );
	 //print_r($data);die;
       $this->Home_model->topic_5_insert($data);
          $this->load->view('front/topic_5',$data);
       
		
	}
	
	
	
// 		public function topic_5_insert(){
	
// 	    $data = array(
//             'topics_name	' => $this->input->post('topic1'),
//             'topics_name_1	' => $this->input->post('topic2'),
//             'topics_name_2	' => $this->input->post('topic3'),
//             'topics_name_3	' => $this->input->post('topic4'),
//         );
//   print_r($data);die;
//         $this->Home_model->topic_5_insert($data);
// 	     redirect("topics/topic_5");
// 	}
	

	public function topic_6()
	{
		$this->load->view('front/topic_6');
	}
	public function topic_6_insert(){
	
	    $data = array(
              'topics_1	' => $this->input->post('topic1'),
              'topics_2	' => $this->input->post('topic2'),
              'topics_3	' => $this->input->post('topic3'),
              'topics_4	' => $this->input->post('topic4'),
              'topics_5	' => $this->input->post('topic5'),
              'topics_6	' => $this->input->post('topic6'),
         
        );
      //  print_r($data);die;
     $topic_6_insert =   $this->Home_model->topic_6_insert($data);
     if($topic_6_insert){
          redirect("topics/topic_6_1");   
     }else{
         redirect('front/topic_6');   
     }
        
	
	}
		public function topic_6_1()
	{
		$this->load->view('front/topic_6_1');
	}
	
	
	
}
