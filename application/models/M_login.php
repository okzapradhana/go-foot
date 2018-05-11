<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function cek_id($table, $whereId){
	    $this->db->get_where('user',$where); 
	    return $this->db->get_where($table,$whereId); 
	}
	function get_id($username){
	    $id = $this->db->get_where('user', array('username' => $username))->row();
	    return $id;
	}
	
	function get_name($username){
	    $name = $this->db->get_where('user', array('username' => $username))->row();
	    return $name;
	}
// 	function get_id_tim($nama_tim){
// 	    $id = $this->db->get_where('db_peserta', array('NAMA_TIM' => $nama_tim))->row();
// 	    return $id;
// 	}
}