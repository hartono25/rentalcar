<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function expired()
    {
        // $id = $this->uri->segment(3);
        $data['title']      = 'Expired Info';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        $data['mobil']      = $this->Model->getMobilByTahun();
        $data['uri']        = $this->uri->segment(3);
        $data['car']        = $this->Model->getMobilById($data['uri']);

        $this->load->view('user/template/v_header', $data);
        $this->load->view('user/template/v_sidebar', $data);
        $this->load->view('auth/v_expired', $data);
        $this->load->view('user/template/v_footer');
    }
}
