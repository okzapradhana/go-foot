<?php 
 
class M_user extends CI_Model{	
//  	function tampil_data_juri(){
// 		return $this->db->get('db_juri');
// 	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->get('user');
	}
	public function getID($username){
	    $q = $this->db->query('SELECT id_user FROM user WHERE username=\''.$username.'\'');
	    return $q->row()->id_user;
	}
	public function getAllUsername(){
	    $q = $this->db->query('SELECT username FROM user');
	    return $q;
	}
	public function getNama($usn){
	    $q = $this->db->query('SELECT nama FROM user WHERE username=\''.$usn.'\'');
	    return $q->row()->nama;
	}
	public function getHP($usn){
	    $q = $this->db->query('SELECT hp FROM user WHERE username=\''.$usn.'\'');
	    return $q->row()->hp;
	}
	
	public function getEmail($username){
	    $q = $this->db->query('SELECT email FROM user WHERE username=\''.$username.'\'');
	    return $q->row()->email;
	}
	
	public function getPassword($username){
	    $q = $this->db->query('SELECT password FROM user WHERE username=\''.$username.'\'');
	    return $q->row()->password;
	}
	
	public function update_data($table, $data){
	    $this->db->set($data);
	    $this->db->where('username', $data['username']);
	    $this->db->update($table);
	}
// 	function update_data($where,$data,$table){
// 		$this->db->where($where);
// 		$this->db->update($table,$data);
// 	}
// 	function detail_data($where,$table){		
// 		return $this->db->get_where($table,$where);
// 	}	
}