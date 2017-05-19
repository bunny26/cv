<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	 
	 //meload view vberita beserta datanya
    function index()
    {
        $data['berita'] = $this->MyMod->select()->result();
        $this->load->view('dasbor/lihatBerita', $data);
    }
 
    //memanggil view tambah_berita
    function addBerita()
    {
        if ($this->input->post('submit')) 
        {
        $this->MyMod->add();
 
        redirect('berita/index');
        }
        $this->load->view('tambahBerita');
    }
 
    function updateBerita($id)
    {
        if ($_POST == NULL) 
        {
            $data['berita'] = $this->MyMod->getby_id($id);
            $this->load->view('tambahBerita', $data);
        }
        else 
        {
            $this->MyMod->update($id);
 
            redirect('berita/index');
        }
    }
 
    //menghapus berita
    function deleteBerita($id)
    {
        $this->db->delete('berita', array('id' => $id));
 
        redirect('berita/index');
    }
 }