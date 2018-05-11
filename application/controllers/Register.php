<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
// 		$autoload['libraries'] = array('database','session');
// 		$this->load->library('session');
		$autoload['helper'] = array('url');
		$this->load->model('M_user');
		
	}
	public function index()
	{
		$this->load->view('v_register');
	}
	function tambah_aksi(){
	    if(isset($_POST['submit'])) { 
		$nama = $this->input->post('namalengkap');
		$email = $this->input->post('email');
		$hp = $this->input->post('no_telepon');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
			'hp' => $hp

			);
        $valid=true;			
		foreach($this->M_user->getAllUsername()->result() as $row)
	        if($username==$row->username) $valid=false;
		if($valid){
		    $this->M_user->input_data($data,'user');
		    $this->load->view('v_login');
		} else {
		    echo "<script> alert('Mohon pilih username lain.'); window.location.href='http://www.go-foot.creatonomics.id/index.php/Register';</script>";
	        $this->load->view('v_register');
		}
	}
	}
}