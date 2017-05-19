<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 
	 public function __construct()
    {
        parent::__construct();
    
    }
 
	 
	public function index()
	{
		$data['err_message'] = "";
		$this->load->view('admin/adminBody', $data);

	}

	public function keTable()
	{
		$this->load->view('dasbor/tableBody');
	
	}

	public function kePrefer()
	{
		$this->load->view('dasbor/preferenceBody');
	
	}

	public function keEmail()
	{
		$this->load->view('dasbor/emailBody');
	
	}

	public function admin() {
		$this->load->view('dasbor/utamaBody');
	
	}

	public function keTambah()
	{
		$this->load->view('dasbor/tambahUser');
	
	}

	public function keBerita()
	{
		$this->load->view('dasbor/tambahBerita');
	
	}

	
// /*=================================================================
// 	kontroler login
// ==================================================================*/
// 	public function login(){
// 		$username = $this->input->post('username');
// 		$password = $this->input->post('password');
// 		$isLogin = $this->MyMod->login_authen($username, $password);
// 		$i = $this->MyMod->authen_user($username);

// 		if ($isLogin == true) {
// 			$this->load->view('dasbor/utamaBody');
// 		} else{
// 			if ($isLogin == true && $i[0]['authentication'] < 3) {
// 				$update = $this->MyMod->wrong_password($username, $i[0]['authen']+1);
// 				$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authen']+1);
// 				$this->load->view('dasbor/utamaBody', $data);
// 			}else{
// 				$data['err_message'] = "AKUN ANDA TERBLOCK";
// 				$this->load->view('dasbor/utamaBody', $data);
// 			}
// 		}	
// 	}
// 	//lagek fungsi lek dikeki index.php
}
