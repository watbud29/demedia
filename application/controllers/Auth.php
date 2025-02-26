<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 

{
    public function construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    { 
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    function login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $cekuser = $this->Login_model->cekUser('name', 'status', 'aktif', $email); 
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('auth', 'refresh');
    }
   
}