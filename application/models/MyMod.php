<?php
class MyMod extends CI_Model {

/*=================================================================
	model login
==================================================================*/
// function login_authen($username, $password){
// 		$this->db->select('*');
// 		$this->db->where('user', $username);
// 		$this->db->where('password', $password);
// 		$this->db->from('useradmin');
// 		$query = $this->db->get();
// 			if ($query->num_rows() == 1) {
// 				return true;
// 			}
// 			else{
// 				return false;
// 			}	
// 	}
// 	// function authen_user($username){
	// 	$this->db->select('authen');
	// 	$this->db->where('user', $username);
	// 	$this->db->from('useradmin');
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }

	// function wrong_password($username, $value){ //update nilai authentication
	// 	$this->db->set('authen', $value);
	// 	$this->db->where("user", $username);
	// 	$this->db->update('useradmin');
	// }

	 function cek_login($table,$where){     
        return $this->db->get_where($table,$where);
    }


/*=================================================================
	model berita
==================================================================*/   
 function getby_id($id){
            $this->db->where('idPost',$id);
        $r= $this->db->get('berita');
        if($r->num_rows() > 0){
            return $r->row();
        }
    }
    function select(){
        $result = $this->db->get('berita');
 
        if ($result->num_rows() > 0) :
            return $result;
        endif;
    }
 
    function add(){
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isiBerita');
        $data = array('judul'=>$judul, 'isiBerita'=>$isi);
        $this->db->insert('berita', $data);
    }
 
    function update($id){
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isiBerita');
        $data = array('judul'=>$judul, 'isiBerita'=>$isi);
        $this->db->where('idPost', $id);
        $this->db->update('berita', $data);
    }
 
    function delete($id){
        $this->db->delete('berita', array('idPost' => $id));
    }



}

?>