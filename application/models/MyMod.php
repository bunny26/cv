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
    model crud berita
==================================================================*/

    
    public function getBerita($where=""){
        $data = $this->db->query('SELECT * FROM berita '.$where);
        return $data->result_array();
    }

    public function update($tabelName, $data, $where){
        $upd = $this->db->update($tabelName, $data, $where);
        return $upd;
    }

    public function delete($tableName, $where){
        $res = $this->db->delete($tableName, $where);
        return $res;
    }

    public function save($url){
        $this->db->set('pic', $url);
        $this->db->insert('berita');
    }

/*=================================================================
    model crud testimoni
==================================================================*/
    public function getTest($where=""){
        $data = $this->db->query('SELECT * FROM testimoni '.$where);
        return $data->result_array();
    }
    public function jumlahTest()
        {
            return $this->db->count_all('Testimoni');
        }
        


/*=================================================================
    model crud testimoni
==================================================================*/
    public function getPorto($where=""){
        $data = $this->db->query('SELECT * FROM portofolio '.$where);
        return $data->result_array();
    }


    /*=================================================================
    model crud berita
==================================================================*/

    
    public function getUser($where=""){
        $data = $this->db->query('SELECT * FROM useradmin '.$where);
        return $data->result_array();
    }



}

?>