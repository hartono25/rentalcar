<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $cek_akses_user;
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title']      = 'Home';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        $data['mobil']      = $this->Model->getMobilByTahun();
        $data['so']         = $this->Model->getAllSo();


        // var_dump($this->Model->tes());
        // die;
        $this->load->view('user/template/v_header', $data);
        $this->load->view('user/template/v_sidebar', $data);
        $this->load->view('user/home/v_home', $data);
        $this->load->view('user/template/v_footer');
    }

    public function profil()
    {
        $data['title']      = 'Home';
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        // echo 'Selamat Datang ' . $data['user']['nama'];
        $data['menu']       = $this->Model->main_menu();
        $data['submenu']    = $this->Model->submenu();
        $data['mobil']      = $this->Model->getMobilByTahun();

        // var_dump($this->Model->tes());
        // die;
        $this->load->view('user/template/v_header', $data);
        $this->load->view('user/template/v_sidebar', $data);
        $this->load->view('user/home/v_profil', $data);
        $this->load->view('user/template/v_footer');
    }

    public function driver_document_modal()
    {
        $this->load->view('modal/driver_document');
    }

    public function user_info_modal()
    {
        $data['id']     = $this->input->post('rowid');
        $data['user']   = $this->Model->getUserById($data['id']);
        $this->load->view('modal/user_info_modal', $data);
    }

    public function mobil_info_modal()
    {
        $data['id']     = $this->input->post('rowid');
        $data['edit']   = $this->Model->getMobilById($data['id']);
        $this->load->view('modal/info_mobil', $data);
    }

    public function merk_info_modal()
    {
        $data['id']     = $this->input->post('rowid');
        $data['edit']   = $this->Model->getMerkById($data['id']);
        $this->load->view('modal/info_merk_modal', $data);
    }

    public function driver_info_modal()
    {
        $data['id']     = $this->input->post('rowid');
        $data['edit']   = $this->Model->getDriverById($data['id']);
        $this->load->view('modal/driver_info_modal', $data);
    }

    public function cust_info_modal()
    {
        $data['id']     = $this->input->post('rowid');
        $data['edit']   = $this->Model->getCustomerById($data['id']);
        $this->load->view('modal/cust_info_modal', $data);
    }

    public function add_cust_modal()
    {
        $data['page']   = $this->input->post('rowid');
        $this->load->view('modal/add_customer_modal', $data);
    }

    public function edit_tipe_modal()
    {
        $data['title']      = 'Edit Tipe Order';
        $data['id']         = $this->input->post('rowid');
        $data['edit']       = $this->Model->getTipOrderById($data['id']);
        $this->load->view('modal/edit_tipe_modal', $data);
    }

    public function edit_tipe_sewa_modal()
    {
        $data['title']      = 'Edit Tipe Sewa';
        $data['id']         = $this->input->post('rowid');
        $data['edit']       = $this->Model->getTipeSewaById($data['id']);
        $this->load->view('modal/edit_tipesewa_modal', $data);
    }

    public function customer()
    {
        $data['customer'] = $this->Model->getAllCustomer();
        $data['title'] = 'Customer';
        // $this->load->view('auth/auth_header', $data);
        // $this->load->view('user/sales_order/find_cust', $data);
        // $this->load->view('auth/auth_footer');
        $this->load->view('modal/customer_modal', $data);
    }

    public function find_customer()
    {
        $data['id'] = $this->input->post('rowid');
        $data['customer'] = $this->Model->getCustomerById($data['id']);
        echo json_encode($data['customer']);
    }

    public function driver()
    {
        $data['driver'] = $this->Model->getAllDriver();
        $data['title']  = 'Driver';
        // $this->load->view('auth/auth_header', $data);
        // $this->load->view('user/sales_order/find_driver', $data);
        // $this->load->view('auth/auth_footer');
        $this->load->view('modal/driver_modal', $data);
    }

    public function find_driver()
    {
        $data['id'] = $this->input->post('rowid');
        $data['driver'] = $this->Model->getDriverById($data['id']);
        echo json_encode($data['driver']);
    }

    public function mobil()
    {
        $data['mobil'] = $this->Model->getAllMobil();
        $data['title']  = 'Driver';
        // $this->load->view('auth/auth_header', $data);
        // $this->load->view('user/sales_order/find_mobil', $data);
        // $this->load->view('auth/auth_footer');
        $this->load->view('modal/mobil_modal', $data);
    }

    public function find_mobil()
    {
        $data['id'] = $this->input->post('rowid');
        $data['mobil'] = $this->Model->getMobilById($data['id']);
        echo json_encode($data['mobil']);
    }

    public function data_load_so()
    {
        $select         = $this->input->post('select');
        $start          = strtotime($this->input->post('start'));
        $finish         = strtotime($this->input->post('finish'));
        $data['list']   = $this->Model->getSoByStatusTanggal($select, $start, $finish);
        foreach ($data['list'] as $so) {
            $array[] = [
                'so_id'         => $so['so_id'],
                'kode_so'       => $so['kode_so'],
                'nama_customer' => $so['nama_customer'],
                'nama_mobil'    => $so['nama_mobil'],
                'no_polisi'     => $so['no_polisi'],
                'no_mesin'      => $so['no_mesin'],
                'nama_driver'   => $so['nama_driver'],
                'tgl_start'     => date('d/m/Y h:i:s A', strtotime($so['tgl_start'])),
                'status_order'  => $so['status_order'],
            ];
        }
        echo json_encode($array);
    }

    public function findSO()
    {
        $cust           = $this->input->post('cust');
        $data['list']   = $this->Model->getSoCustmer($cust);
        $this->load->view('modal/so_payment_modal', $data);
    }

    public function find_so_id()
    {
        $data['id']     = $this->input->post('rowid');
        $data['so']     = $this->Model->getFindSoById($data['id']);
        foreach ($data['so'] as $so) {
            $overtime   = time() - strtotime($so['tgl_end']);
            $jam        = floor($overtime / (60 * 60));
            $denda = $this->db->get_where('rc_denda', ['kode_so' => $so['kode_so']])->row_array();
            if ($so['denda_jam'] != 0) {
                // $kenadenda = $denda['denda_jam'];

                if ($jam > 24 && $so['denda_hari'] != 0) {
                    $kenadenda = $denda['denda_hari'];
                } elseif ($jam > 30 && $so['denda_bulan'] != 0) {
                    $kenadenda = $denda['denda_bulan'];
                } else {
                    $kenadenda = $denda['denda_jam'];
                }
            } else {
                if ($so['denda_hari'] != 0) {
                    if ($jam > 24 && $so['denda_hari'] != 0) {
                        $kenadenda = $denda['denda_hari'];
                    } elseif ($jam > 30 && $so['denda_bulan'] != 0) {
                        $kenadenda = $denda['denda_bulan'];
                    } else {
                        $kenadenda = $denda['denda_hari'];
                    }
                } else {
                    if ($so['denda_bulan'] != 0) {
                        if ($jam > 30 && $so['denda_bulan'] != 0) {
                            $kenadenda = $denda['denda_bulan'];
                        } else {
                            $kenadenda = $denda['denda_hari'];
                        }
                    }
                }
            }
            $terbayar = 0;
            $total = ($so['harga_sewa'] - $so['pembayaran_dp']) + ($kenadenda - $terbayar);
            $array[] = [
                'kode_so'       => $so['kode_so'],
                'tgl_start'     => date('d/m/Y h:i:s A', strtotime($so['tgl_start'])),
                'tgl_end'       => date('d/m/Y h:i:s A', strtotime($so['tgl_end'])),
                'no_polisi'     => $so['no_polisi'],
                'nama_mobil'    => $so['nama_mobil'],
                'harga_sewa'    => $so['harga_sewa'],
                'pembayaran_dp' => $so['pembayaran_dp'],
                'overtime'      => $kenadenda,
                'terbayar'      => $terbayar,
                'total'         => $total,
            ];
        }
        echo json_encode($array);
    }

    public function edit_so_modal()
    {
        $data['title']      = 'Edit Sales Order';
        $data['id']         = $this->input->post('rowid');
        $data['edit']       = $this->Model->getSoById($data['id']);
        $data['tipeorder']  = $this->Model->getAllTipeOrder();
        $data['tipesewa']   = $this->Model->getAllTipeSewa();
        $this->load->view('modal/so_edit_modal', $data);
    }

    public function add_so_modal()
    {
        $data['tipeorder']  = $this->Model->getAllTipeOrder();
        $data['tipesewa']   = $this->Model->getAllTipeSewa();
        $this->load->view('modal/so_add_modal', $data);
    }

    public function void_so_modal()
    {
        $data['id']         = $this->input->post('rowid');
        $this->load->view('modal/so_void_modal', $data);
    }

    public function payment_modal()
    {
        $this->load->view('modal/add_payment_modal');
    }

    public function load_dokumen()
    {
        $data['id']         = $this->input->post('rowid');
        $data['jenis']      = $this->input->post('jenis');
        $data['keterangan'] = $this->input->post('keterangan');
        $dok        = $this->db->get_where('rc_dokumen', [
            'kode_foreign' => $data['id'],
            'jenis' => $data['jenis'],
            'keterangan' => $data['keterangan']
        ])->row_array();
        $data['gambar']     = ($dok['dokumen'] == null) ? base_url('template/img/document/photo.png') : base_url('template/img/document/' . $data['keterangan'] . '/' . $dok['dokumen']);
        $this->load->view('modal/driver_document', $data);
    }

    public function home_menu_modal()
    {
        $data['id']         = $this->input->post('rowid');
        $data['menu']       = $this->input->post('menu');
        if ($data['menu'] == 'sales-order') {
            $data['tipeorder']  = $this->Model->getAllTipeOrder();
            $data['tipesewa']   = $this->Model->getAllTipeSewa();
            $this->load->view('modal/so_add_modal', $data);
        } elseif ($data['menu'] == 'payment') {
            $this->load->view('modal/add_payment_modal');
        } elseif ($data['menu'] == 'pengeluaran') {
            $this->load->view('modal/form_pengeluaran_modal');
        } elseif ($data['menu'] == 'order-report') {
            $this->load->view('modal/home_report_modal');
        }
    }

    public function simpan_customer()
    {
        $this->cek_akses_user = cek_akses_user();
        if ($this->cek_akses_user['tambah'] != '1') {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }
        cek_csrf();
        $kode = kode('rc_customer', 'customer_id', htmlspecialchars(strtoupper($this->input->post('nama_cust'))), 'kode_customer');
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
        redirect(site_url('transaksi/sales_order'));
    }

    public function report_so_by_mobil()
    {
        $data['list']   = $this->Model->getAllSo();
        $this->load->view('modal/report_so_by_mobil', $data);
    }

    public function data_load_kas()
    {
        $start          = strtotime($this->input->post('start'));
        $data['list']   = $this->Model->get_kas_by_tgl($start);
        foreach ($data['list'] as $so) {
            $array[] = [
                'tanggal'       => date('d/m/Y', strtotime($so['p_tanggal'])),
                'voucher'       => $so['kode_kas'],
                'debet'         => rupiah($so['debet']),
                'kredit'        => rupiah($so['kredit']),
                'jenis'         => $so['jenis'],
                'status'        => $so['closing'],
                'kas_id'        => $so['pengeluaran_id'],
                'href'          => ($so['closing'] == 'close') ? '#' : base_url('transaksi/pengeluaran/hapus/' . $so['pengeluaran_id']),
                'modal'         => ($so['closing'] == 'close') ? '' : 'modal'
            ];
        }
        echo json_encode($array);
    }

    public function closing_kas()
    {
        $start          = strtotime($this->input->post('start'));
        $list           = $this->Model->get_kas_by_tgl($start);
        foreach ($list as $so) {
            if ($so['closing'] == 'close') {
                $this->Model->updateData(date('Y-m-d', $start), 'p_tanggal', 'rc_pengeluaran', ['closing' => 'unclose']);
            } else {
                $this->Model->updateData(date('Y-m-d', $start), 'p_tanggal', 'rc_pengeluaran', ['closing' => 'close']);
            }
        }
        $this->data_load_kas();
    }

    public function load_edit_kas()
    {
        $data['id']         = $this->input->post('rowid');
        $data['kas']        = $this->Model->load_kas_by_id($data['id']);
        $this->load->view('modal/edit_kas_modal', $data);
    }
}
