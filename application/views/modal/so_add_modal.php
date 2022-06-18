<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Sales Order</h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= site_url('transaksi/sales-order/tambah-so'); ?>">
    <?php $uri = $this->uri->segment(1); ?>
    <?= csrf(); ?>
    <div class="modal-body">
        <div class="form-group row">
            <div class="col-sm-2">
                Tanggal Start
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="date" class="form-control " id="tgl_start" name="tgl_start">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-calendar"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="time" class="form-control " id="time_start" name="time_start">
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
                    <input type="date" class="form-control " id="tgl_finish" name="tgl_finish">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="time" class="form-control " id="time_finish" name="time_finish">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-fw fa-clock"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-2">
                Customer
            </div>
            <div class="col-sm-2">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="so_customer" name="so_customer">
                    <div class="input-group-prepend">
                        <a href="#" data-target="#findCustomerModal" data-toggle="modal" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i>
                        </a>
                    </div>
                    <!-- <div class="input-group-prepend">
                                    <a href="#" onclick="window.open('<?= site_url('home/customer'); ?>','popuppage','width=920,toolbar=0,resizable=0,scrollbars=no,height=450,top=100,left=300');" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i>
                                    </a>
                                </div> -->
                </div>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="so_nama" name="so_nama" readonly>
            </div>
            <div class="col">
                <a class="btn btn-secondary" data-toggle="modal" href="#newCustModal" data-id="<?= $this->uri->segment(1) . $this->uri->slash_segment(2, 'leading'); ?>">
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
                <input type="text" class="form-control" id="so_telp" name="so_telp" readonly>

            </div>
            <div class="col">
                <select name="t_order" id="t_order" class="form-control" onchange="getSelVal()">
                    <option value="">- Choose Tipe Order -</option>
                    <?php foreach ($tipeorder as $to) : ?>
                        <option value="<?= $to['nama_tipe']; ?>"><?= $to['nama_tipe']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <select name="t_sewa" id="t_sewa" class="form-control">
                    <option value="">- Choose Tipe Sewa -</option>
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
                <textarea name="alamat_jemput" id="alamat_jemput" rows="3" class="form-control" placeholder="Alamat Antar / Jemput" disabled></textarea>
            </div>
            <div class="col">
                <textarea name="alamat_finish" id="alamat_finish" rows="3" class="form-control" placeholder="Alamat Finish" disabled></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Payment
            </div>
            <div class="col-sm-4">
                <select name="t_payment" id="t_payment" class="form-control">
                    <option>- Choose Tipe Payment -</option>
                    <option value="cash on delivery">Cash On Delivery</option>
                    <option value="transfer">Transfer</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Driver
            </div>
            <div class="col-sm-2">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="so_driver" name="so_driver">
                    <div class="input-group-prepend">
                        <a href="#" data-toggle="modal" data-target="#findDriverModal" class="input-group-text" id="btn_driver" name="btn_driver" disabled><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div>
                    <!-- <div class="input-group-prepend">
                                    <a href="#" onclick="window.open('<?= site_url('home/driver'); ?>','popuppage','width=920,toolbar=0,resizable=0,scrollbars=no,height=450,top=100,left=300');" class="input-group-text" id="btn_driver" name="btn_driver" disabled><i class="fas fa-fw fa-ellipsis-h"></i></a>
                                </div> -->
                </div>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="so_nama_driver" name="so_nama_driver" readonly>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-md-10 row">
                <div class="">
                    <div class="form-group row">
                        <label for="so_telp_driver" class="col-sm-4 col-form-label col-form-label-sm">No. Handphone</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="so_telp_driver" id="so_telp_driver" readonly>
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
                    <input type="text" class="form-control" id="so_mobil" name="so_mobil">
                    <div class="input-group-prepend">
                        <a href="#" data-toggle="modal" data-target="#findMobil" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div>
                    <!-- <div class="input-group-prepend">
                        <a href="#" onclick="window.open('<?= site_url('home/mobil'); ?>','popuppage','width=920,toolbar=0,resizable=0,scrollbars=no,height=450,top=100,left=300');" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="so_nama_mobil" name="so_nama_mobil" readonly>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-md-10 row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="no_polisi" class="col-sm-4 col-form-label col-form-label-sm">No. Polisi</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="no_polisi" id="no_polisi" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="warna" class="col-sm-4 col-form-label col-form-label-sm">Warna</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="warna" id="warna" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="tipe_merk" class="col-sm-4 col-form-label col-form-label-sm">Tipe / Merk</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="tipe_merk" id="tipe_merk" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-4 col-form-label col-form-label-sm">Tahun</label>
                        <div class="col">
                            <input type="text" class="form-control form-control" name="tahun" id="tahun" readonly>
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
                    <input type="text" class="form-control" name="pembayaran_dp" id="pembayaran_dp" placeholder="Pembayaran DP">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input type="text" class="form-control" name="pembayaran_kasbon" id="pembayaran_kasbon" placeholder="Pembayaran Kasbon">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">
                Keterangan
            </div>
            <div class="col">
                <textarea name="keterangan" id="keterangan" rows="5" class="form-control"></textarea>
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
                            <input type="text" class="form-control form-control" name="denda_perjam" id="denda_perjam">
                        </div>
                        <label for="denda_perjam" class="col-sm-4 col-form-label col-form-label-sm">/ Jam</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select name="tagihan" id="tagihan" class="form-control">
                        <option>- Choose For Tagihan -</option>
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
                            <input type="text" class="form-control form-control" name="denda_perhari" id="denda_perhari">
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
                            <input type="text" class="form-control form-control" name="denda_perbulan" id="denda_perbulan">
                        </div>
                        <label for="denda_perbulan" class="col-sm-4 col-form-label col-form-label-sm">/ Bulan</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal-footer bg-dark">
        <!-- <div class="form-group row"> -->
        <div class="col-md-8">
            <a href="<?= site_url('cetak/checklist'); ?>" target="_blank" class="btn btn-secondary">
                Checklist
            </a>
            <a href="<?= site_url('cetak/form_order'); ?>" target="_blank" class="btn btn-secondary">
                Form Order
            </a>
            <a href="<?= site_url('cetak/perjanjian'); ?>" target="_blank" class="btn btn-secondary">
                Perjanjian
            </a>
            <a href="<?= site_url('cetak/kwitansi'); ?>" target="_blank" class="btn btn-secondary">
                Invoice
            </a>

        </div>
        <div class="col-md-4 text-right">
            <button type="button" data-dismiss="modal" class="btn btn-light">
                <i class="fas fa-window-close"></i>
                Cancel
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-fw fa-save"></i>
                Simpan
            </button>
        </div>
        <!-- </div> -->
    </div>
</form>