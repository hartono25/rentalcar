<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
    }

    public function index()
    {
        // $data['title'] = 'Home';
        // $data['user'] = $this->Model->getDataUser($this->session->userdata('username'));
        // // echo 'Selamat Datang ' . $data['user']['nama'];
        // $data['menu'] = $this->Model->main_menu();
        // $data['submenu'] = $this->Model->submenu();

        // $this->load->view('user/template/v_header', $data);
        // $this->load->view('user/template/v_sidebar', $data);
        // $this->load->view('user/home/v_home');
        // $this->load->view('user/template/v_footer');
    }
}
