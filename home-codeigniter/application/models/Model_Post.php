<?php
  
class Model_Post extends CI_Model {

  public function getPosts(){
    $query = $this->db->get('posts');
    return $query->result();
  }
  
  public function getPost($url){
    $where = array(
      'url' => $url
    );
    $query = $this->db->get_where('posts', $where);
    
    if($query->num_rows() >= 1){
      return $query->result();
    }else{
      return false;
    }
    
  }
  

}
?>