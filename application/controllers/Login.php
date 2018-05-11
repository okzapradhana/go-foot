<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$autoload['libraries'] = array('database','session');
		$this->load->library('session');
		$autoload['helper'] = array('url');
		$this->load->model('M_login');
		$this->load->model('M_user');
	}
	public function index()
	{
		$this->load->view('v_login');
	}

    public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array(
			'username' => $username,
			'password' => $password
			);
			
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		
		if($cek > 0){
        
            $id = $this->M_login->get_id($username)->id_user;

			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
            
            $nama = $this->M_user->getNama($username);
		
		$dataNama = array(
		    'nama' => $nama
		);
            
			$this->session->set_userdata($data_session);
            

			header("Location: http://www.go-foot.creatonomics.id");
        
		}else{
			echo "<script>alert('Username dan password salah !');window.location.href='http://www.go-foot.creatonomics.id/index.php/Login';
</script>";
			//$this->load->view('v_login');
            //header("Location: http://www.go-foot.creatonomics.id/index.php/Login");
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		header("Location: http://www.go-foot.creatonomics.id");
	}

}