<?php
 
class Admin1 extends CI_Controller{
 
    function __construct(){
        parent::__construct();
   
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }
 
    function index(){
        $data['Berita'] = $this->MyMod->GetBerita();
        $data['Porto'] = $this->MyMod->getPorto();
        $data['Testimoni'] = $this->MyMod->getTest();
        $data['User'] = $this->MyMod->getUser();
        $this->load->view('dasbor/admin/dasbor'); //
    }
}