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
		$data['jumlahTest'] =$this->MyMod->jumlahTest();
		$this->load->view('fpBody', $data);
	
	
	}

	public function keBlog(){

		$this->load->view('blogBody');
	}

	public function kePos(){

		$this->load->view('posBody');

	}

// /*=================================================================
// 	kontroler blog crud
// ==================================================================*/
// 	public function crudblog(){
// 		$data = $this->MyMod->getBerita();
// 		$this->load->view('admin/blog/blog', array('data' => $data));
// 	}

// 	public function edit_dataB($idPost){
// 		$berita = $this->MyMod->getBerita("where idPost = $idPost");
// 		$data = array(
// 			"idPost" => $berita[0]['idPost'],
// 			"judul" => $berita[0]['judul'],
// 			"isiBerita" => $berita[0]['isiBerita']	 );
// 		$this->load->view('admin/blog/blogEdit',$data);

// 	}
// 	public function do_updateB(){

// 		$idPost = $_POST['idPost'];
// 		$judul = $_POST['judul'];
// 		$isiBerita =  $_POST['isiBerita'];
// 		$update_berita = array(
// 			'idPost' => $idPost,	
// 			'judul' => $judul,
// 			'isiBerita' => $isiBerita,
// 		);
// 		$where = array('idPost' => $idPost);
// 		$upd = $this->MyMod->update('berita', $update_berita, $where);
// 		if ($upd >= 1) {
// 			redirect('home/crudblog');
// 		} else {
// 			echo "Gagal";
// 		}
// 	}

// 	public function do_deleteB($idPost){
//         $wheree = array('idPost' => $idPost);
//         $res = $this->MyMod->delete('berita',$wheree);
//         if($res>=1){
//             redirect('home/crudblog');
//         }
// 	}
    
//     public function add_dataB(){
//         $this->load->view('admin/blog/blogAdd');
//     }
    
//     public function do_insertB(){
//         if (isset($_POST['btnSubmit'])){
//             $target = "./images/berita/".basename($_FILES['imageB']['name']);
            
//             $idPost = $_POST['idPost'];
//             $judul = $_POST['judul'];
//             $isiBerita =  $_POST['isiBerita'];
//             $gambar = $_FILES['imageB']['name'];
//             $data_insert = array(
//                 'idPost' => $idPost,
//                 'judul' => $judul,
//                 'isiBerita' => $isiBerita,
//                 'imageB' => $target
//             );
            
//             if(is_uploaded_file($_FILES['imageB']['tmp_name'])){
//                 move_uploaded_file($_FILES['imageB']['tmp_name'], $target);
//                 echo "berhasil";
                
                
//             } else {
//                 echo "salah";
//             }

//             $res = $this->db->insert('berita', $data_insert) or trigger_error(mysql_error().$sql);
//         }
//         redirect('home/crudblog');
//         // $this->load->view('admin/blog/blog', $data);
//     }
    
//     public function do_uploadB($idPost){
//         $imagee = $_FILES['imageB']['name'];
        
//         $type = explode('.', $imagee);
// 		$type = strtolower($type[count($type)-1]);
// 		$url = "./images/berita/".uniqid(rand()).'.'.$type;
// 		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
// 			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
// 				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
// 					return $url;
// 		return "";
//     }



 //    /*=================================================================
	// kontroler test crud
	// ==================================================================*/
	// public function crudTest(){
	// 	$data = $this->MyMod->getTest();
	// 	$this->load->view('admin/testimoni/test', array('data' => $data));
	// }

	// public function edit_dataT($idTest){
	// 	$testimoni = $this->MyMod->getTest("where idTest = $idTest");
	// 	$data = array(
	// 		"idTest" => $testimoni[0]['idTest'],
	// 		"namaTest" => $testimoni[0]['namaTest'],
	// 		"tanggal" => $testimoni[0]['tanggal'],
	// 		"testimoni" => $testimoni[0]['testimoni']	 );
	// 	$this->load->view('admin/testimoni/testEdit',$data);

	// }
	// public function do_updateT(){

	// 	$idTest = $_POST['idTest'];
	// 	$namaTest = $_POST['namaTest'];
	// 	$tanggal =  $_POST['tanggal'];
	// 	$testimoni =  $_POST['testimoni'];
	// 	$update_berita = array(
	// 		'idTest' => $idTest,	
	// 		'namaTest' => $namaTest,
	// 		'tanggal' => $tanggal,
	// 		'testimoni' => $testimoni,
	// 	);
	// 	$where = array('idTest' => $idTest);
	// 	$upd = $this->MyMod->update('testimoni', $update_berita, $where);
	// 	if ($upd >= 1) {
	// 		redirect('home/crudtest');
	// 	} else {
	// 		echo "Gagal";
	// 	}
	// }

	// public function do_deleteT($idTest){
 //        $wheree = array('idTest' => $idTest);
 //        $res = $this->MyMod->delete('testimoni',$wheree);
 //        if($res>=1){
 //            redirect('home/crudTest');
 //        }
 //        // redirect('home/crudTest');
	// }
    
 //    public function add_dataT(){
 //        $this->load->view('admin/testimoni/testAdd');
 //    }
    
 //    public function do_insertT(){
 //        if (isset($_POST['btnSubmit'])){
 //            $target = "./images/testimoni/".basename($_FILES['imageT']['name']);
            
 //            $idTest = $_POST['idTest'];
 //            $namaTest = $_POST['namaTest'];
 //            $tanggal =  $_POST['tanggal'];
 //            $testimoni =  $_POST['testimoni'];
 //            $gambar = $_FILES['imageT']['name'];
 //            $data_insert = array(
 //                'idTest' => $idTest,
 //                'namaTest' => $namaTest,
 //                'tanggal' => $tanggal,
 //                'testimoni' => $testimoni,
 //                'imageT' => $target
 //            );
            
 //            if(is_uploaded_file($_FILES['imageT']['tmp_name'])){
 //                move_uploaded_file($_FILES['imageT']['tmp_name'], $target);
 //                echo "berhasil";
                
 //            } else {
 //                echo "salah";
 //            }
 //            $res = $this->db->insert('testimoni', $data_insert) or trigger_error(mysql_error().$sql);
 //        }
 //        redirect('home/crudtest');
 //    }
    
 //    public function do_uploadT($idTest){
 //        $imagee = $_FILES['imageT']['name'];
        
 //        $type = explode('.', $imagee);
	// 	$type = strtolower($type[count($type)-1]);
	// 	$url = "./images/testimoni/".uniqid(rand()).'.'.$type;
	// 	if(in_array($type, array("jpg", "jpeg", "gif", "png")))
	// 		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
	// 			if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
	// 				return $url;
	// 	return "";
 //    } 

//  /*=================================================================
// 	kontroler crud portofolio
// ==================================================================*/
// 	public function crudporto(){
// 		$data = $this->MyMod->getPorto();
// 		$this->load->view('dasbor/portofolio/porto', array('data' => $data));
// 	}

// 	public function edit_dataP($idPorto){
// 		$portofolio = $this->MyMod->getPorto("where idPorto = $idPorto");
// 		$data = array(
// 			"idPorto" => $portofolio[0]['idPorto'],
// 			"namaPorto" => $portofolio[0]['namaPorto'],
// 			"keterangan" => $portofolio[0]['keterangan'],
// 			"kategori" => $portofolio[0]['kategori']	 );
// 		$this->load->view('dasbor/portofolio/portoEdit',$data);

// 	}
// 	public function do_updateP(){

// 		$idPorto = $_POST['idPorto'];
// 		$namaPorto = $_POST['namaPorto'];
// 		$keterangan =  $_POST['keterangan'];
// 		$kategori =  $_POST['kategori'];
// 		$update_berita = array(
// 			'idPorto' => $idPorto,	
// 			'namaPorto' => $namaPorto,
// 			'keterangan' => $keterangan,
// 			'kategori' => $kategori,
// 		);
// 		$where = array('idPorto' => $idPorto);
// 		$upd = $this->MyMod->update('portofolio', $update_berita, $where);
// 		if ($upd >= 1) {
// 			redirect('home/crudporto');
// 		} else {
// 			echo "Gagal";
// 		}
// 	}

// 	public function do_deleteP($idPorto){
//         $wheree = array('idPorto' => $idPorto);
//         $res = $this->MyMod->delete('portofolio',$wheree);
//         if($res>=1){
//             redirect('home/crudporto');
//         }
// 	}
    
//     public function add_dataP(){
//         $this->load->view('admin/portofolio/portoAdd');
//     }
    
//     public function do_insertP(){
//         if (isset($_POST['btnSubmit'])){
//             $target = "./images/portofolio/".basename($_FILES['imageP']['name']);
            
//             $idPorto = $_POST['idPorto'];
//             $namaPorto = $_POST['namaPorto'];
//             $keterangan =  $_POST['keterangan'];
//             $kategori =  $_POST['kategori'];
//             $gambar = $_FILES['imageP']['name'];
//             $data_insert = array(
//                 'idPorto' => $idPorto,
//                 'namaPorto' => $namaPorto,
//                 'keterangan' => $keterangan,
//                 'kategori' => $kategori,
//                 'imageP' => $target
//             );
            
//             if(is_uploaded_file($_FILES['imageP']['tmp_name'])){
//                 move_uploaded_file($_FILES['imageP']['tmp_name'], $target);
//                 echo "berhasil";
                
//             } else {
//                 echo "salah";
//             }
//             $res = $this->db->insert('portofolio', $data_insert) or trigger_error(mysql_error().$sql);
//         }
//         redirect('home/crudporto');
//     }
    
//     public function do_uploadP($idPorto){
//         $imagee = $_FILES['imageP']['name'];
        
//         $type = explode('.', $imagee);
// 		$type = strtolower($type[count($type)-1]);
// 		$url = "./images/portofolio/".uniqid(rand()).'.'.$type;
// 		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
// 			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
// 				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
// 					return $url;
// 		return "";
//     }


	
}
