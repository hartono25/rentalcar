<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        # code...
        // redirect(site_url('login'));
        session_login_aktif();
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/v_login');
            $this->load->view('auth/auth_footer');
        } else {
            cek_csrf();
            $this->_login();
        }
    }

    private function _login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $user       = $this->Model->cekUsername($username);

        // cek user
        if ($user) {
            // jika user active
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username'  => $user['username'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->berhasil_login = true;
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', 'Login');
                    redirect(site_url('home'));
                } else {
                    $this->session->set_flashdata('message', 'Wrong Password!');
                    redirect(site_url('login'));
                }
            } else {
                $this->session->set_flashdata('message', 'Not Active!');
                redirect(site_url('login'));
            }
        } else {
            $this->session->set_flashdata('message', 'Oops!');
            redirect(site_url('login'));
        }
    }

    public function registration()
    {
        # code...
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[rc_user.username]', [
            'is_unique'     => 'This username has already registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[rc_user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches'       => 'Password dont match!',
            'min_length'    => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'Registration';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/v_register');
            $this->load->view('auth/auth_footer');
        } else {
            cek_csrf();
            $data = [
                'nama'          =>  htmlspecialchars($this->input->post('nama', true)),
                'username'      =>  htmlspecialchars($this->input->post('username', true)),
                'email'         =>  htmlspecialchars($this->input->post('email', true)),
                'password'      =>  password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'       =>  1,
                'is_active'     =>  1,
                'date_created'  =>  time()
            ];
            $this->Model->insertData('rc_user', $data);
            $this->session->set_flashdata('message', 'Congratulation!');
            redirect(site_url('login'));
        }
    }

    public function logout()
    {
        $this->session->berhasil_login = false;
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', 'Logout!');
        redirect(site_url('login'));
    }
}
