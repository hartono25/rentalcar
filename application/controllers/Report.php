<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    private $cek_akses_user;
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        $this->cek_akses_user = cek_akses_user();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function report_order()
    {
        if ($_POST) {
            $filter = $this->input->post('filter_by');
            $start  = $this->input->post('tgl_start');
            $end    = $this->input->post('tgl_finish');
            if ($filter == 'all') {
                redirect(site_url('cetak/sales-order-by-month/' . $start . '/' . $end));
            } elseif ($filter == 'mobil') {
                redirect(site_url('cetak/sales_order_by_mobil/' . $start . '/' . $end));
            } elseif ($filter == 'customer') {
                redirect(site_url('cetak/sales_order_by_customer/' . $start . '/' . $end));
            } elseif ($filter == 'count') {
                // redirect(site_url('cetak/sales_order_by_count_mobil/' . $start . '/' . $end));
                $data['title']      = 'Report Sales Order';
                $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
                // echo 'Selamat Datang ' . $data['user']['nama'];
                $data['menu']       = $this->Model->main_menu();
                $data['submenu']    = $this->Model->submenu();
                $data['tambah']     = $this->cek_akses_user['tambah'];
                $data['edit']       = $this->cek_akses_user['edit'];
                $data['hapus']      = $this->cek_akses_user['hapus'];
                $data['mobil']      = $this->Model->getMobilByTahun();
                $data['start']      = $start;
                $data['end']        = $end;
                $data['list']   = $this->Model->report_count_mobil_so(strtotime($start), strtotime($end));
                // $data['list']   = $this->Model->loop_report_mobil(strtotime($start), strtotime($end));
                $this->load->view('user/template/v_header', $data);
                $this->load->view('user/template/v_sidebar', $data);
                $this->load->view('user/report/r_sales_order', $data);
                $this->load->view('user/template/v_footer', $data);
            } elseif ($filter == 'kas') {
                redirect(site_url('cetak/detail_kas_harian/' . $start . '/' . $end));
            } elseif ($filter == 'profit') {
                redirect(site_url('cetak/profit_and_loose/' . $start . '/' . $end));
            }
        } else {
            $data['title']      = 'Report Sales Order';
            $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['edit']       = $this->cek_akses_user['edit'];
            $data['hapus']      = $this->cek_akses_user['hapus'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            $data['list']       = '';

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/report/r_sales_order', $data);
            $this->load->view('user/template/v_footer', $data);
        }
    }
}
