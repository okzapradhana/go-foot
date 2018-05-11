<?php
	class M_jadwal extends CI_Model{
		public function getAll(){
		    $q=$this->db->query('SELECT start_time, end_time, id_lapangan FROM jadwal WHERE date = CURDATE() ORDER BY id_lapangan ASC, start_time ASC');
		    //$this->db->select('start_time, end_time, id_lapangan');
            //$this->db->from('jadwal');
            //$this->db->where('date = CURDATE()');
            //$this->db->order_by('id_lapangan ASC, start_time ASC');
            return $q;
		}
	}