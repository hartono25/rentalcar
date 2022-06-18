<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    private $cek_akses_user;
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        $this->cek_akses_user = cek_akses_user();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function sales_order()
    {
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->uri->segment(3) == 'tambah-so') {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $dateStart  = $this->input->post('tgl_start');
            $timeStart = $this->input->post('time_start');
            $dateFinish  = $this->input->post('tgl_finish');
            $timeFinish = $this->input->post('time_finish');
            // $dateStart  = date('Y-m-d H:i:s A', strtotime($this->input->post('tgl_start')));
            // $dateFinish = date('Y-m-d H:i:s A', strtotime($this->input->post('tgl_finish')));
            $starttanggal = $dateStart . ' ' . $timeStart;
            $finishtanggal  = $dateFinish . ' ' . $timeFinish;
            $tanggalStart = date('Y-m-d H:i:s', strtotime($starttanggal));
            $tanggalFinish = date('Y-m-d H:i:s', strtotime($finishtanggal));

            $data_array = [
                'kode_so'           => kode_so(),
                // 'tgl_start'         => strtotime($this->input->post('tgl_start')),
                'tgl_start'         => $tanggalStart,
                // 'tgl_end'           => strtotime($this->input->post('tgl_finish')),
                'tgl_end'           => $tanggalFinish,
                'kode_customer'     => strtoupper($this->input->post('so_customer')),
                'alamat_jemput'     => strtoupper($this->input->post('alamat_jemput')),
                'alamat_finish'     => strtoupper($this->input->post('alamat_finish')),
                'tipe_order'        => $this->input->post('t_order'),
                'tipe_sewa'         => $this->input->post('t_sewa'),
                'payment'           => $this->input->post('t_payment'),
                'harga_sewa'        => $this->input->post('harga'),
                'kode_driver'       => strtoupper($this->input->post('so_driver')),
                'kode_mobil'        => strtoupper($this->input->post('so_mobil')),
                'pembayaran_dp'     => $this->input->post('pembayaran_dp'),
                'pembayaran_kasbon' => $this->input->post('pembayaran_kasbon'),
                'keterangan'        => strtoupper($this->input->post('keterangan')),
                'denda_jam'         => $this->input->post('denda_perjam'),
                'denda_hari'        => $this->input->post('denda_perhari'),
                'denda_bulan'       => $this->input->post('denda_perbulan'),
                'tagihan_for'       => $this->input->post('tagihan'),
                'user_by'           => strtoupper($data['user']['nama']),
            ];
            $this->Model->insertData('rc_so', $data_array);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('transaksi/sales-order'));
        } elseif ($this->uri->segment(3) == 'update-so') {
            if ($this->cek_akses_user['edit'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $dateStart  = $this->input->post('tgl_start');
            $timeStart = $this->input->post('time_start');
            $dateFinish  = $this->input->post('tgl_finish');
            $timeFinish = $this->input->post('time_finish');
            // $dateStart  = date('Y-m-d H:i:s A', strtotime($this->input->post('tgl_start')));
            // $dateFinish = date('Y-m-d H:i:s A', strtotime($this->input->post('tgl_finish')));
            $starttanggal = $dateStart . ' ' . $timeStart;
            $finishtanggal  = $dateFinish . ' ' . $timeFinish;
            $tanggalStart = date('Y-m-d H:i:s', strtotime($starttanggal));
            $tanggalFinish = date('Y-m-d H:i:s', strtotime($finishtanggal));
            $kode = $this->input->post('kode');

            $data_array = [
                'tgl_start'         => $tanggalStart,
                'tgl_end'           => $tanggalFinish,
                'kode_customer'     => strtoupper($this->input->post('so_customer')),
                'alamat_jemput'     => strtoupper($this->input->post('alamat_jemput')),
                'alamat_finish'     => strtoupper($this->input->post('alamat_finish')),
                'tipe_order'        => $this->input->post('t_order'),
                'tipe_sewa'         => $this->input->post('t_sewa'),
                'payment'           => $this->input->post('t_payment'),
                'harga_sewa'        => $this->input->post('harga'),
                'kode_driver'       => strtoupper($this->input->post('so_driver')),
                'kode_mobil'        => strtoupper($this->input->post('so_mobil')),
                'pembayaran_dp'     => $this->input->post('pembayaran_dp'),
                'pembayaran_kasbon' => $this->input->post('pembayaran_kasbon'),
                'keterangan'        => strtoupper($this->input->post('keterangan')),
                'denda_jam'         => $this->input->post('denda_perjam'),
                'denda_hari'        => $this->input->post('denda_perhari'),
                'denda_bulan'       => $this->input->post('denda_perbulan'),
                'tagihan_for'       => $this->input->post('tagihan'),
                'user_by'           => strtoupper($data['user']['nama']),
            ];
            $this->Model->updateData($kode, 'kode_so', 'rc_so', $data_array);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('transaksi/sales-order'));
        } elseif ($this->uri->segment(3) == 'void-so') {
            if ($this->cek_akses_user['hapus'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $id = $this->input->post('id');
            $data = $this->Model->getSoById($id);
            if ($data) {
                $data_array = [
                    'keterangan'    => ucfirst($this->input->post('keterangan')),
                    'status_order'  => 'void'
                ];
                $this->Model->updateData($id, 'so_id', 'rc_so', $data_array);
                redirect(site_url('transaksi/sales-order'));
            } else {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
        } else {
            $data['title']      = 'Sales Order';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            // $data['tipeorder']  = $this->Model->getAllTipeOrder();
            // $data['tipesewa']   = $this->Model->getAllTipeSewa();
            $data['so']         = $this->Model->getAllSo();


            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/sales_order/list_so', $data);
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function payment()
    {
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        if ($this->uri->segment(3) == 'input') {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $nilai_bayar    = $this->input->post('nilai_bayar');
            $total          = $this->input->post('total');
            $array = [
                'kode_so'       => $this->input->post('no_so'),
                'kode_customer' => $this->input->post('so_customer'),
                'no_polisi'     => $this->input->post('no_polisi'),
                'nilai_sewa'    => $this->input->post('nilai_sewa'),
                'nilai_dp'      => $this->input->post('nilai_dp'),
                'overtime'      => $this->input->post('over_time'),
                'total'         => $total,
                'nilai_bayar'   => $nilai_bayar,
                'tgl_bayar'     => date('Y-m-d H:i:s', strtotime($this->input->post('tgl_bayar'))),
            ];
            if ($nilai_bayar < $total) {
                $this->session->set_flashdata('message', 'Pembayaran');
            } elseif ($nilai_bayar > $total) {
                $this->session->set_flashdata('message', 'Pembayaran');
            } elseif ($nilai_bayar == $total) {
                $this->Model->insertData('rc_pembayaran', $array);
                $update = [
                    'status_order'  => 'finish'
                ];
                $this->Model->updateData($this->input->post('no_so'), 'kode_so', 'rc_so', $update);
                $this->session->set_flashdata('message', 'Success');
            }
            redirect(site_url('transaksi/payment'));
        } elseif ($this->uri->segment(3) == 'update-so') {
            if ($this->cek_akses_user['edit'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $dateStart  = $this->input->post('tgl_start');
            $timeStart = $this->input->post('time_start');
            $dateFinish  = $this->input->post('tgl_finish');
            $timeFinish = $this->input->post('time_finish');
            // $dateStart  = date('Y-m-d H:i:s A', strtotime($this->input->post('tgl_start')));
            // $dateFinish = date('Y-m-d H:i:s A', strtotime($this->input->post('tgl_finish')));
            $starttanggal = $dateStart . ' ' . $timeStart;
            $finishtanggal  = $dateFinish . ' ' . $timeFinish;
            $tanggalStart = date('Y-m-d H:i:s', strtotime($starttanggal));
            $tanggalFinish = date('Y-m-d H:i:s', strtotime($finishtanggal));
            $kode = $this->input->post('kode');

            $data_array = [
                'tgl_start'         => $tanggalStart,
                'tgl_end'           => $tanggalFinish,
                'kode_customer'     => strtoupper($this->input->post('so_customer')),
                'alamat_jemput'     => strtoupper($this->input->post('alamat_jemput')),
                'alamat_finish'     => strtoupper($this->input->post('alamat_finish')),
                'tipe_order'        => $this->input->post('t_order'),
                'tipe_sewa'         => $this->input->post('t_sewa'),
                'payment'           => $this->input->post('t_payment'),
                'harga_sewa'        => $this->input->post('harga'),
                'kode_driver'       => strtoupper($this->input->post('so_driver')),
                'kode_mobil'        => strtoupper($this->input->post('so_mobil')),
                'pembayaran_dp'     => $this->input->post('pembayaran_dp'),
                'pembayaran_kasbon' => $this->input->post('pembayaran_kasbon'),
                'keterangan'        => strtoupper($this->input->post('keterangan')),
                'denda_jam'         => $this->input->post('denda_perjam'),
                'denda_hari'        => $this->input->post('denda_perhari'),
                'denda_bulan'       => $this->input->post('denda_perbulan'),
                'tagihan_for'       => $this->input->post('tagihan'),
                'user_by'           => strtoupper($data['user']['nama']),
            ];
            $this->Model->updateData($kode, 'kode_so', 'rc_so', $data_array);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('transaksi/sales-order'));
        } elseif ($this->uri->segment(3) == 'void-so') {
            if ($this->cek_akses_user['hapus'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $id = $this->input->post('id');
            $data = $this->Model->getSoById($id);
            if ($data) {
                $data_array = [
                    'keterangan'    => ucfirst($this->input->post('keterangan')),
                    'status_order'  => 'void'
                ];
                $this->Model->updateData($id, 'so_id', 'rc_so', $data_array);
                redirect(site_url('transaksi/sales-order'));
            } else {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
        } else {
            $data['title']      = 'Sales Order';
            // echo 'Selamat Datang ' . $data['user']['nama'];
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            $data['so']         = $this->Model->getAllSo();


            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/pembayaran/index', $data);
            $this->load->view('user/template/v_footer', $data);
        }
    }

    public function pengeluaran()
    {
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));

        if ($this->uri->segment(3) == 'input') {
            if ($this->cek_akses_user['tambah'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $data = [
                'kode_kas'      => kode_kas(),
                'jenis'         => ucwords($this->input->post('account')),
                'debet'         => $this->input->post('debet'),
                'kredit'        => $this->input->post('kredit'),
                'memo'          => $this->input->post('memo'),
                'keterangan'    => $this->input->post('keterangan'),
                'p_tanggal'     => date('Y-m-d', strtotime($this->input->post('tgl'))),
                'closing'       => 'unclose',
                'user_by'       => $data['user']['nama'],
            ];

            $this->Model->insertData('rc_pengeluaran', $data);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('transaksi/pengeluaran'));
        } elseif ($this->uri->segment(3) == 'update') {
            if ($this->cek_akses_user['edit'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            cek_csrf();
            $data = [
                'jenis'         => ucwords($this->input->post('account')),
                'debet'         => $this->input->post('debet'),
                'kredit'        => $this->input->post('kredit'),
                'memo'          => $this->input->post('memo'),
                'keterangan'    => $this->input->post('keterangan'),
                'p_tanggal'     => date('Y-m-d', strtotime($this->input->post('tgl'))),
                'closing'       => 'unclose',
                'user_by'       => $data['user']['nama'],
            ];
            $id = $this->input->post('id');
            $this->Model->updateData($id, 'pengeluaran_id', 'rc_pengeluaran', $data);
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('transaksi/pengeluaran'));
        } elseif ($this->uri->segment(3) == 'hapus') {
            if ($this->cek_akses_user['hapus'] != '1') {
                $this->output->set_status_header(401);
                show_error('Server Unauthorized! Access Denied');
            }
            $id = $this->uri->segment(4);
            $this->Model->delData('pengeluaran_id', $id, 'rc_pengeluaran');
            $this->session->set_flashdata('message', 'Success');
            redirect(site_url('transaksi/pengeluaran'));
        } else {
            $data['title']      = 'Pengeluaran';
            $data['menu']       = $this->Model->main_menu();
            $data['submenu']    = $this->Model->submenu();
            $data['tambah']     = $this->cek_akses_user['tambah'];
            $data['mobil']      = $this->Model->getMobilByTahun();
            $data['so']         = $this->Model->getAllSo();
            $data['list']       = $this->Model->getAllKas();

            $this->load->view('user/template/v_header', $data);
            $this->load->view('user/template/v_sidebar', $data);
            $this->load->view('user/pengeluaran/index', $data);
            $this->load->view('user/template/v_footer', $data);
        }
    }
}
