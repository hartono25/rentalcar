<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_session_login();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function laporan_pdf()
    {

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            )
        );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
    }

    public function cetak_expired()
    {
        $data['title']      = 'Expired Info';
        $data['mobil']      = $this->Model->getMobilByTahun();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "stnk_expired.pdf";
        $this->pdf->load_view('printpdf/exp_pdf', $data);
    }

    public function cetak_customer()
    {
        $data['title']      = 'Customer';
        $data['mobil']      = $this->Model->getMobilByTahun();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "stnk_expired.pdf";
        $this->pdf->load_view('printpdf/cust_pdf', $data);
    }

    public function checklist()
    {
        $id = $this->uri->segment(3);
        $data['so'] = $this->Model->getSoById($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "checklist.pdf";
        $this->pdf->load_view('printpdf/checklist_pdf', $data);
    }

    public function form_order()
    {
        $id = $this->uri->segment(3);
        $data['so'] = $this->Model->getSoById($id);
        $overtime   = time() - strtotime($data['so']['tgl_end']);
        $jam        = floor($overtime / (60 * 60));
        $denda = $this->db->get_where('rc_denda', ['kode_so' => $data['so']['kode_so']])->row_array();
        if ($id) {
            if ($data['so']['denda_jam'] != 0) {
                // $kenadenda = $denda['denda_jam'];

                if ($jam > 24 && $data['so']['denda_hari'] != 0) {
                    $data['denda'] = $denda['denda_hari'];
                } elseif ($jam > 30 && $data['so']['denda_bulan'] != 0) {
                    $data['denda'] = $denda['denda_bulan'];
                } else {
                    $data['denda'] = $denda['denda_jam'];
                }
            } else {
                if ($data['so']['denda_hari'] != 0) {
                    if ($jam > 24 && $data['so']['denda_hari'] != 0) {
                        $data['denda'] = $denda['denda_hari'];
                    } elseif ($jam > 30 && $data['so']['denda_bulan'] != 0) {
                        $data['denda'] = $denda['denda_bulan'];
                    } else {
                        $data['denda'] = $denda['denda_hari'];
                    }
                } else {
                    if ($data['so']['denda_bulan'] != 0) {
                        if ($jam > 30 && $data['so']['denda_bulan'] != 0) {
                            $data['denda'] = $denda['denda_bulan'];
                        } else {
                            $data['denda'] = $denda['denda_hari'];
                        }
                    }
                }
            }
        } else {
            $data['denda'] = 0;
        }
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "form_order.pdf";
        $this->pdf->load_view('printpdf/form_order_pdf', $data);
    }

    public function perjanjian()
    {
        $id = $this->uri->segment(3);
        $data['so'] = $this->Model->getSoById($id);
        $data['tanggal']    = date('d', strtotime($data['so']['tgl_start']));
        $data['bulan']      = date('F', strtotime($data['so']['tgl_start']));
        $data['tahun']      = date('Y', strtotime($data['so']['tgl_start']));
        $data['hari']       = hari_indo(date('Y-m-d', strtotime($data['so']['tgl_start'])));
        $data['kodeurut']   = substr($data['so']['kode_so'], 3, 5);
        $data['waktu']      = date('H:i', strtotime($data['so']['tgl_start']));
        $bulan = date('m', strtotime($data['so']['tgl_start']));
        // $data['jmlhari']    = cal_days_in_month(CAL_GREGORIAN, $bulan, $data['tahun']);
        $bulanhari          = cal_days_in_month(CAL_GREGORIAN, $bulan, $data['tahun']);
        $selisih            = strtotime($data['so']['tgl_end']) - strtotime($data['so']['tgl_start']);
        $jmlhari            = floor($selisih / (60 * 60 * 24));
        $jmljam             = floor($selisih / (60 * 60));
        $jmlbulan           = floor($selisih / (60 * 60 * 24 * $bulanhari));
        $data['jmlhari']    = '';

        if ($jmlhari < 1) {
            $data['jmlhari'] = $jmljam . ' jam';
        } elseif ($jmlbulan < 1) {
            $data['jmlhari'] = $jmlhari . ' hari';
        } else {
            $data['jmlhari'] = $jmlbulan . ' bulan';
        }

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "perjanjian.pdf";
        $this->pdf->load_view('printpdf/perjanjian_pdf', $data);
    }

    public function kwitansi()
    {
        $id = $this->uri->segment(3);
        $data['so'] = $this->Model->getSoById($id);
        $overtime   = time() - strtotime($data['so']['tgl_end']);
        $jam        = floor($overtime / (60 * 60));
        $denda = $this->db->get_where('rc_denda', ['kode_so' => $data['so']['kode_so']])->row_array();
        if ($id) {
            if ($data['so']['denda_jam'] != 0) {
                // $kenadenda = $denda['denda_jam'];

                if ($jam > 24 && $data['so']['denda_hari'] != 0) {
                    $data['denda'] = $denda['denda_hari'];
                } elseif ($jam > 30 && $data['so']['denda_bulan'] != 0) {
                    $data['denda'] = $denda['denda_bulan'];
                } else {
                    $data['denda'] = $denda['denda_jam'];
                }
            } else {
                if ($data['so']['denda_hari'] != 0) {
                    if ($jam > 24 && $data['so']['denda_hari'] != 0) {
                        $data['denda'] = $denda['denda_hari'];
                    } elseif ($jam > 30 && $data['so']['denda_bulan'] != 0) {
                        $data['denda'] = $denda['denda_bulan'];
                    } else {
                        $data['denda'] = $denda['denda_hari'];
                    }
                } else {
                    if ($data['so']['denda_bulan'] != 0) {
                        if ($jam > 30 && $data['so']['denda_bulan'] != 0) {
                            $data['denda'] = $denda['denda_bulan'];
                        } else {
                            $data['denda'] = $denda['denda_hari'];
                        }
                    }
                }
            }
        } else {
            $data['denda'] = 0;
        }
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kwitansi.pdf";
        $this->pdf->load_view('printpdf/invoice_pdf', $data);
    }

    public function sales_order_by_month()
    {
        $data['start']  = strtotime($this->uri->segment(3));
        $data['end']    = strtotime($this->uri->segment(4));
        // $data['list']   = $this->Model->getSoByStatusTanggal('finish', $data['start'], $data['end']);
        $data['list']   = $this->Model->loop_report_so($data['start'], $data['end']);
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "report.pdf";
        $this->pdf->load_view('printpdf/sales_order_by_month', $data);
    }

    public function sales_order_by_mobil()
    {
        $data['start']  = strtotime($this->uri->segment(3));
        $data['end']    = strtotime($this->uri->segment(4));
        $data['user']       = $this->Model->getDataUser($this->session->userdata('username'));
        $data['list']   = $this->Model->loop_report_mobil($data['start'], $data['end']);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "report.pdf";
        $this->pdf->load_view('printpdf/sales_order_by_mobil', $data);
    }

    public function sales_order_by_customer()
    {
        $data['start']  = strtotime($this->uri->segment(3));
        $data['end']    = strtotime($this->uri->segment(4));
        $data['user']   = $this->Model->getDataUser($this->session->userdata('username'));
        $data['list']   = $this->Model->report_so_by_customer($data['start'], $data['end']);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "report.pdf";
        $this->pdf->load_view('printpdf/sales_order_by_customer', $data);
    }

    public function sales_order_by_count_mobil()
    {
        $data['start']  = strtotime($this->uri->segment(3));
        $data['end']    = strtotime($this->uri->segment(4));
        $data['id']     = $this->uri->segment(5);
        $data['user']   = $this->Model->getDataUser($this->session->userdata('username'));
        $data['list']   = $this->Model->getMobilById($data['id']);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "report.pdf";
        $this->pdf->load_view('printpdf/report_so_per_mobil', $data);
    }

    public function detail_kas()
    {
        $data['user']   = $this->Model->getDataUser($this->session->userdata('username'));
        $data['start']  = strtotime($this->input->post('tgl_pengeluaran'));
        $data['list']   = $this->Model->get_kas_by_tgl($data['start']);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "detail_kas.pdf";
        $this->pdf->load_view('printpdf/detail_kas', $data);
    }

    public function detail_kas_harian()
    {
        $data['start']  = strtotime($this->uri->segment(3));
        $data['end']    = strtotime($this->uri->segment(4));
        $data['user']   = $this->Model->getDataUser($this->session->userdata('username'));
        $data['list']   = $this->Model->get_kas_range_tgl($data['start'], $data['end']);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "report_detail_kas.pdf";
        $this->pdf->load_view('printpdf/detail_kas_harian', $data);
    }

    public function profit_and_loose()
    {
        $data['start']  = strtotime($this->uri->segment(3));
        $data['end']    = strtotime($this->uri->segment(4));
        $data['user']   = $this->Model->getDataUser($this->session->userdata('username'));
        $data['list']   = $this->Model->kas_range_tgl($data['start'], $data['end']);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "profit_and_loose.pdf";
        $this->pdf->load_view('printpdf/profit_and_loose', $data);
    }

    public function outstanding_invoice()
    {
        $data['user']   = $this->Model->getDataUser($this->session->userdata('username'));
        $data['list']   = $this->Model->get_outstanding_so();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "profit_and_loose.pdf";
        $this->pdf->load_view('printpdf/outstanding_invoice', $data);
    }
}
