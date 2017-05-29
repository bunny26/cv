<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 
	 public function __construct()
    {
        parent::__construct();
    
    }
 
	 
	public function index()
	{
		$data['berita'] = $this->MyMod->GetBerita();
		$data['porto'] = $this->MyMod->getPorto();
		$data['test'] = $this->MyMod->getTest();
		$data['jumlahT'] =$this->MyMod->jumlahT();
		$data['jumlahT'] =$this->MyMod->jumlahB();
		$data['jumlahT'] =$this->MyMod->jumlahP();
		$this->load->view('fpBody', $data);
	
	
	}

	public function getDetail($idPost){
		$data['berita'] = $this->MyMod->getDtl($idPost);  
		$this->load->view('posBody', $data); 
	}

	public function keBlog(){
		$data['berita'] = $this->MyMod->GetBerita();
		$this->load->view('blogBody', $data);
	}

	public function kePos(){
		$data['berita'] = $this->MyMod->GetBerita();
		$this->load->view('posBody', $data);
	}
}
