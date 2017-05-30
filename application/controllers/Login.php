<?php
 
class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();     
        $this->load->model('myMod');
 
    }
 
    function index(){
        $this->load->view('login/login');
    }
 
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'user' => $username,
            'password' => $password
            );
        $cek = $this->myMod->cek_login("useradmin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url('index.php/Admin1')); //controller
 
        }else{
            echo "Salah";
        }
        
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
    }

    }

    