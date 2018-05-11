<?php
    class M_booking extends CI_Model{
        public function getLapSched($lap){
            $q=$this->db->query('SELECT start_time, end_time FROM jadwal WHERE date = CURDATE() AND id_lapangan='.$lap);
            return $q;
		}
		public function insert($str,$end,$usr,$lap){
		    $input=['date'=>date("Y-m-d"), 'start_time'=>$str, 'end_time'=>$end, 'id_user'=>$usr,'id_lapangan'=>$lap];
		    $this->db->insert('jadwal',$input);
		    $id=$this->db->insert_id();
		    $price=((strtotime($end)-strtotime($str))/3600)*50000;
		    $input=['id_user'=>$usr, 'id_jadwal'=>$id, 'price'=>$price];
		    $this->db->insert('history',$input);
		}
    }