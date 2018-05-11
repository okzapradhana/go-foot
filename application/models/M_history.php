<?php
    class M_history extends CI_Model{
        public function getHist($usn){
		    $id=$this->db->query('SELECT id_user FROM user WHERE username=\''.$usn.'\'')->row()->id_user;
		    $q=$this->db->query('SELECT date, start_time, end_time, id_lapangan, price FROM jadwal as j INNER JOIN history as h ON j.id_jadwal=h.id_jadwal WHERE h.id_user=\''.$id.'\'');
            return $q;
		}
		public function getAll(){
		    $q=$this->db->query('SELECT j.id_jadwal as id_jadwal, nama, date, start_time, end_time, id_lapangan, price FROM jadwal as j INNER JOIN history as h ON j.id_jadwal=h.id_jadwal INNER JOIN user u ON h.id_user=u.id_user');
            return $q;
		}
		public function delete($idJadwal){
		    $array = array(
		        'id_jadwal' => $idJadwal    
		    );
		    $q = $this->db->delete('jadwal', $array);
		}
    }