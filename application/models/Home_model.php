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
           public function topic_5_insert($data)
    {
        $query = $this->db->insert('topics_data_list_2', $data);
        return $query;
    }
       public function topic_6_insert($data)
    {
        $query = $this->db->insert('topics_6', $data);
        return $query;
    }
    
    public function insert_why($data)
    {
        $query = $this->db->insert('moonshot_conversations', $data);
        return $query;
    }
      public function get_why()
    {
        $this->db->select("*");
        $this->db->from('moonshot_conversations');
        $query = $this->db->get();
        return $query->row();
    }
     public function why_get()
    {
        $this->db->select("*");
        $this->db->from('moonshot_conversations');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
      public function why_id($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("moonshot_conversations")->row();
    }
    
        public function update_why($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('moonshot_conversations', $data);
    }
    public function delete_why( $id)
    {
        $this->db->where('id', $id);
        $this->db->delete('moonshot_conversations');
    }
    
    public function insert_video($data)
    {
        $query = $this->db->insert('video', $data);
        return $query;
    }
    public function video_get()
    {
        $this->db->select("*");
        $this->db->from('video');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function video_id($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("video")->row();
    }
     public function delete_video($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('video');
    }
    
     public function get_video_single()
    {
        $this->db->select("*");
        $this->db->from('video');
        $query = $this->db->get();
        return $query->row();
    }
}
?>