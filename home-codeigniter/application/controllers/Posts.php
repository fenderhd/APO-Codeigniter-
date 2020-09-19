<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	
	public function index()
	{
    $data = array(
      'view' => 'content',
      'title' => 'Posts',
      'posts' => $this->getPosts()
    );
    
		$this->load->view('/posts/body', $data);
	}
  
  public function p($url){
    $data = array(
      'view' => 'post',
      'title' => 'Posts',
      'post' => $this->getPost($url)
    );
    
		$this->load->view('/posts/body', $data);
    
  }
  
  private function getPost($url){
    $this->load->model('Model_Post');
    return $this->Model_Post->getPost($url);
  }
  
  
  private function getPosts(){
    $this->load->model('Model_Post');
    return $this->Model_Post->getPosts();
  }
}
