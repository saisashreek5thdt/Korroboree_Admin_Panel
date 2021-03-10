<?php 

class Main_model extends CI_model{


public function login_val($username,$password ){

$this->db->where('username',$username);
$this->db->where('password',$password);
$query=$this->db->get('admin'); 
if($query->num_rows()>0){
    return true;

}
else{
return false;
}

}
public function get_admin($username,$password ){

    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query=$this->db->get('admin'); 

        return $query->result();
      
    
    }

}

?>