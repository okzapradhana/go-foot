<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    public function __construct(){
	    parent::__construct();
	    $this->load->model('M_user');
	    $this->load->model('M_jadwal');
	    $this->load->model('M_history');
	    $this->load->model('M_booking');
	}
	
	public function index()
	{	
	    if ($this->session->userdata('status') === 'login'){

		$data['nama']=$this->M_user->getNama($this->session->userdata('username'));
		$data['hp']=$this->M_user->getHP($this->session->userdata('username'));
		$data['lap']=$this->input->get('l');
		$this->load->view('fragments/navbar',$data);
		$this->load->view('v_form-booking',$data);		
	    } else {
	        $this->load->view('v_login');
	        
	    }
	}
	function add(){
	    $strb=$this->input->post('jam_mulai');
	    $endb=$this->input->post('jam_selesai');
	    $lap=$this->input->get('l');
	 
	    $usr=$this->M_user->getID($this->session->userdata('username'));
	    if($this->validate(strtotime($strb),strtotime($endb))){
	        $this->load->model('M_booking');
	        $this->M_booking->insert($strb, $endb, $usr, $lap);
	        header("Location: http://www.go-foot.creatonomics.id");
	    } else {
	        echo "<script>alert('Jadwal pada jam tersebut sudah terpesan! Mohon ubah kembali pesanan Anda.');window.location.href='http://www.go-foot.creatonomics.id/index.php/Booking?l=".$lap."';</script>";
	    }
	}
	function validate($strb,$endb){
	    
	    $filter=$this->M_booking->getLapSched($this->input->get('l'));
	    foreach($filter->result() as $row){
	        if($strb>strtotime($row->start_time)){
	            if($strb<strtotime($row->end_time)) return false;
	            continue;
	        } else if($strb<strtotime($row->start_time)){
	            if($endb>strtotime($row->start_time)) return false;
	            continue;
	        } else return false;
	    } return true;
	}
	
	function deletePesanan($id){
	    $usn=$this->session->userdata('username');
	    
	    $this->M_history->delete($id);
	    
	    header("Location: http://go-foot.creatonomics.id/");
	    
	}
}