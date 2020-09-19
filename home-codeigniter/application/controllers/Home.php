<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
    $data = array(
      'view' => 'content',
      'title' => 'Home'
    );
    
		$this->load->view('/home/body', $data);
	}

  private function meuNome(){
    return 'Mateus Ribeiro de Souza' ;
  }

}
