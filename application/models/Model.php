<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
    public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function updateData($id, $primary, $database, $data)
    {
        $this->db->where($primary, $id);
        $this->db->update($database, $data);
    }

    function delData($primary, $id, $table)
    {
        $this->db->where($primary, $id);
        $this->db->delete($table);
    }

    public function cekUsername($username)
    {
        return $this->db->get_where('rc_user', ['username' => $username])->row_array();
    }

    public function getDataUser($username)
    {
        return $this->db->get_where('rc_user', ['username' => $username])->row_array();
    }

    public function getUserById($id)
    {
        // return $this->db->get_where('rc_user', ['id' => $id])->row_array();
        $data = $this->db->select('u.*,r.*, u.id as kode')
            ->from('rc_user u')
            ->join('rc_user_role r', 'r.id = u.role_id', 'left')
            ->where('u.id', $id)
            ->get()->row_array();
        return $data;
    }

    public function main_menu()
    {
        $main_menu = $this->db->select('m.*, a.akses, a.tambah, a.edit, a.hapus')
            ->from('rc_user_menu m')
            ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
            ->where([
                'a.role_id'     => $this->session->role_id,
                'a.akses'       => '1',
                'm.is_active'   => '1',
                'm.level_menu'  => 'main'
            ])
            ->order_by('m.no_urut', 'ASC')
            ->get()->result_array();

        return $main_menu;
    }

    public function submenu()
    {
        $sub_menu = $this->db->select('m.*, a.akses, a.tambah, a.edit, a.hapus')
            ->from('rc_user_menu m')
            ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
            ->where([
                'a.role_id'     => $this->session->role_id,
                'a.akses'       => '1',
                'm.is_active'   => '1',
                'm.level_menu'  => 'sub'
            ])
            ->order_by('m.no_urut', 'ASC')
            ->get()->result_array();

        return $sub_menu;
    }

    public function getMeduById($id)
    {
        $data = $this->db->get_where('rc_user_menu', ['menu_id' => $id])->row_array();
        return $data;
    }

    public function getAllMenu()
    {
        $data = $this->db->select('*')
            ->from('rc_user_menu')
            ->order_by('no_urut', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getUserRole()
    {
        if ($this->session->role_id == 1) {
            $data = $this->db->select('*')
                ->from('rc_user_role u')
                ->order_by('u.id', 'ASC')
                ->get()->result_array();
        } else {
            $data = $this->db->select('*')
                ->from('rc_user_role u')
                ->where('u.id !=', '1')
                ->order_by('u.id', 'ASC')
                ->get()->result_array();
        }
        return $data;
    }

    public function getAllUserAkses()
    {
        $data = $this->db->select('*')
            ->from('rc_user_role')
            ->order_by('id', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getUserAkses()
    {
        $data = $this->db->select('*')
            ->from('rc_user_role')
            ->where('role !=', 'root')
            ->order_by('id', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getRoleById($id)
    {
        $data = $this->db->get_where('rc_user_role', ['id' => $id])->row_array();
        return $data;
    }

    public function listAksesMenu($id)
    {
        $menu = $this->db->where('is_active', '1')->get('rc_user_menu')->result_array();
        foreach ($menu as $m) {
            $ada = false;
            foreach ($this->listAkses($id) as $ma) {
                if ($m['menu_id'] == $ma['menu_id']) {
                    $ada = true;
                }
            }

            if ($ada == false) {
                $insert[] = [
                    'menu_id'   => $m['menu_id'],
                    'role_id'   => $id,
                    'akses'     => '0',
                    'tambah'    => '0',
                    'edit'      => '0',
                    'hapus'     => '0'
                ];
            }
        }

        if (isset($insert)) {
            $this->db->insert_batch('rc_user_akses', $insert);
        }

        if ($this->session->userdata['role_id'] == 1) {
            $ada = $this->db->select('m.nama_menu, m.level_menu, a.*')
                ->from('rc_user_menu m')
                ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
                ->where('a.role_id', $id)
                ->order_by('m.no_urut', 'ASC')
                ->get()->result_array();
        } else {
            $ada = $this->db->select('m.nama_menu, m.level_menu, a.*')
                ->from('rc_user_menu m')
                ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
                ->where('a.role_id', $id)
                ->where('m.nama_menu !=', 'menu management')
                ->order_by('m.no_urut', 'ASC')
                ->get()->result_array();
        }
        return $ada;
    }

    public function listAkses($id)
    {
        $data = $this->db->get_where('rc_user_akses', ['role_id' => $id])->result_array();
        return $data;
    }

    public function countAkses($id)
    {
        if ($this->session->userdata['role_id'] == 1) {
            $ada = $this->db->select('m.nama_menu, m.level_menu, a.*')
                ->from('rc_user_menu m')
                ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
                ->where('a.role_id', $id)
                // ->limit('5', '0')
                ->order_by('m.no_urut', 'ASC')
                ->get()->result_array();
        } else {
            $ada = $this->db->select('m.nama_menu, m.level_menu, a.*')
                ->from('rc_user_menu m')
                ->join('rc_user_akses a', 'a.menu_id = m.menu_id', 'left')
                ->where('a.role_id', $id)
                ->where('m.nama_menu !=', 'menu management')
                ->order_by('m.no_urut', 'ASC')
                ->get()->result_array();
        }
        return $ada;
    }

    public function simpanRoleAkses($id, $kode)
    {
        // $list = $this->listAksesMenu($id, $limit, $start);
        $list = $this->countAkses($id);
        $no = 0;
        foreach ($list as $ls) {
            $data[] = [
                'menu_id'   => $ls['menu_id'],
                'akses'     => ($this->input->post('akses' . $no) ? "1" : 0),
                'tambah'    => ($this->input->post('tambah' . $no) ? "1" : 0),
                'edit'      => ($this->input->post('edit' . $no) ? "1" : 0),
                'hapus'     => ($this->input->post('hapus' . $no) ? "1" : 0),
            ];
            $no++;
        }

        if ($kode != hash('sha1', $id)) {
            $this->output->set_status_header(401);
            show_error('Server Unauthorized! Access Denied');
        }

        $this->db->where('role_id', $id);
        $this->db->update_batch('rc_user_akses', $data, 'menu_id');
        return $data;
    }

    public function getAllUser()
    {
        if ($this->session->userdata('role_id') == 1) {
            $data = $this->db->select('u.*, u.id as kode, r.*')
                ->from('rc_user u')
                ->join('rc_user_role r', 'r.id = u.role_id', 'left')
                ->order_by('u.id', 'ASC')
                ->get()->result_array();
        } else {
            $data = $this->db->select('u.*, u.id as kode, r.*')
                ->from('rc_user u')
                ->join('rc_user_role r', 'r.id = u.role_id', 'left')
                ->where('u.role_id !=', 1)
                ->order_by('u.id', 'ASC')
                ->get()->result_array();
        }
        return $data;
    }

    public function getAllMerk()
    {
        $data = $this->db->select('*')
            ->from('rc_merk_mobil mm')
            ->where('mm.is_active', '1')
            ->order_by('mm.merk_id', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getMerkById($id)
    {
        $data = $this->db->select('*')
            ->from('rc_merk_mobil mm')
            ->where(['mm.merk_id' => $id, 'mm.is_active' => '1'])
            ->get()->row_array();
        return $data;
    }

    public function getAllMobil()
    {
        $data = $this->db->select('*')
            ->from('rc_mobil m')
            ->join('rc_merk_mobil mm', 'mm.merk_id = m.merk_id', 'left')
            ->where('m.is_active', '1')
            ->order_by('m.nama_mobil', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getMobilById($id)
    {
        $data = $this->db->select('m.*, mm.*')
            ->from('rc_mobil m')
            ->join('rc_merk_mobil mm', 'mm.merk_id = m.merk_id', 'left')
            ->where(['m.mobil_id' => $id, 'm.is_active' => '1'])
            ->get()->row_array();
        return $data;
    }

    public function getAllDriver()
    {
        $data = $this->db->select('*')
            ->from('rc_driver d')
            ->where('d.is_active', '1')
            ->order_by('d.kode_driver', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getDriverById($id)
    {
        $data = $this->db->select('*')
            ->from('rc_driver d')
            ->where(['d.driver_id' => $id, 'd.is_active' => '1'])
            ->order_by('d.nama_driver', 'ASC')
            ->get()->row_array();
        return $data;
    }

    public function getAllCustomer()
    {
        $data = $this->db->select('c.*')
            ->from('rc_customer c')
            ->where('c.is_active', '1')
            ->order_by('c.nama_customer', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getCustomerById($id)
    {
        $data = $this->db->select('c.*')
            ->from('rc_customer c')
            ->where(['c.customer_id' => $id, 'c.is_active' => '1'])
            ->get()->row_array();
        return $data;
    }

    public function getMobilByTahun()
    {
        $data = $this->db->select('*')
            ->from('rc_mobil m')
            ->join('rc_merk_mobil mm', 'mm.merk_id = m.merk_id', 'left')
            ->where('m.is_active', '1')
            ->order_by('m.exp_date', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getAllTipeOrder()
    {
        $data = $this->db->select('t.*')
            ->from('rc_tipe_order t')
            ->where('t.is_active', '1')
            ->order_by('t.order_tipe_id', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getTipOrderById($id)
    {
        $data = $this->db->select('t.*')
            ->from('rc_tipe_order t')
            ->where('t.order_tipe_id', $id)
            ->get()->row_array();
        return $data;
    }

    public function getAllTipeSewa()
    {
        $data = $this->db->select('t.*')
            ->from('rc_tipe_sewa t')
            ->where('t.is_active', '1')
            ->order_by('t.sewa_tipe_id', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function getTipeSewaById($id)
    {
        $data = $this->db->select('t.*')
            ->from('rc_tipe_sewa t')
            ->where('t.sewa_tipe_id', $id)
            ->get()->row_array();
        return $data;
    }

    public function getAllSo()
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.status_order', 'order')
            ->get()->result_array();

        foreach ($data as $d) {
            $sisa   = time() - strtotime($d['tgl_end']);
            $jam    = floor($sisa / (60 * 60));
            $hari   = floor($sisa / (60 * 60 * 24));
            $bulan  = floor($sisa / (60 * 60 * 24 * 30));

            // if ($jam > 0) {
            $dendaJam   = ($jam * $d['denda_jam']);
            $dendaHari  = ($hari * $d['denda_hari']);
            $dendaBulan = ($bulan * $d['denda_bulan']);


            $denda = $this->db->get_where('rc_denda', ['kode_so' => $d['kode_so']])->row_array();
            if ($denda) {
                $kenadendaJam   = ($dendaJam < 0) ? 0 : $dendaJam;
                $kenadendaHari  = ($dendaHari < 0) ? 0 : $dendaHari;
                $kenadendaBulan = ($dendaBulan < 0) ? 0 : $dendaBulan;
                $array = [
                    'denda_jam'     => $kenadendaJam,
                    'denda_hari'    => $kenadendaHari,
                    'denda_bulan'   => $kenadendaBulan
                ];


                $this->updateData($d['kode_so'], 'kode_so', 'rc_denda', $array);
            } else {
                $kenadendaJam   = ($dendaJam < 0) ? 0 : $dendaJam;
                $kenadendaHari  = ($dendaHari < 0) ? 0 : $dendaHari;
                $kenadendaBulan = ($dendaBulan < 0) ? 0 : $dendaBulan;
                $array = [
                    'kode_so'       => $d['kode_so'],
                    'denda_jam'     => $kenadendaJam,
                    'denda_hari'    => $kenadendaHari,
                    'denda_bulan'   => $kenadendaBulan
                ];
                $this->insertData('rc_denda', $array);
            }
        }
        return $data;
    }

    public function getSoByStatusTanggal($status, $start, $finish)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.status_order', $status)
            ->where('s.tgl_start >= ', date('Y-m-d', $start))
            ->where('s.tgl_end <=', date('Y-m-d', $finish))
            ->get()->result_array();
        return $data;
    }

    public function getSoById($id)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*, mm.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_merk_mobil mm', 'm.merk_id = mm.merk_id', 'right')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.so_id', $id)
            ->get()->row_array();
        return $data;
    }

    public function getFindSoById($id)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*, mm.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_merk_mobil mm', 'm.merk_id = mm.merk_id', 'right')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.so_id', $id)
            ->get()->result_array();
        return $data;
    }

    public function getSoCustmer($id)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*, mm.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_merk_mobil mm', 'm.merk_id = mm.merk_id', 'right')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.kode_customer', $id)
            ->where('s.status_order', 'order')
            ->get()->result_array();
        return $data;
    }

    public function loop_report_so($start, $end)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.status_order', 'finish')
            ->where('s.tgl_start >= ', date('Y-m-d', $start))
            ->where('s.tgl_end <=', date('Y-m-d', $end))
            ->group_by('s.tgl_start')
            ->get()->result_array();
        return $data;
    }

    public function report_so($start, $customer)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*, mm.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_merk_mobil mm', 'm.merk_id = mm.merk_id', 'right')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.kode_customer', $customer)
            ->where('s.tgl_start', $start)
            ->get()->result_array();
        return $data;
    }

    public function loop_report_mobil($start, $end)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*, mm.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_merk_mobil mm', 'm.merk_id = mm.merk_id', 'right')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.status_order', 'finish')
            ->where('s.tgl_start >= ', date('Y-m-d', $start))
            ->where('s.tgl_start <=', date('Y-m-d', $end))
            ->group_by('s.kode_mobil')
            ->get()->result_array();
        return $data;
    }

    public function report_so_by_mobil($mobil, $start, $end)
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*, mm.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_merk_mobil mm', 'm.merk_id = mm.merk_id', 'right')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.status_order', 'finish')
            ->where('s.kode_mobil', $mobil)
            ->where('s.tgl_start >= ', date('Y-m-d', $start))
            ->where('s.tgl_start <=', date('Y-m-d', $end))
            ->get()->result_array();
        return $data;
    }

    public function report_so_by_customer($start, $end)
    {
        $data = $this->db->select('p.*, c.*, SUM(p.nilai_bayar + p.nilai_dp) AS ptotal')
            ->from('rc_pembayaran p')
            ->join('rc_customer c', 'c.kode_customer = p.kode_customer', 'left')
            ->where('p.tgl_bayar >=', date('Y-m-d', $start))
            ->where('p.tgl_bayar <=', date('Y-m-d', $end))
            ->group_by('p.kode_customer')
            ->get()->result_array();
        return $data;
    }

    public function report_count_mobil_so($start, $end)
    {
        $data = $this->db->select('p.*, m.*, SUM(p.nilai_bayar + p.nilai_dp) AS ptotal, COUNT(p.no_polisi) AS mobil')
            ->from('rc_pembayaran p')
            ->join('rc_mobil m', 'm.no_polisi = p.no_polisi', 'left')
            ->join('rc_so s', 's.kode_so = p.kode_so', 'left')
            ->where('s.tgl_start >=', date('Y-m-d', $start))
            ->where('s.tgl_start <=', date('Y-m-d', $end))
            ->group_by('p.no_polisi')
            ->get()->result_array();
        return $data;
    }

    public function getAllKas()
    {
        $data = $this->db->select('k.*')
            ->from('rc_pengeluaran k')
            ->where('closing', 'unclose')
            ->order_by('p_tanggal', 'ASC')
            ->get()->result_array();
        return $data;
    }

    public function get_kas_by_tgl($tgl)
    {
        $data = $this->db->select('k.*')
            ->from('rc_pengeluaran k')
            ->where('k.p_tanggal', date('Y-m-d', $tgl))
            ->get()->result_array();
        return $data;
    }

    public function get_kas_range_tgl($start, $end)
    {
        $data = $this->db->select('k.*')
            ->from('rc_pengeluaran k')
            ->where('k.p_tanggal >=', date('Y-m-d', $start))
            ->where('k.p_tanggal <=', date('Y-m-d', $end))
            ->group_by('k.p_tanggal')
            ->get()->result_array();
        return $data;
    }

    public function kas_range_tgl($start, $end)
    {
        $data = $this->db->select('k.*')
            ->from('rc_pengeluaran k')
            ->where('k.p_tanggal >=', date('Y-m-d', $start))
            ->where('k.p_tanggal <=', date('Y-m-d', $end))
            ->get()->result_array();
        return $data;
    }

    public function load_kas_by_id($id)
    {
        $data = $this->db->select('k.*')
            ->from('rc_pengeluaran k')
            ->where('k.pengeluaran_id', $id)
            ->get()->row_array();
        return $data;
    }

    public function get_outstanding_so()
    {
        $data = $this->db->select('s.*, c.*, m.*, d.*')
            ->from('rc_so s')
            ->join('rc_customer c', 'c.kode_customer = s.kode_customer', 'left')
            ->join('rc_mobil m', 'm.kode_mobil = s.kode_mobil', 'left')
            ->join('rc_driver d', 'd.kode_driver = s.kode_driver', 'left')
            ->where('s.status_order', 'order')
            ->group_by('s.kode_customer')
            ->get()->result_array();
        return $data;
    }

    public function upload($folder, $file)
    {
        $config['upload_path'] = './template/img/document/' . $folder . '/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['file_name'] = $file . '_' . time();

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
