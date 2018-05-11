<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
// 	public function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->model('M_juri');
// 		$this->load->library('session');
// 		$autoload['libraries'] = array('database','session');
// 		if($this->session->userdata('status') != 'login'){
// 			redirect('Login','refresh');
// 		}
// 	}

	public function index()
	{	
// 		$data['ID_TIM'] = $this->session->userdata('ID_TIM');
// 		$data['ID_JURI'] = $this->session->userdata('ID_JURI');
		$this->load->view('v_home');		
	}
	
// 	function tambah_aksi(){
// 	    if(isset($_POST['submit'])) { 
// 		$tanya1 = $this->input->post('tanya1');
// 		$tanya2 = $this->input->post('tanya2');
// 		$tanya3 = $this->input->post('tanya3');
// 		$tanya4 = $this->input->post('tanya4');
// 		$tanya5 = $this->input->post('tanya5');
// 		$tanya6 = $this->input->post('tanya6');
// 		$tanya7 = $this->input->post('tanya7');
// 		$tanya8 = $this->input->post('tanya8');
// 		$tanya9 = $this->input->post('tanya9');
// 		$idtim  = $this->session->userdata('ID_TIM');
// 		$idjuri  = $this->session->userdata('ID_JURI');
		
// 		$data = array(
// 			'KEMATANGAN' => $tanya1,
// 			'KEUNIKAN' => $tanya2,
// 			'ORIGINALITAS' => $tanya3,
// 			'PASAR' => $tanya4,
// 			'PROSES' => $tanya5,
// 			'PENAMPILAN' => $tanya6,
// 			'PPT' => $tanya7,
// 			'KOMUNIKASI' => $tanya8,
// 			'MATERI' => $tanya9,
// 			'ID_JURI' => $idjuri,
// 			'ID_TIM' => $idtim

// 			);
// 		$this->M_juri->input_data($data,'db_nilai');
// 		$this->session->sess_destroy();
// 		redirect(base_url('index.php/Login'));
// 	}
// 	}
}