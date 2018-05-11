<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $logged=false;
	private $usn=null;
	var $data;
	public function __construct(){
	    parent::__construct();
	    $this->load->model('M_user');
	    $this->load->model('M_jadwal');
	    $this->load->model('M_history');
	    $this->usn=$this->session->userdata('username');
	    $this->logged=empty($this->usn)?false:true;
	    if($this->logged) $this->data['nama']=$this->M_user->getNama($this->usn);
        else $this->data['nama']='';
        $this->load->view('fragments/navbar',$this->data);	
	}
	
	public function index()
	{
			
		$this->load->view('v_home');

	}
	public function jadwal(){
		$this->data['jadwal']=$this->M_jadwal->getAll();
		$this->load->view('v_jadwal',$this->data);
	}
	public function history(){
		if($this->usn=='admin') $this->data['history']=$this->M_history->getAll();
		else $this->data['history']=$this->M_history->getHist($this->usn);
		$this->load->view('v_history-booking',$this->data);
	}
}
