<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class EditProfil extends CI_Controller{
        public function __construct(){
	    parent::__construct();
	    $this->load->model('M_user');
	}
        public function index(){
            
            $data['nama']=$this->M_user->getNama($this->session->userdata('username'));
            $data['hp']=$this->M_user->getHP($this->session->userdata('username'));
            $data['email'] = $this->M_user->getEmail($this->session->userdata('username'));
            $data['username'] = $this->session->userdata('username');
            $data['password'] = $this->M_user->getPassword($this->session->userdata('username'));
            $this->load->view('fragments/navbar', $data);
            $this->load->view('v_edit-profile', $data);
        }
        
       public function updateProfile(){

           if(isset($_POST['submit'])) { 
           $email = $this->input->post('email');
           $nohp = $this->input->post('no_telepon');
           $password = $this->input->post('password');
           
           $data = array(
                'email' => $email,
                'hp' => $nohp,
                'password' => $password,
                'username' => $this->session->userdata('username')
            );
            
        $data['nama']=$this->M_user->getNama($this->session->userdata('username'));
           
           $this->M_user->update_data('user', $data);
           header("Location: http://www.go-foot.creatonomics.id");
           }
           
       }
    }
    
?>