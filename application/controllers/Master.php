<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    private $cek_akses_user;
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        $this->cek_akses_user = cek_akses_user();
        date_default_timezone_set('Asia/Jakarta');
    }

    // For User
    public function user()
    {
        if ($this->uri->segment(3) == "tambah-user") {
            $this->tambah_user();
        } elseif ($this->uri->segment(3) == "edit-user") {
            $id = $this->uri->segment(4);
            $this->edit_user($id);
        } elseif ($this->uri->segment(3) == "hapus") {
            $id = $this->uri->segment(4);
            $this->userdelete($id);
        } elseif ($this->uri->segment(3) == "edit-profil") {
            $id = $this->uri->segment(4);
            $this->edit_profil($id);
        } else {
            $data['title']      = 'User Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['datauser']   = $this->Model->getAllUser();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/user/index');
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function tambah_user()
    {

        if ($this->cek_akses_user['tambah'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required|trim');
        $this->form_validation->set_rules('mail_user', 'Email', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password_user', 'Password', 'required|trim|min_length[6]');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('is_active_user', 'Active', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title']      = 'User Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['role']       = $this->Model->getUserRole();
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/user/user_add');
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $data = [
                'nama'          =>  htmlspecialchars($this->input->post('nama_user', true)),
                'username'      =>  htmlspecialchars($this->input->post('username', true)),
                'email'         =>  htmlspecialchars($this->input->post('mail_user', true)),
                'password'      =>  password_hash($this->input->post('password_user'), PASSWORD_DEFAULT),
                'role_id'       =>  $this->input->post('role'),
                'is_active'     =>  $this->input->post('is_active_user'),
                'date_created'  =>  time()
            ];
            $this->Model->insertData('rc_user', $data);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/user'));
        }
    }

    public function edit_user($id)
    {
        if ($this->cek_akses_user['edit'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required|trim');
        $this->form_validation->set_rules('mail_user', 'Email', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password_user', 'Password', 'required|trim|min_length[6]');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('is_active_user', 'Active', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title']      = 'User Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['role']       = $this->Model->getUserRole();
            $data['user']       = $this->Model->getUserById($id);
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/user/user_edit', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $data = [
                'nama'          =>  htmlspecialchars($this->input->post('nama_user', true)),
                'username'      =>  htmlspecialchars($this->input->post('username', true)),
                'email'         =>  htmlspecialchars($this->input->post('mail_user', true)),
                'password'      =>  password_hash($this->input->post('password_user'), PASSWORD_DEFAULT),
                'role_id'       =>  $this->input->post('role'),
                'is_active'     =>  $this->input->post('is_active_user'),
                'date_created'  =>  time()
            ];
            $this->Model->updateData($id, 'id', 'rc_user', $data);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/user'));
        }
    }

    public function edit_profil($id)
    {
        if ($this->cek_akses_user['edit'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required|trim');
        $this->form_validation->set_rules('mail_user', 'Email', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password_user', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == false) {
            $data['title']      = 'User Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['role']       = $this->Model->getUserRole();
            $data['user']       = $this->Model->getUserById($id);
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/home/v_profil', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $data = [
                'nama'          =>  htmlspecialchars($this->input->post('nama_user', true)),
                'username'      =>  htmlspecialchars($this->input->post('username', true)),
                'email'         =>  htmlspecialchars($this->input->post('mail_user', true)),
                'password'      =>  password_hash($this->input->post('password_user'), PASSWORD_DEFAULT),
                'date_created'  =>  time()
            ];
            $this->Model->updateData($id, 'id', 'rc_user', $data);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('home/profil'));
        }
    }

    public function userdelete($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $this->Model->delData("id", $id, "rc_user");
        redirect(site_url('master/user'));
    }

    // For mobil
    public function mobil()
    {
        if ($this->uri->segment(3) == "merk") {
            $this->merk_add();
        } elseif ($this->uri->segment(3) == "edit-merk") {
            $uri = $this->uri->segment(4);
            $this->merk_edit($uri);
        } elseif ($this->uri->segment(3) == "hapus") {
            $uri = $this->uri->segment(4);
            $this->merkdelete($uri);
        } elseif ($this->uri->segment(3) == "tambah-mobil") {
            $this->add_mobil();
        } elseif ($this->uri->segment(3) == "edit-mobil") {
            $uri = $this->uri->segment(4);
            $this->edit_mobil($uri);
        } elseif ($this->uri->segment(3) == "hapus-mobil") {
            $uri = $this->uri->segment(4);
            $this->hapus_mobil($uri);
        } else {
            $data['title']      = 'Mobil Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['datamobil']   = $this->Model->getAllMobil();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/mobil/index');
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function merk_add()
    {

        if ($this->cek_akses_user['tambah'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        // $this->form_validation->set_rules('kode_merk', 'Kode', 'required|trim|is_unique[rc_merk_mobil.kode_merk]');
        $this->form_validation->set_rules('merk_mobil', 'Merk', 'required|trim');
        $this->form_validation->set_rules('tipe_mobil', 'Tipe', 'required|trim');
        $this->form_validation->set_rules('produksi_mobil', 'Produksi By', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Merk Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['merk']       = $this->Model->getAllMerk();
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/mobil/merk_add', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $kode = kode('rc_merk_mobil', 'kode_merk', htmlspecialchars(strtoupper($this->input->post('tipe_mobil', true))));
            $datas = [
                'kode_merk'     =>  $kode,
                'merk_mobil'    =>  htmlspecialchars(strtoupper($this->input->post('merk_mobil', true))),
                'tipe_mobil'    =>  htmlspecialchars(strtoupper($this->input->post('tipe_mobil', true))),
                'produksi_by'   =>  htmlspecialchars(strtoupper($this->input->post('produksi_mobil', true))),
                'is_active'     =>  '1',
                'date_created'  =>  time(),
                'user_by'       =>  $data['user']['nama'],
            ];

            $this->Model->insertData('rc_merk_mobil', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/mobil/merk'));
        }
    }

    public function merk_edit($id)
    {
        if ($this->cek_akses_user['edit'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        $this->form_validation->set_rules('kode_merk', 'Kode', 'required|trim|is_unique[rc_merk_mobil.kode_merk]');
        $this->form_validation->set_rules('merk_mobil', 'Merk', 'required|trim');
        $this->form_validation->set_rules('tipe_mobil', 'Tipe', 'required|trim');
        $this->form_validation->set_rules('produksi_mobil', 'Produksi By', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'User Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['merk']       = $this->Model->getAllMerk();
            $data['edit']       = $this->Model->getMerkById($id);
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/mobil/merk_edit', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $datas = [
                // 'kode_merk'     =>  htmlspecialchars(strtoupper($this->input->post('kode_merk', true))),
                'merk_mobil'    =>  htmlspecialchars(strtoupper($this->input->post('merk_mobil', true))),
                'tipe_mobil'    =>  htmlspecialchars(strtoupper($this->input->post('tipe_mobil', true))),
                'produksi_by'   =>  htmlspecialchars(strtoupper($this->input->post('produksi_mobil', true))),
                'is_active'     =>  '1',
                'date_created'  =>  time(),
                'user_by'       =>  $data['user']['nama'],
            ];

            $this->Model->updateData($id, 'merk_id', 'rc_merk_mobil', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/mobil/edit-merk/' . $id));
        }
    }

    public function merkdelete($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $data = ['is_active' => '0'];
        $this->Model->updateData($id, 'merk_id', 'rc_merk_mobil', $data);
        $this->session->set_flashdata('message', 'Success');
        // $this->Model->delData("merk_id", $id, "rc_merk_mobil");
        redirect(site_url('master/mobil/merk'));
    }

    public function add_mobil()
    {
        if ($this->cek_akses_user['tambah'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // $this->form_validation->set_rules('kode_mobil', 'Kode', 'required|trim|is_unique[rc_mobil.kode_mobil]');
        $this->form_validation->set_rules('nama_mobil', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_polisi', 'No. Polisi', 'required|trim');
        $this->form_validation->set_rules('tahun_mobil', 'Tahun', 'required|trim');
        $this->form_validation->set_rules('jenis_mobil', 'Jeni Mobil', 'required|trim');
        $this->form_validation->set_rules('warna_mobil', 'Warna', 'required|trim');
        $this->form_validation->set_rules('no_rangka', 'No. Rangka', 'required|trim');
        $this->form_validation->set_rules('no_mesin', 'No. Mesin', 'required|trim');
        $this->form_validation->set_rules('nama_stnk', 'Nama STNK', 'required|trim');
        $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required|trim');
        $this->form_validation->set_rules('alamat_stnk', 'Alamat STNK', 'required|trim');
        $this->form_validation->set_rules('alamat_domisili', 'Alamat Sekarang', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'EXP Date', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Mobil Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['merk']       = $this->Model->getAllMerk();
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/mobil/mobil_add', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $kode = kode('rc_mobil', 'kode_mobil', htmlentities(strtoupper($this->input->post('no_polisi'))));
            $datas = [
                'kode_mobil'        => $kode,
                'nama_mobil'        => htmlentities(strtoupper($this->input->post('nama_mobil'))),
                'merk_id'           => htmlentities(strtoupper($this->input->post('jenis_mobil'))),
                'no_polisi'         => htmlentities(strtoupper($this->input->post('no_polisi'))),
                'warna'             => htmlentities(strtoupper($this->input->post('warna_mobil'))),
                'tahun'             => htmlentities(strtoupper($this->input->post('tahun_mobil'))),
                'no_rangka'         => htmlentities(strtoupper($this->input->post('no_rangka'))),
                'no_mesin'          => htmlentities(strtoupper($this->input->post('no_mesin'))),
                'nama_stnk'         => htmlentities(strtoupper($this->input->post('nama_stnk'))),
                'nama_pemilik'      => htmlentities(strtoupper($this->input->post('nama_pemilik'))),
                'alamat_stnk'       => htmlentities(strtoupper($this->input->post('alamat_stnk'))),
                'alamat_domisili'   => htmlentities(strtoupper($this->input->post('alamat_domisili'))),
                'exp_date'          => date('Y-m-d', strtotime($this->input->post('exp_date'))),
                'keterangan'        => htmlentities(strtoupper($this->input->post('keterangan'))),
                'is_active'         => '1',
                'date_created'      => time(),
                'user_by'           => $data['user']['nama']
            ];
            $this->Model->insertData('rc_mobil', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/mobil'));
        }
    }

    public function edit_mobil($id)
    {
        if ($this->cek_akses_user['edit'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // $this->form_validation->set_rules('kode_mobil', 'Kode', 'required|trim|is_unique[rc_mobil.kode_mobil]');
        $this->form_validation->set_rules('nama_mobil', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_polisi', 'No. Polisi', 'required|trim');
        $this->form_validation->set_rules('tahun_mobil', 'Tahun', 'required|trim');
        $this->form_validation->set_rules('jenis_mobil', 'Jeni Mobil', 'required|trim');
        $this->form_validation->set_rules('warna_mobil', 'Warna', 'required|trim');
        $this->form_validation->set_rules('no_rangka', 'No. Rangka', 'required|trim');
        $this->form_validation->set_rules('no_mesin', 'No. Mesin', 'required|trim');
        $this->form_validation->set_rules('nama_stnk', 'Nama STNK', 'required|trim');
        $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required|trim');
        $this->form_validation->set_rules('alamat_stnk', 'Alamat STNK', 'required|trim');
        $this->form_validation->set_rules('alamat_domisili', 'Alamat Sekarang', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'EXP Date', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Mobil Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['merk']       = $this->Model->getAllMerk();
            $data['edit']       = $this->Model->getMobilById($id);
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/mobil/mobil_edit', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $datas = [
                // 'kode_mobil'        => htmlentities(strtoupper($this->input->post('kode_mobil'))),
                'nama_mobil'        => htmlentities(strtoupper($this->input->post('nama_mobil'))),
                'merk_id'           => htmlentities(strtoupper($this->input->post('jenis_mobil'))),
                'no_polisi'         => htmlentities(strtoupper($this->input->post('no_polisi'))),
                'warna'             => htmlentities(strtoupper($this->input->post('warna_mobil'))),
                'tahun'             => htmlentities(strtoupper($this->input->post('tahun_mobil'))),
                'no_rangka'         => htmlentities(strtoupper($this->input->post('no_rangka'))),
                'no_mesin'          => htmlentities(strtoupper($this->input->post('no_mesin'))),
                'nama_stnk'         => htmlentities(strtoupper($this->input->post('nama_stnk'))),
                'nama_pemilik'      => htmlentities(strtoupper($this->input->post('nama_pemilik'))),
                'alamat_stnk'       => htmlentities(strtoupper($this->input->post('alamat_stnk'))),
                'alamat_domisili'   => htmlentities(strtoupper($this->input->post('alamat_domisili'))),
                'exp_date'          => date('Y-m-d', strtotime($this->input->post('exp_date'))),
                'keterangan'        => htmlentities(strtoupper($this->input->post('keterangan'))),
                'is_active'         => '1',
                'date_created'      => time(),
                'user_by'           => $data['user']['nama']
            ];
            $this->Model->updateData($id, 'mobil_id', 'rc_mobil', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/mobil'));
        }
    }

    public function hapus_mobil($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $data = ['is_active' => '0'];
        // $this->Model->delData("mobil_id", $id, "rc_mobil");
        $this->Model->updateData($id, 'mobil_id', 'rc_mobil', $data);
        $this->session->set_flashdata('message', 'Success');
        redirect(site_url('master/mobil'));
    }

    // For driver
    public function Driver()
    {
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->uri->segment(3) == "tambah") {
            $this->driver_add();
        } elseif ($this->uri->segment(3) == "edit") {
            $id = $this->uri->segment(4);
            $this->driver_edit($id);
        } elseif ($this->uri->segment(3) == "hapus") {
            $id = $this->uri->segment(4);
            $this->driver_hapus($id);
        } elseif ($this->uri->segment(3) == "dokumen") {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $kode       = $this->input->post('id');
            $jenis      = $this->input->post('jenis');
            $keterangan = $this->input->post('keterangan');
            $dok        = $this->db->get_where('rc_dokumen', ['kode_foreign' => $kode, 'jenis' => $jenis, 'keterangan' => $keterangan])->row_array();
            $upload     = $this->Model->upload($keterangan, $jenis);

            if ($dok) {
                if ($upload['result'] == "success") {
                    $array1 = [
                        'dokumen'       => $upload['file']['file_name'],
                        'jenis'         => $jenis,
                        'keterangan'    => $keterangan,
                        'user_by'       => $data['user']['nama'],
                        'date_create'   => time()
                    ];

                    $this->Model->updateData($dok['dokumen_id'], 'dokumen_id', 'rc_dokumen', $array1);
                    $this->session->set_flashdata('message', 'Success');
                } else {
                    $this->session->set_flashdata('message', 'Upload Gagal!');
                }
            } else {
                if ($upload['result'] == "success") {
                    $array2 = [
                        'dokumen'       => $upload['file']['file_name'],
                        'jenis'         => $jenis,
                        'kode_foreign'  => $kode,
                        'keterangan'    => $keterangan,
                        'user_by'       => $data['user']['nama'],
                        'date_create'   => time()
                    ];

                    $this->Model->insertData('rc_dokumen', $array2);
                    $this->session->set_flashdata('message', 'Success');
                } else {
                    $this->session->set_flashdata('message', 'Upload Gagal!');
                }
            }
            redirect(site_url('master/driver'));
        } else {
            $data['title']      = 'Driver Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['datadriver'] = $this->Model->getAllDriver();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/driver/index');
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function driver_add()
    {
        if ($this->cek_akses_user['tambah'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // $this->form_validation->set_rules('kode_driver', 'Kode', 'required|trim|is_unique[rc_driver.kode_driver]');
        $this->form_validation->set_rules('nama_driver', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telp_driver', 'Phone Driver', 'required|trim');
        $this->form_validation->set_rules('nama_saudara', 'Saudara', 'required|trim');
        $this->form_validation->set_rules('no_telp_saudara', 'Phone Saudara', 'required|trim');
        $this->form_validation->set_rules('no_ktp', 'KTP', 'required|trim');
        $this->form_validation->set_rules('no_sim', 'SIM', 'required|trim');
        $this->form_validation->set_rules('alamat_ktp', 'Alamat KTP', 'required|trim');
        $this->form_validation->set_rules('alamat_domisili', 'Alamat Domisili', 'required|trim');
        $this->form_validation->set_rules('is_active_driver', 'Active', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Driver Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/driver/driver_add');
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $kode = kode('rc_driver', 'kode_driver', htmlspecialchars(strtoupper($this->input->post('nama_driver', true))));
            $datas = [
                'kode_driver'       =>  $kode,
                'nama_driver'       =>  htmlspecialchars(strtoupper($this->input->post('nama_driver', true))),
                'no_ktp'            =>  htmlspecialchars(strtoupper($this->input->post('no_ktp', true))),
                'no_sim'            =>  htmlspecialchars(strtoupper($this->input->post('no_sim', true))),
                'no_telp_driver'    =>  htmlspecialchars(strtoupper($this->input->post('no_telp_driver', true))),
                'alamat_ktp'        =>  htmlspecialchars(strtoupper($this->input->post('alamat_ktp', true))),
                'alamat_domisili'   =>  htmlspecialchars(strtoupper($this->input->post('alamat_domisili', true))),
                'nama_saudara'      =>  htmlspecialchars(strtoupper($this->input->post('nama_saudara', true))),
                'no_telp_saudara'   =>  htmlspecialchars(strtoupper($this->input->post('no_telp_saudara', true))),
                'is_active'         =>  $this->input->post('is_active_driver'),
                'date_created'      =>  time()
            ];
            $this->Model->insertData('rc_driver', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/driver'));
        }
    }

    public function driver_edit($id)
    {
        if ($this->cek_akses_user['edit'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // $this->form_validation->set_rules('kode_driver', 'Kode', 'required|trim|is_unique[rc_driver.kode_driver]');
        $this->form_validation->set_rules('nama_driver', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telp_driver', 'Phone Driver', 'required|trim');
        $this->form_validation->set_rules('nama_saudara', 'Saudara', 'required|trim');
        $this->form_validation->set_rules('no_telp_saudara', 'Phone Saudara', 'required|trim');
        $this->form_validation->set_rules('no_ktp', 'KTP', 'required|trim');
        $this->form_validation->set_rules('no_sim', 'SIM', 'required|trim');
        $this->form_validation->set_rules('alamat_ktp', 'Alamat KTP', 'required|trim');
        $this->form_validation->set_rules('alamat_domisili', 'Alamat Domisili', 'required|trim');
        $this->form_validation->set_rules('is_active_driver', 'Active', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Driver Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->Model->getDriverById($id);
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/driver/driver_edit', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $datas = [
                // 'kode_driver'       =>  htmlspecialchars(strtoupper($this->input->post('kode_driver', true))),
                'nama_driver'       =>  htmlspecialchars(strtoupper($this->input->post('nama_driver', true))),
                'no_ktp'            =>  htmlspecialchars(strtoupper($this->input->post('no_ktp', true))),
                'no_sim'            =>  htmlspecialchars(strtoupper($this->input->post('no_sim', true))),
                'no_telp_driver'    =>  htmlspecialchars(strtoupper($this->input->post('no_telp_driver', true))),
                'alamat_ktp'        =>  htmlspecialchars(strtoupper($this->input->post('alamat_ktp', true))),
                'alamat_domisili'   =>  htmlspecialchars(strtoupper($this->input->post('alamat_domisili', true))),
                'nama_saudara'      =>  htmlspecialchars(strtoupper($this->input->post('nama_saudara', true))),
                'no_telp_saudara'   =>  htmlspecialchars(strtoupper($this->input->post('no_telp_saudara', true))),
                'is_active'         =>  $this->input->post('is_active_driver'),
                'date_created'      =>  time()
            ];

            $this->Model->updateData($id, 'driver_id', 'rc_driver', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/driver'));
        }
    }

    public function driver_hapus($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $data = ['is_active' => '0'];
        $this->Model->updateData($id, 'driver_id', 'rc_driver', $data);

        // $this->Model->delData("driver_id", $id, "rc_driver");
        redirect(site_url('master/driver'));
    }

    public function customer()
    {
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->uri->segment(3) == "tambah") {
            $this->add_customer();
        } elseif ($this->uri->segment(3) == "edit") {
            $id = $this->uri->segment(4);
            $this->edit_customer($id);
        } elseif ($this->uri->segment(3) == "hapus") {
            $id = $this->uri->segment(4);
            $this->customer_hapus($id);
        } elseif ($this->uri->segment(3) == "dokumen") {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $kode       = $this->input->post('id');
            $jenis      = $this->input->post('jenis');
            $keterangan = $this->input->post('keterangan');
            $dok        = $this->db->get_where('rc_dokumen', ['kode_foreign' => $kode, 'jenis' => $jenis, 'keterangan' => $keterangan])->row_array();
            $upload     = $this->Model->upload($keterangan, $jenis);

            if ($dok) {
                if ($upload['result'] == "success") {
                    $array1 = [
                        'dokumen'       => $upload['file']['file_name'],
                        'jenis'         => $jenis,
                        'keterangan'    => $keterangan,
                        'user_by'       => $data['user']['nama'],
                        'date_create'   => time()
                    ];

                    $this->Model->updateData($dok['dokumen_id'], 'dokumen_id', 'rc_dokumen', $array1);
                    $this->session->set_flashdata('message', 'Success');
                } else {
                    $this->session->set_flashdata('message', 'Upload Gagal!');
                }
            } else {
                if ($upload['result'] == "success") {
                    $array2 = [
                        'dokumen'       => $upload['file']['file_name'],
                        'jenis'         => $jenis,
                        'kode_foreign'  => $kode,
                        'keterangan'    => $keterangan,
                        'user_by'       => $data['user']['nama'],
                        'date_create'   => time()
                    ];

                    $this->Model->insertData('rc_dokumen', $array2);
                    $this->session->set_flashdata('message', 'Success');
                } else {
                    $this->session->set_flashdata('message', 'Upload Gagal!');
                }
            }
            redirect(site_url('master/customer'));
        } else {
            $data['title']      = 'Customer Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['customer']   = $this->Model->getAllCustomer();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/customer/index');
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function add_customer()
    {
        if ($this->cek_akses_user['tambah'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // $this->form_validation->set_rules('kode_cust', 'Kode', 'required|trim|is_unique[rc_customer.kode_customer]');
        $this->form_validation->set_rules('nama_cust', 'Nama', 'required|trim');
        $this->form_validation->set_rules('ktp_cust', 'KTP', 'required|trim');
        $this->form_validation->set_rules('npwp_cust', 'NPWP', 'required|trim');
        $this->form_validation->set_rules('alamat_cust', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp_cust1', 'Phone#1', 'required|trim');
        $this->form_validation->set_rules('telp_cust2', 'Phone2', 'required|trim');
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim');
        $this->form_validation->set_rules('jabatan_cust', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('mail_cust', 'Email', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Customer Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/customer/customer_add', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            $page = $this->input->post('page');
            $kode = kode('rc_customer', 'kode_customer', htmlspecialchars(strtoupper($this->input->post('nama_cust'))));
            $datas = [
                'kode_customer'     =>  htmlspecialchars(strtoupper($kode)),
                'nama_customer'     =>  htmlspecialchars(strtoupper($this->input->post('nama_cust', true))),
                'email_customer'    =>  htmlspecialchars(strtoupper($this->input->post('mail_cust', true))),
                'ktp_or_sim'        =>  htmlspecialchars(strtoupper($this->input->post('ktp_cust', true))),
                'npwp'              =>  htmlspecialchars(strtoupper($this->input->post('npwp_cust', true))),
                'no_telp_customer1' =>  htmlspecialchars(strtoupper($this->input->post('telp_cust1', true))),
                'no_telp_customer2' =>  htmlspecialchars(strtoupper($this->input->post('telp_cust2', true))),
                'alamat_customer'   =>  htmlspecialchars(strtoupper($this->input->post('alamat_cust', true))),
                'nama_perusahaan'   =>  htmlspecialchars(strtoupper($this->input->post('nama_perusahaan', true))),
                'posisi_jabatan'    =>  htmlspecialchars(strtoupper($this->input->post('jabatan_cust', true))),
                'is_active'         =>  '1',
                'date_created'      =>  time()
            ];
            $this->Model->insertData('rc_customer', $datas);
            $this->session->set_flashdata('message', 'Success');

            if ($page != 'master') {
                redirect(site_url('transaksi/sales-order'));
            } else {
                redirect(site_url('master/customer'));
            }
        }
    }

    public function edit_customer($id)
    {
        if ($this->cek_akses_user['edit'] != '1') {
            //$this->session->unset_userdata('csrf_token');
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // $this->form_validation->set_rules('kode_cust', 'Kode', 'required|trim|is_unique[rc_customer.kode_customer]');
        $this->form_validation->set_rules('nama_cust', 'Nama', 'required|trim');
        $this->form_validation->set_rules('ktp_cust', 'KTP', 'required|trim');
        $this->form_validation->set_rules('npwp_cust', 'NPWP', 'required|trim');
        $this->form_validation->set_rules('alamat_cust', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp_cust1', 'Phone#1', 'required|trim');
        $this->form_validation->set_rules('telp_cust2', 'Phone2', 'required|trim');
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim');
        $this->form_validation->set_rules('jabatan_cust', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('mail_cust', 'Email', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Customer Management';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->Model->getCustomerById($id);
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/customer/customer_edit', $data);
            $this->load->view('user/template/v_footer');
        } else {
            cek_csrf();
            // $kode = kode('rc_customer', 'customer_id', $this->input->post('nama_cust'));
            $datas = [
                'nama_customer'     =>  htmlspecialchars(strtoupper($this->input->post('nama_cust', true))),
                'email_customer'    =>  htmlspecialchars(strtoupper($this->input->post('ktp_cust', true))),
                'ktp_or_sim'        =>  htmlspecialchars(strtoupper($this->input->post('ktp_cust', true))),
                'npwp'              =>  htmlspecialchars(strtoupper($this->input->post('npwp_cust', true))),
                'no_telp_customer1' =>  htmlspecialchars(strtoupper($this->input->post('telp_cust1', true))),
                'no_telp_customer2' =>  htmlspecialchars(strtoupper($this->input->post('telp_cust2', true))),
                'alamat_customer'   =>  htmlspecialchars(strtoupper($this->input->post('alamat_cust', true))),
                'nama_perusahaan'   =>  htmlspecialchars(strtoupper($this->input->post('nama_perusahaan', true))),
                'posisi_jabatan'    =>  htmlspecialchars(strtoupper($this->input->post('jabatan_cust', true))),
                'is_active'         =>  '1',
                'date_created'      =>  time()
            ];
            $this->Model->updateData($id, 'customer_id', 'rc_customer', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/customer'));
        }
    }

    public function customer_hapus($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $data = ['is_active' => '0'];
        $this->Model->updateData($id, 'customer_id', 'rc_customer', $data);

        // $this->Model->delData("customer_id", $id, "rc_customer");
        redirect(site_url('master/customer'));
    }

    public function tipe_order()
    {
        if ($this->uri->segment(3) == "tambah") {
            $this->add_tipe_order();
        } elseif ($this->uri->segment(3) == "edit") {
            $id   = $this->input->post('id');
            $this->edit_tipe_order($id);
        } elseif ($this->uri->segment(3) == "hapus") {
            $id = $this->uri->segment(4);
            $this->tipe_order_hapus($id);
        } else {
            $data['title']      = 'Tipe Order';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tipe']       = $this->Model->getAllTipeOrder();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/tiper_order/index', $data);
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function add_tipe_order()
    {
        if ($this->cek_akses_user['tambah'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        $this->form_validation->set_rules('nama_tipe', 'Tipe', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Tipe Order';
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tipe']       = $this->Model->getAllTipeOrder();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            $data['script']     = '#tipeOrderModal';

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/tiper_order/index', $data);
            $this->load->view('user/template/v_footer', $data);
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            $datas = [
                'nama_tipe'         =>  htmlspecialchars(ucwords($this->input->post('nama_tipe', true))),
                'is_active'         =>  '1',
                'date_created'      =>  time()
            ];
            $this->Model->insertData('rc_tipe_order', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/tipe-order'));
        }
    }

    public function edit_tipe_order()
    {
        if ($this->cek_akses_user['edit'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        $this->form_validation->set_rules('nama_tipe', 'Tipe', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Tipe Order';
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tipe']       = $this->Model->getAllTipeOrder();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            $data['script']     = '#tipeOrderModal';

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/tiper_order/index', $data);
            $this->load->view('user/template/v_footer', $data);
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            // $kode = kode('rc_customer', 'customer_id', $this->input->post('nama_cust'));
            $id = $this->input->post('id');
            $datas = [
                'nama_tipe'         =>  htmlspecialchars(ucwords($this->input->post('nama_tipe', true))),
                'is_active'         =>  htmlspecialchars(ucfirst($this->input->post('is_active', true))),
                'date_created'      =>  time()
            ];
            $this->Model->updateData($id, 'order_tipe_id', 'rc_tipe_order', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/tipe-order'));
        }
    }

    public function tipe_order_hapus($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $data = ['is_active' => '0'];
        $this->Model->updateData($id, 'order_tipe_id', 'rc_tipe_order', $data);
        redirect(site_url('master/tipe-order'));
    }

    public function tipe_sewa()
    {
        if ($this->uri->segment(3) == "tambah") {
            $this->add_tipe_sewa();
        } elseif ($this->uri->segment(3) == "edit") {
            $id   = $this->input->post('id');
            $this->edit_tipe_sewa($id);
        } elseif ($this->uri->segment(3) == "hapus") {
            $id = $this->uri->segment(4);
            $this->tipe_sewa_hapus($id);
        } else {
            $data['title']      = 'Tipe Sewa';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tipe']       = $this->Model->getAllTipeSewa();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/tipe_sewa/index', $data);
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function add_tipe_sewa()
    {
        if ($this->cek_akses_user['tambah'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        $this->form_validation->set_rules('nama_tipe', 'Tipe', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Tipe Sewa';
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tipe']       = $this->Model->getAllTipeOrder();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            $data['script']     = '#tipeSewaModal';

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/tipe_sewa/index', $data);
            $this->load->view('user/template/v_footer', $data);
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            $datas = [
                'nama_tipe'         =>  htmlspecialchars(ucwords($this->input->post('nama_tipe', true))),
                'is_active'         =>  '1',
                'date_created'      =>  time()
            ];
            $this->Model->insertData('rc_tipe_sewa', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/tipe-sewa'));
        }
    }

    public function edit_tipe_sewa()
    {
        if ($this->cek_akses_user['edit'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        $this->form_validation->set_rules('nama_tipe', 'Tipe', 'required|trim');

        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->form_validation->run() == false) {
            $data['title']      = 'Tipe Sewa';
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tipe']       = $this->Model->getAllTipeOrder();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/tipe_sewa/index', $data);
            $this->load->view('user/template/v_footer', $data);
        } else {
            cek_csrf();
            // $kode = kode('rc_customer', 'customer_id', $this->input->post('nama_cust'));
            $id = $this->input->post('id');
            $datas = [
                'nama_tipe'         =>  htmlspecialchars(ucwords($this->input->post('nama_tipe', true))),
                'is_active'         =>  htmlspecialchars(ucwords($this->input->post('is_active', true))),
                'date_created'      =>  time()
            ];

            $this->Model->updateData($id, 'sewa_tipe_id', 'rc_tipe_sewa', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('master/tipe-sewa'));
        }
    }

    public function tipe_sewa_hapus($id)
    {
        if ($this->cek_akses_user['hapus'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        // cek_csrf();
        $data = ['is_active' => '0'];
        $this->Model->updateData($id, 'sewa_tipe_id', 'rc_tipe_sewa', $data);
        redirect(site_url('master/tipe-sewa'));
    }
}
