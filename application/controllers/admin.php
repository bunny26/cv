<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['Berita'] = $this->MyMod->GetBerita();
		$data['Porto'] = $this->MyMod->getPorto();
		$data['Testimoni'] = $this->MyMod->getTest();
		
		$data['err_message'] = "";
		$this->load->view('login/login', $data);

	}

	public function rumah()
	{
		
		$data['berita'] = $this->MyMod->GetBerita();
		$data['porto'] = $this->MyMod->getPorto();
		$data['testimoni'] = $this->MyMod->getTest();
		$data['user'] = $this->MyMod->getUser();
		$data['email'] = $this->MyMod->getMail();
		$this->load->view('dasbor/admin/dasbor', $data);
	}

	public function lihatFoto()
	{
		$this->load->view('dasbor/admin/galer');
	}

	public function lihatEmail()
	{
		$data['Email'] = $this->MyMod->getMail();
		$this->load->view('dasbor/admin/email', $data);
	}

	public function editProfil()
	{
		$this->load->view('dasbor/admin/user');
	}




	 /*=================================================================
	kontroler crud email
	==================================================================*/
	public function crudMail(){

		$data = $this->MyMod->getMail();
		$this->load->view('dasbor/admin/email', $data);
	}

	public function do_deleteMail($email){
		$wheree = array('email' => $email);
		$res = $this->MyMod->delete('email',$wheree);
		if($res>=1){
			redirect('admin/crudMail');
		}
	}

	 public function add_dataMail(){
        $this->load->view('dasbor/email/emailAdd');

    }

	public function do_insertMail(){
		 $date = date_create();
		if (isset($_POST['btnSubmit'])){

			$email = $_POST['email'];
			$namaPengirim = $_POST['namaPengirim'];
			$isiEmail =  $_POST['isiEmail'];
			$waktu =  $_POST['waktu'];
			$data_insert = array(
				'email' => $email,
				'namaPengirim' => $namaPengirim,
				'isiEmail' => $isiEmail,
				'waktu' => $waktu
			);

			// if(is_uploaded_file($_FILES['imageP']['tmp_name'])){
			// 	move_uploaded_file($_FILES['imageP']['tmp_name'], $target);
			// 	echo "berhasil";

			// } else {
			// 	echo "salah";
			// }
			$res = $this->db->insert('email', $data_insert) or trigger_error(mysql_error().$sql);
		}
		redirect('admin/crudMail');
	}



	 /*=================================================================
	kontroler crud portofolio
	==================================================================*/
	public function crudporto(){

		$data = $this->MyMod->getPorto();
		$this->load->view('dasbor/portofolio/porto', array('data' => $data));
	}
	//missing statmen edit_dataP
	public function edit_dataP($idPorto){
		$portofolio = $this->MyMod->getPorto("where idPorto = $idPorto");
		$data = array(
			"idPorto" => $portofolio[0]['idPorto'],
			"namaPorto" => $portofolio[0]['namaPorto'],
			"keterangan" => $portofolio[0]['keterangan'],
			"kategori" => $portofolio[0]['kategori']	 );
		$this->load->view('dasbor/portofolio/portoEdit',$data);

	}

	public function do_updateP(){

		$idPorto = $_POST['idPorto'];
		$namaPorto = $_POST['namaPorto'];
		$keterangan =  $_POST['keterangan'];
		$kategori =  $_POST['kategori'];
		$update_berita = array(
			'idPorto' => $idPorto,	
			'namaPorto' => $namaPorto,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
		);
		$where = array('idPorto' => $idPorto);
		$upd = $this->MyMod->update('portofolio', $update_berita, $where);
		if ($upd >= 1) {
			redirect('admin/crudporto');
		} else {
			echo "Gagal";
		}
	}

	public function do_deleteP($idPorto){
		$wheree = array('idPorto' => $idPorto);
		$res = $this->MyMod->delete('portofolio',$wheree);
		if($res>=1){
			redirect('admin/crudporto');
		}
	}

	 public function add_dataP(){
        $this->load->view('dasbor/portofolio/portoAdd');
    }

	public function do_insertP(){
		if (isset($_POST['btnSubmit'])){
			$target = "./images/portofolio/".basename($_FILES['imageP']['name']);

			$idPorto = $_POST['idPorto'];
			$namaPorto = $_POST['namaPorto'];
			$keterangan =  $_POST['keterangan'];
			$kategori =  $_POST['kategori'];
			$gambar = $_FILES['imageP']['name'];
			$data_insert = array(
				'idPorto' => $idPorto,
				'namaPorto' => $namaPorto,
				'keterangan' => $keterangan,
				'kategori' => $kategori,
				'imageP' => $target
			);

			if(is_uploaded_file($_FILES['imageP']['tmp_name'])){
				move_uploaded_file($_FILES['imageP']['tmp_name'], $target);
				echo "berhasil";

			} else {
				echo "salah";
			}
			$res = $this->db->insert('portofolio', $data_insert) or trigger_error(mysql_error().$sql);
		}
		redirect('admin/crudporto');
	}

	public function do_uploadP($idPorto){
		$imagee = $_FILES['imageP']['name'];

		$type = explode('.', $imagee);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/portofolio/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
				return "";
			}

/*=================================================================
	kontroler blog crud
	==================================================================*/
	public function crudblog(){
		$data = $this->MyMod->getBerita();
		$this->load->view('dasbor/blog/blog', array('data' => $data));
	}

	public function edit_dataB($idPost){
		$berita = $this->MyMod->getBerita("where idPost = $idPost");
		$data = array(
			"idPost" => $berita[0]['idPost'],
			"judul" => $berita[0]['judul'],
			"isiBerita" => $berita[0]['isiBerita']	 );
		$this->load->view('dasbor/blog/blogEdit',$data);

	}
	public function do_updateB(){

		$idPost = $_POST['idPost'];
		$judul = $_POST['judul'];
		$isiBerita =  $_POST['isiBerita'];
		$update_berita = array(
			'idPost' => $idPost,	
			'judul' => $judul,
			'isiBerita' => $isiBerita,
		);
		$where = array('idPost' => $idPost);
		$upd = $this->MyMod->update('berita', $update_berita, $where);
		if ($upd >= 1) {
			redirect('admin/crudblog');
		} else {
			echo "Gagal";
		}
	}

	public function do_deleteB($idPost){
		$wheree = array('idPost' => $idPost);
		$res = $this->MyMod->delete('berita',$wheree);
		if($res>=1){
			redirect('admin/crudblog');
		}
	}

	public function add_dataB(){
		$this->load->view('dasbor/blog/blogAdd');
	}

	public function do_insertB(){
		if (isset($_POST['btnSubmit'])){
			$target = "./images/berita/".basename($_FILES['imageB']['name']);

			$idPost = $_POST['idPost'];
			$judul = $_POST['judul'];
			$isiBerita =  $_POST['isiBerita'];
			$gambar = $_FILES['imageB']['name'];
			$data_insert = array(
				'idPost' => $idPost,
				'judul' => $judul,
				'isiBerita' => $isiBerita,
				'imageB' => $target
			);

			if(is_uploaded_file($_FILES['imageB']['tmp_name'])){
				move_uploaded_file($_FILES['imageB']['tmp_name'], $target);
				echo "berhasil";


			} else {
				echo "salah";
			}

			$res = $this->db->insert('berita', $data_insert) or trigger_error(mysql_error().$sql);
		}
		redirect('admin/crudblog');
        // $this->load->view('admin/blog/blog', $data);
	}

	public function do_uploadB($idPost){
		$imagee = $_FILES['imageB']['name'];

		$type = explode('.', $imagee);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/berita/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
				return "";
			}

/*=================================================================
	kontroler test crud
	==================================================================*/
	public function crudTest(){
		$data = $this->MyMod->getTest();
		$this->load->view('dasbor/testimoni/test', array('data' => $data));
	}

	public function edit_dataT($idTest){
		$testimoni = $this->MyMod->getTest("where idTest = $idTest");
		$data = array(
			"idTest" => $testimoni[0]['idTest'],
			"namaTest" => $testimoni[0]['namaTest'],
			"tanggal" => $testimoni[0]['tanggal'],
			"testimoni" => $testimoni[0]['testimoni']	 );
		$this->load->view('dasbor/testimoni/testEdit',$data);

	}

	public function do_updateT(){

		$idTest = $_POST['idTest'];
		$namaTest = $_POST['namaTest'];
		$tanggal =  $_POST['tanggal'];
		$testimoni =  $_POST['testimoni'];
		$update_berita = array(
			'idTest' => $idTest,	
			'namaTest' => $namaTest,
			'tanggal' => $tanggal,
			'testimoni' => $testimoni,
		);
		$where = array('idTest' => $idTest);
		$upd = $this->MyMod->update('testimoni', $update_berita, $where);
		if ($upd >= 1) {
			redirect('admin/crudTest');
		} else {
			echo "Gagal";
		}
	}

	public function do_deleteT($idTest){
		$wheree = array('idTest' => $idTest);
		$res = $this->MyMod->delete('testimoni',$wheree);
		if($res>=1){
			redirect('admin/crudTest');
		}
        // redirect('home/crudTest');
	}

	public function add_dataT(){
		$this->load->view('dasbor/testimoni/testAdd');
	}

	public function do_insertT(){
		if (isset($_POST['btnSubmit'])){
			$target = "./images/testimoni/".basename($_FILES['imageT']['name']);

			$idTest = $_POST['idTest'];
			$namaTest = $_POST['namaTest'];
			$tanggal =  $_POST['tanggal'];
			$testimoni =  $_POST['testimoni'];
			$gambar = $_FILES['imageT']['name'];
			$data_insert = array(
				'idTest' => $idTest,
				'namaTest' => $namaTest,
				'tanggal' => $tanggal,
				'testimoni' => $testimoni,
				'imageT' => $target
			);

			if(is_uploaded_file($_FILES['imageT']['tmp_name'])){
				move_uploaded_file($_FILES['imageT']['tmp_name'], $target);
				echo "berhasil";

			} else {
				echo "salah";
			}
			$res = $this->db->insert('testimoni', $data_insert) or trigger_error(mysql_error().$sql);
		}
		redirect('admin/crudTest');
	}

	public function do_uploadT($idTest){
		$imagee = $_FILES['imageT']['name'];

		$type = explode('.', $imagee);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/testimoni/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
				return "";
			} 




 /*=================================================================
	kontroler crud user
	==================================================================*/
	public function cruduser(){
		
		$data['User'] = $this->MyMod->getUser();
		$this->load->view('dasbor/admin/tabel', $data);
	}

	public function edit_dataU($id_user){
		$id_user = $this->MyMod->getUser("where id_user = $id_user");
		$data = array(
			"id_user" => $User[0]['id_user'],
			"nama" => $User[0]['nama'],
			"user" => $User[0]['user'], );
		$this->load->view('dasbor/user/portoEditto',$data);

	}

	public function do_update(){

		$id_user = $_POST['id_user'];
		$nama = $_POST['nama'];
		$user =  $_POST['user'];
		$update_user = array(
			'id_user' => $id_user,	
			'nama' => $nama,
			'user' => $user
		);
		$where = array('id_user' => $id_user);
		$upd = $this->MyMod->update('useradmin', $update_user, $where);
		if ($upd >= 1) {
			redirect('admin/cruduser');
		} else {
			echo "Gagal";
		}
	}

	public function do_deleteU($id_user){
		$wheree = array('id_user' => $id_user);
		$res = $this->MyMod->delete('useradmine',$wheree);
		if($res>=1){
			redirect('admin/cruduser');
		}
	}

	public function add_dataU(){
		$this->load->view('dasbor/user/testAdd');
	}

	public function do_insertU(){
		if (isset($_POST['btnSubmit'])){

			$id_user = $_POST['id_user'];
			$nama = $_POST['nama'];
			$data_insert = array(
				'id_user' => $id_user,
				'nama' => $nama,
			);
		

			// if(is_uploaded_file($_FILES['imageP']['tmp_name'])){
			// 	move_uploaded_file($_FILES['imageP']['tmp_name'], $target);
			// 	echo "berhasil";

			// } else {
			// 	echo "salah";
			// }
			$res = $this->db->insert('useradmin', $data_insert) or trigger_error(mysql_error().$sql);
		}
		redirect('admin/cruduser');
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
