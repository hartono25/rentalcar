<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    private $cek_akses_user;
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function menu_management()
    {
        $this->cek_akses_user = cek_akses_user();
        if ($this->uri->segment(3) == "tambah") {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $this->menuadd();
        } elseif ($this->uri->segment(3) == "edit") {
            if ($this->cek_akses_user['edit'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $kode   = $this->input->post('id');
            $this->menuupdate($kode);
        } elseif ($this->uri->segment(3) == "hapus") {
            if ($this->cek_akses_user['hapus'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            // cek_csrf();
            $id = $this->uri->segment(4);
            $this->menudelete($id);
        } else {
            $data['title']      = 'Menu Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['datamenu']   = $this->Model->getAllMenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/menu/index');
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function menuadd()
    {
        $this->cek_akses_user = cek_akses_user();
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('url_menu', 'URL Site', 'required|trim');
        $this->form_validation->set_rules('level_menu', 'Level Menu', 'required|trim');
        $this->form_validation->set_rules('urutan_menu', 'Posisi Menu', 'required|trim');
        $this->form_validation->set_rules('is_active_menu', 'Status Menu', 'required|trim');

        if ($this->input->post('level_menu') == 'main') {
            // $this->form_validation->set_rules('sub_for_menu', 'Sub Menu', 'required|trim');
        } else {
            $this->form_validation->set_rules('sub_for_menu', 'Sub Menu', 'required|trim');
        }

        $data['title']      = 'Menu Management';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        $data['users']      = $this->db->get_where('rc_user_role', ['id' => $this->session->userdata('role_id')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        $data['datamenu']   = $this->Model->getAllMenu();
        $data['tambah']     = $this->cek_akses_user['tambah'];
        $data['script']     = '#menuModal';
        $data['mobil']      = $this->Model->getMobilByTahun();

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/menu/index', $data);
            $this->load->view('user/template/v_footer');
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            $datas = [
                'nama_menu'     => htmlspecialchars(ucwords($this->input->post('nama_menu', true))),
                'url'           => htmlspecialchars($this->input->post('url_menu', true)),
                'icon'          => htmlspecialchars($this->input->post('icon_menu', true)),
                'level_menu'    => htmlspecialchars($this->input->post('level_menu', true)),
                'main_menu'     => htmlspecialchars(ucwords($this->input->post('sub_for_menu', true))),
                'is_active'     => htmlspecialchars($this->input->post('is_active_menu', true)),
                'no_urut'       => htmlspecialchars($this->input->post('urutan_menu', true)),
                'date_created'  => time(),
                'user'          => $data['users']['role'],
            ];
            $this->Model->insertData('rc_user_menu', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('menu/menu-management'));
        }
    }

    public function modal_menu_edit()
    {
        $id = $this->input->post('rowid');
        $data['menu'] = $this->Model->getMeduById($id);
        $this->load->view('modal/menu_edit', $data);
    }


    public function menuupdate($id)
    {
        $this->cek_akses_user = cek_akses_user();
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('url_menu', 'URL Site', 'required|trim');
        $this->form_validation->set_rules('level_menu', 'Level Menu', 'required|trim');
        $this->form_validation->set_rules('urutan_menu', 'Posisi Menu', 'required|trim');
        $this->form_validation->set_rules('is_active_menu', 'Status Menu', 'required|trim');

        $data['title']      = 'Menu Management';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        $data['users']      = $this->db->get_where('rc_user_role', ['id' => $this->session->userdata('role_id')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        $data['datamenu']   = $this->Model->getAllMenu();
        $data['tambah']     = $this->cek_akses_user['tambah'];
        $data['script']     = '#menuEditModal';
        $data['mobil']      = $this->Model->getMobilByTahun();

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/menu/index', $data);
            $this->load->view('user/template/v_footer');
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            $datas = [
                'nama_menu'     => htmlspecialchars(ucwords($this->input->post('nama_menu', true))),
                'url'           => htmlspecialchars($this->input->post('url_menu', true)),
                'icon'          => htmlspecialchars($this->input->post('icon_menu', true)),
                'level_menu'    => htmlspecialchars($this->input->post('level_menu', true)),
                'main_menu'     => htmlspecialchars(ucwords($this->input->post('sub_for_menu', true))),
                'is_active'     => htmlspecialchars($this->input->post('is_active_menu', true)),
                'no_urut'       => htmlspecialchars($this->input->post('urutan_menu', true)),
                'date_created'  => time(),
                'user'          => $data['users']['role'],
            ];
            $this->Model->updateData($id, 'menu_id', 'rc_user_menu', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('menu/menu-management'));
        }
    }

    public function menudelete($id)
    {
        $this->Model->delData("Menu_id", $id, "rc_user_menu");
        $this->Model->delData("Menu_id", $id, "rc_user_akses");
        redirect(site_url('menu/menu-management'));
    }

    public function access_management()
    {
        $this->cek_akses_user = cek_akses_user();
        if ($this->uri->segment(3) == "edit") {
            if ($this->cek_akses_user['edit'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $kode   = $this->input->post('id');
            $this->roleupdate($kode);
        } elseif ($this->uri->segment(3) == "tambah") {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $this->roleadd();
        } elseif ($this->uri->segment(3) == "hapus") {
            if ($this->cek_akses_user['hapus'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            // cek_csrf();
            $id = $this->uri->segment(4);
            $this->roledelete($id);
        } elseif ($this->uri->segment(3) == "simpan_role_akses") {
            if ($this->cek_akses_user['edit'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $id = $this->input->post('id');
            $kode = $this->input->post('kode');
            $this->Model->simpanRoleAkses($id, $kode);
            redirect(site_url('menu/access-management'));
        } else {
            $data['title']      = 'Access Management';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            $data['users']      = $this->db->get_where('rc_user_role', ['id' => $this->session->userdata('role_id')])->row_array();
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            if ($this->session->userdata['role_id'] == 1) {
                $data['role']   = $this->Model->getAllUserAkses();
            } else {
                $data['role']   = $this->Model->getUserAkses();
            }

            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/menu/menu_akses', $data);
            $this->load->view('user/template/v_footer');
        }
    }

    public function modal_userole_edit()
    {
        $id             = $this->input->post('rowid');
        $data['role']   = $this->Model->getRoleById($id);
        $this->load->view('modal/akses_edit', $data);
    }

    public function roleupdate($id)
    {
        $this->cek_akses_user = cek_akses_user();
        $this->form_validation->set_rules('role_user', 'Role User', 'required|trim');

        $data['title']      = 'Access Management';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        $data['users']      = $this->db->get_where('rc_user_role', ['id' => $this->session->userdata('role_id')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        if ($this->session->userdata['role_id'] == 1) {
            $data['role']   = $this->Model->getAllUserAkses();
        } else {
            $data['role']   = $this->Model->getUserAkses();
        }

        $data['tambah']     = $this->cek_akses_user['tambah'];
        $data['mobil']      = $this->Model->getMobilByTahun();

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/menu/menu_akses', $data);
            $this->load->view('user/template/v_footer');
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            $datas = [
                'role'      => htmlspecialchars($this->input->post('role_user', true)),
            ];
            $this->Model->updateData($id, 'id', 'rc_user_role', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('menu/access-management'));
        }
    }

    public function roleadd()
    {
        $this->cek_akses_user = cek_akses_user();
        $this->form_validation->set_rules('role_user', 'Role User', 'required|trim');

        $data['title']      = 'Access Management';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        $data['users']      = $this->db->get_where('rc_user_role', ['id' => $this->session->userdata('role_id')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        if ($this->session->userdata['role_id'] == 1) {
            $data['role']   = $this->Model->getAllUserAkses();
        } else {
            $data['role']   = $this->Model->getUserAkses();
        }

        $data['tambah']     = $this->cek_akses_user['tambah'];
        $data['script']     = '#roleModal';
        $data['mobil']      = $this->Model->getMobilByTahun();

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/menu/menu_akses', $data);
            $this->load->view('user/template/v_footer');
            $this->load->view('user/template/jss');
        } else {
            cek_csrf();
            $datas = [
                'role'      => htmlspecialchars($this->input->post('role_user', true)),
            ];
            $this->Model->insertData('rc_user_role', $datas);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('menu/access-management'));
        }
    }

    public function roledelete($id)
    {
        $this->Model->delData("id", $id, "rc_user_role");
        $this->Model->delData("role_id", $id, "rc_user_akses");
        redirect(site_url('menu/access-management'));
    }

    public function role_akses_modal()
    {
        $data['id']     = $this->input->post('rowid');

        $data['start'] = $this->uri->segment(3);
        $data['list']   = $this->Model->listAksesMenu($data['id']);
        $this->load->view('modal/beri_akses_modal', $data);
    }
}
