<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function topic_save($data)
    {
        $query = $this->db->insert('topics_data_list', $data);
        return $query;
    }
        public function topic_save_1($data)
    {
        $query = $this->db->insert('topics_data_list_1', $data);
        return $query;
    }
    
       public function topic_6_insert($data)
    {
        $query = $this->db->insert('topics_data_list_2', $data);
        return $query;
    }
}
?>