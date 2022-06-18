<?php

if (!function_exists('cek_session_login')) {
    function cek_session_login()
    {
        $ci = get_instance();
        if (!$ci->session->berhasil_login) {
            redirect(site_url('login'));
        }
    }
}

if (!function_exists('session_login_aktif')) {
    function session_login_aktif()
    {
        $ci = get_instance();
        if (!$ci->session->berhasil_login) {
            redirect(site_url('login'));
        } else {
            redirect(site_url('home'));
        }
    }
}

if (!function_exists('cek_akses_user')) {
    function cek_akses_user()
    {
        $ci = get_instance();

        $cek = $ci->db->select('*')
            ->from('rc_user_akses a')
            ->join('rc_user_menu m', 'm.menu_id = a.menu_id', 'left')
            ->where([
                'a.role_id' => $ci->session->userdata('role_id'),
                'a.akses'   => '1',
                'm.url'     => $ci->uri->segment(1, 0) . $ci->uri->slash_segment(2, 'leading')
            ])
            ->get()->row_array();

        if (!$cek) {
            $ci->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
            //return false;
        } else {
            return $cek;
        }
    }
}

if (!function_exists('get_csrf_token')) {
    function get_csrf_token()
    {
        $ci = get_instance();
        if (!$ci->session->csrf_token) {
            $ci->session->csrf_token = hash('sha1', time());
        }
        return $ci->session->csrf_token;
    }
}

if (!function_exists('get_csrf_name')) {
    function get_csrf_name()
    {
        return "token";
    }
}

if (!function_exists('cek_csrf')) {
    function cek_csrf()
    {
        $ci = get_instance();
        if ($ci->input->post('token') != $ci->session->csrf_token) {
            $ci->session->unset_userdata('csrf_token');
            $ci->output->set_status_header(403);
            show_error('The action you have requested is not allowed!');
            return false;
        }
    }
}

if (!function_exists('csrf')) {
    function csrf()
    {
        return "<input type='hidden' name='" . get_csrf_name() . "' value='" . get_csrf_token() . "' />";
    }
}

function tcollapse($data)
{
    $ci = get_instance();
    $sub_menu = $ci->db->select('m.*, a.akses, a.tambah, a.edit, a.hapus')
        ->from('rc_user_menu m')
        ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
        ->where([
            'a.role_id' => $ci->session->role_id,
            'm.is_active' => '1',
            'm.level_menu' => 'sub',
            'm.main_menu' => $data
        ])
        ->order_by('m.no_urut', 'ASC')
        ->get()->row_array();
    if ($sub_menu) {
        return "collapse";
    } else {
        return "";
    }
}

function tshow($data)
{
    $ci = get_instance();
    $sub_menu = $ci->db->select('m.*, a.akses, a.tambah, a.edit, a.hapus')
        ->from('rc_user_menu m')
        ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
        ->where([
            'a.role_id'     => $ci->session->role_id,
            'm.is_active'   => '1',
            'm.url'         => $ci->uri->segment(1, 0) . $ci->uri->slash_segment(2, 'leading'),
            'm.main_menu'   => $data,
        ])
        ->order_by('m.no_urut', 'ASC')
        ->get()->row_array();
    if ($sub_menu) {
        return "show";
    } else {
        return "";
    }
}

function inputToggle($no, $aktif, $tipe)
{
    return '<div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="' . $tipe . $no . '" ' . (($aktif == '1') ? "checked" : "") . ' name="' . $tipe . $no . '" >
                        <label class="custom-control-label" for="' . $tipe . $no . '"></label>
                    </div>';
}

function kode($tabel, $primary, $data)
{
    $ci = get_instance();
    $string = substr($data, 0, 1);
    $query = $ci->db->select('MAX(' . $primary . ') as kode, ' . $primary)
        ->from($tabel)
        ->like($primary, $string)
        ->order_by($primary, 'DESC')
        ->get()->row_array();
    $kodejadi = '';
    $no = 0;
    if ($query['kode'] == null) {
        $kodejadi = $string . '1';
    } else {
        $kode = substr($query[$primary], 1);
        $no = intval($kode) + 1;
        $kodejadi = $string . $no;
    }
    return $kodejadi;
}

function kode_so()
{
    $ci     = get_instance();
    $bulan  = date('m');
    $tahun  = date('Y');
    $data   = $ci->db->select('MAX(kode_so) AS kode')
        ->from('rc_so')
        ->get()->row_array();

    $kode   = substr($data['kode'], 3, 5);
    $jum    = $kode + 1;

    if ($jum < 10) {
        $kodeso = 'SO/0000' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 10 && $jum < 100) {
        $kodeso = 'SO/000' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 100 && $jum < 1000) {
        $kodeso = 'SO/00' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 1000 && $jum < 10000) {
        $kodeso = 'SO/0' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 10000 && $jum < 100000) {
        $kodeso = 'SO/' . $jum . '/' . $bulan . $tahun;
    }

    return $kodeso;
}

function expired($awal)
{
    $awal = strtotime($awal);
    $finish = time();
    $selisih = $awal - $finish;
    return floor($selisih / (60 * 60 * 24));
}

function denda($id)
{
    $ci = get_instance();
    $sales = $ci->Model->getFindSoById($id);
    foreach ($sales as $so) {
        $overtime   = time() - strtotime($so['tgl_end']);
        $jam        = floor($overtime / (60 * 60));
        $hari       = floor($overtime / (60 * 60 * 24));
        $denda      = $ci->db->get_where('rc_denda', ['kode_so' => $so['kode_so']])->row_array();
        $haribulan  = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($so['tgl_end'])), date('Y', strtotime($so['tgl_end'])));
        if ($so['denda_jam'] != 0) {
            if ($jam > 24 && $so['denda_hari'] != 0) {
                $kenadenda = $denda['denda_hari'];
            } elseif ($hari > $haribulan && $so['denda_bulan'] != 0) {
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
    }

    return $kenadenda;
}

function kode_kas()
{
    $ci     = get_instance();
    $bulan  = date('m');
    $tahun  = date('Y');
    $data   = $ci->db->select('MAX(kode_kas) AS kode')
        ->from('rc_pengeluaran')
        ->get()->row_array();

    $kode   = substr($data['kode'], 4, 5);
    $jum    = $kode + 1;

    if ($jum < 10) {
        $kodeso = 'KAS/0000' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 10 && $jum < 100) {
        $kodeso = 'KAS/000' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 100 && $jum < 1000) {
        $kodeso = 'KAS/00' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 1000 && $jum < 10000) {
        $kodeso = 'KAS/0' . $jum . '/' . $bulan . $tahun;
    } elseif ($jum >= 10000 && $jum < 100000) {
        $kodeso = 'KAS/' . $jum . '/' . $bulan . $tahun;
    }

    return $kodeso;
}
