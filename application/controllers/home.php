<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 
	 public function __construct()
    {
        parent::__construct();
    
    }
 
	 
	public function index()
	{
		$this->load->view('fpBody');
	
	}

	public function keBlog(){

		$this->load->view('blogBody');
	}

	public function kePos(){

		$this->load->view('posBody');

	}

	
}
