<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel"><?= $title; ?></h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= site_url('transaksi/sales-order/update-so'); ?>">
    <?= csrf(); ?>
    <input type="hidden" name="kode" value="<?= $edit['kode_so']; ?>">
    <div class="modal-body">
        <div class="form-group row">
            <div class="col-sm-2">
                No.Sales Order
            </div>
            <div class="col-sm-5">
                <input type="text" name="kode_so" id="kode_so" class="form-control" value="<?= $edit['kode_so']; ?>" readonly>
            </div>
            <div class="col-sm-5">
                <input type="text" name="status_order" id="status_order" class="form-control" value="<?= $edit['status_order']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Tanggal Start
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="date" class="form-control " id="tgl_start" name="tgl_start" value="<?= date('Y-m-d', strtotime($edit['tgl_start'])); ?>">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="time" class="form-control " id="time_start" name="time_start" value="<?= date('H:i:s', strtotime($edit['tgl_start'])); ?>">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-fw fa-clock"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Tanggal Finish
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="date" class="form-control " id="tgl_finish" name="tgl_finish" value="<?= date('Y-m-d', strtotime($edit['tgl_end'])); ?>">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="time" class="form-control " id="time_finish" name="time_finish" value="<?= date('H:i:s', strtotime($edit['tgl_end'])); ?>">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-fw fa-clock"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Customer
            </div>
            <div class="col-sm-2">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="edit_so_customer" name="edit_so_customer" value="<?= $edit['kode_customer']; ?>">
                    <div class="input-group-prepend">
                        <a href="#" data-toggle="modal" data-target="#editfindCustomerModal" name="EditBtnDriver" id="EditBtnDriver" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="edit_so_nama" name="edit_so_nama" value="<?= $edit['nama_customer']; ?>" readonly>
            </div>
            <div class="col">
                <a class="btn btn-secondary" data-toggle="modal" href="#newCustModal">
                    <i class="fas fa-fw fa-address-card"></i>
                    New Customer
                </a>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                No. Telp
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="edit_so_telp" name="edit_so_telp" value="<?= $edit['no_telp_customer1']; ?>" readonly>

            </div>
            <div class="col">
                <select name="t_order" id="t_order" class="form-control" onchange="getSelVal()">
                    <option value="<?= $edit['tipe_order']; ?>"><?= $edit['tipe_order']; ?></option>
                    <?php foreach ($tipeorder as $to) : ?>
                        <option value="<?= $to['nama_tipe']; ?>"><?= $to['nama_tipe']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <select name="t_sewa" id="t_sewa" class="form-control">
                    <option value="<?= $edit['tipe_sewa']; ?>"><?= $edit['tipe_sewa']; ?></option>
                    <?php foreach ($tipesewa as $ts) : ?>
                        <option value="<?= $ts['nama_tipe']; ?>"><?= $ts['nama_tipe']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Alamat
            </div>
            <div class="col">
                <textarea name="alamat_jemput" id="alamat_jemput" rows="3" class="form-control" placeholder="Alamat Antar / Jemput" disabled><?= $edit['alamat_jemput']; ?></textarea>
            </div>
            <div class="col">
                <textarea name="alamat_finish" id="alamat_finish" rows="3" class="form-control" placeholder="Alamat Finish" disabled><?= $edit['alamat_finish']; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Payment
            </div>
            <div class="col-sm-4">
                <select name="t_payment" id="t_payment" class="form-control">
                    <option value="<?= $edit['payment']; ?>"><?= $edit['payment']; ?></option>
                    <option value="cash on delivery">Cash On Delivery</option>
                    <option value="transfer">Transfer</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?= $edit['harga_sewa']; ?>">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Driver
            </div>
            <div class="col-sm-2">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="edit_so_driver" name="edit_so_driver" value="<?= $edit['kode_driver']; ?>">
                    <div class="input-group-prepend">
                        <a href="#" data-toggle="modal" data-target="#findDriverModal" class="input-group-text" id="btn_driver" name="btn_driver" disabled><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div>
                    <!-- <div class="input-group-prepend">
                        <a href="#" onclick="window.open('<?= site_url('home/driver'); ?>','popuppage','width=920,toolbar=0,resizable=0,scrollbars=no,height=450,top=100,left=300');" class="input-group-text" id="btn_driver" name="btn_driver" disabled><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="edit_so_nama_driver" name="edit_so_nama_driver" value="<?= $edit['nama_driver']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-md-10 row">
                <div class="">
                    <div class="form-group row">
                        <label for="edit_so_telp_driver" class="col-sm-4 col-form-label col-form-label-sm">No. Handphone</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="edit_so_telp_driver" id="edit_so_telp_driver" value="<?= $edit['no_telp_driver']; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Mobil
            </div>
            <div class="col-sm-2">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="edit_so_mobil" name="edit_so_mobil" value="<?= $edit['kode_mobil']; ?>">
                    <div class="input-group-prepend">
                        <a href="#" data-toggle="modal" data-target="#editfindMobil" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div>
                    <!-- <div class="input-group-prepend">
                        <a href="#" onclick="window.open('<?= site_url('home/mobil'); ?>','popuppage','width=920,toolbar=0,resizable=0,scrollbars=no,height=450,top=100,left=300');" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="edit_so_nama_mobil" name="edit_so_nama_mobil" value="<?= $edit['nama_mobil']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-md-10 row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="edit_no_polisi" class="col-sm-4 col-form-label col-form-label-sm">No. Polisi</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="edit_no_polisi" id="edit_no_polisi" value="<?= $edit['no_polisi']; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="edit_warna" class="col-sm-4 col-form-label col-form-label-sm">Warna</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="edit_warna" id="edit_warna" value="<?= $edit['warna']; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="edit_tipe_merk" class="col-sm-4 col-form-label col-form-label-sm">Tipe / Merk</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="edit_tipe_merk" id="edit_tipe_merk" value="<?= $edit['merk_mobil']; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="edit_tahun" class="col-sm-4 col-form-label col-form-label-sm">Tahun</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="edit_tahun" id="edit_tahun" value="<?= $edit['tahun']; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                DP / Kasbon
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input type="text" class="form-control" name="pembayaran_dp" id="pembayaran_dp" placeholder="Pembayaran DP" value="<?= $edit['pembayaran_dp']; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input type="text" class="form-control" name="pembayaran_kasbon" id="pembayaran_kasbon" placeholder="Pembayaran Kasbon" value="<?= $edit['pembayaran_kasbon']; ?>">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Keterangan
            </div>
            <div class="col">
                <textarea name="keterangan" id="keterangan" rows="5" class="form-control"><?= $edit['keterangan']; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Denda / Overtime
            </div>
            <div class="col row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col">
                            <input type="text" class="form-control form-control" name="denda_perjam" id="denda_perjam" value="<?= $edit['denda_jam']; ?>">
                        </div>
                        <label for="denda_perjam" class="col-sm-4 col-form-label col-form-label-sm">/ Jam</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select name="tagihan" id="tagihan" class="form-control">
                        <option value="<?= $edit['tagihan_for']; ?>"><?= $edit['tagihan_for']; ?></option>
                        <option value="Perorangan">Perorangan</option>
                        <option value="Perusahaan">Perusahaan</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col">
                            <input type="text" class="form-control form-control" name="denda_perhari" id="denda_perhari" value="<?= $edit['denda_hari']; ?>">
                        </div>
                        <label for="denda_perhari" class="col-sm-4 col-form-label col-form-label-sm">/ Hari</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col">
                            <input type="text" class="form-control form-control" name="denda_perbulan" id="denda_perbulan" value="<?= $edit['denda_bulan']; ?>">
                        </div>
                        <label for="denda_perbulan" class="col-sm-4 col-form-label col-form-label-sm">/ Bulan</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-dark">
        <div class="col-md-7">
            <a href="<?= site_url('cetak/checklist/' . $edit['so_id']); ?>" target="_blank" class="btn btn-secondary">
                Checklist
            </a>
            <a href="<?= site_url('cetak/form_order/' . $edit['so_id']); ?>" target="_blank" class="btn btn-secondary">
                Form Order
            </a>
            <a href="<?= site_url('cetak/perjanjian/' . $edit['so_id']); ?>" target="_blank" class="btn btn-secondary">
                Perjanjian
            </a>
            <a href="<?= site_url('cetak/kwitansi/' . $edit['so_id']); ?>" target="_blank" class="btn btn-secondary">
                Invoice
            </a>

        </div>
        <div class="col-md-5 text-right">
            <button class="btn btn-light" type="button" data-dismiss="modal">
                <i class="fas fa-window-close"></i>
                Cancel
            </button>
            <button type="submit" class="btn btn-primary" id="simpan_menu">
                <i class="fas fa-fw fa-pen-square"></i>
                Update Sales Order
            </button>
        </div>
    </div>
</form>