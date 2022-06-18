<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- Content Row -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-fw fa-pencil-alt"></i>
                        Edit Mobil
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('master/mobil/edit-mobil/' . $edit['mobil_id']); ?>">
                        <?= csrf(); ?>
                        <div class="form-row col-md-12">
                            <div class="form-group col-md-2">
                                <label for="kode_mobil">
                                    <i class="fas fa-fw fa-barcode"></i>
                                    Kode Mobil
                                </label>
                                <input type="text" class="form-control form-control-sm" id="kode_mobil" placeholder="Kode Mobil" name="kode_mobil" value="<?= $edit['kode_mobil']; ?>" readonly>
                                <?= form_error('kode_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nama_mobil">
                                    <i class="fas fa-fw fa-car"></i>
                                    Nama Mobil
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_mobil" placeholder="Nama Mobil" name="nama_mobil" value="<?= $edit['nama_mobil']; ?>">
                                <?= form_error('nama_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="no_polisi">
                                    No. Polisi
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_polisi" placeholder="No. Polisi" name="no_polisi" value="<?= $edit['no_polisi']; ?>">
                                <?= form_error('no_polisi', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="tahun_mobil">
                                    <i class="far fa-fw fa-calendar-alt"></i>
                                    Tahun
                                </label>
                                <input type="text" class="form-control form-control-sm" id="tahun_mobil" placeholder="Tahun" name="tahun_mobil" value="<?= $edit['tahun']; ?>">
                                <?= form_error('tahun_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row col-md-12">
                            <div class="form-group col-md-4">
                                <label for="jenis_mobil">
                                    Jenis/Merk
                                </label>
                                <select name="jenis_mobil" id="jenis_mobil" class="form-control form-control-sm">
                                    <option value="<?= $edit['merk_id']; ?>"><?= $edit['kode_merk'] . ' - ' . $edit['merk_mobil'] . ' ' . $edit['tipe_mobil']; ?></option>

                                    <?php foreach ($merk as $m) : ?>
                                        <option value="<?= $m['merk_id']; ?>"><?= $m['kode_merk'] . ' - ' . $m['merk_mobil'] . ' ' . $m['tipe_mobil']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('jenis_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="warna_mobil">
                                    Warna
                                </label>
                                <input type="text" class="form-control form-control-sm" id="warna_mobil" placeholder="Warna Mobil" name="warna_mobil" value="<?= $edit['warna']; ?>">
                                <?= form_error('warna_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="no_rangka">
                                    No. Rangka Mobil
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_rangka" placeholder="Nomor Rangka Mobil" name="no_rangka" value="<?= $edit['no_rangka']; ?>">
                                <?= form_error('no_rangka', '<small class="text-danger ">', '</small>'); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="no_mesin">
                                    No. Mesin Mobil
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_mesin" placeholder="Nomor Mesin Mobil" name="no_mesin" value="<?= $edit['no_mesin']; ?>">
                                <?= form_error('no_mesin', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="nama_stnk">
                                    STNK
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_stnk" placeholder="Nama STNK" name="nama_stnk" value="<?= $edit['nama_stnk']; ?>">
                                <?= form_error('nama_stnk', '<small class="text-danger ">', '</small>'); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nama_pemilik">
                                    <i class="fas fa-fw fa-address-card"></i>
                                    Nama Pemilik
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_pemilik" placeholder="Nama Pemilik" name="nama_pemilik" value="<?= $edit['nama_pemilik']; ?>">
                                <?= form_error('nama_pemilik', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="alamat_stnk">
                                    Alamat STNK
                                </label>
                                <textarea name="alamat_stnk" id="alamat_stnk" rows="3" class="form-control form-control-sm" placeholder="Alamat Sesuai STNK"><?= $edit['alamat_stnk']; ?></textarea>
                                <?= form_error('alamat_stnk', '<small class="text-danger ">', '</small>'); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="alamat_domisili">
                                    Alamat Domisili
                                </label>
                                <textarea name="alamat_domisili" id="alamat_domisili" rows="3" class="form-control form-control-sm" placeholder="Alamat Sekarang"><?= $edit['alamat_domisili'] ?></textarea>
                                <?= form_error('alamat_domisili', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="exp_date">
                                    <i class="far fa-fw fa-calendar-alt"></i>
                                    Exp Date
                                </label>
                                <input type="date" name="exp_date" id="exp_date" class="form-control form-control-sm datepicker" value="<?= $edit['exp_date']; ?>">
                                <?= form_error('exp_date', '<small class="text-danger ">', '</small>'); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="keterangan">
                                    Keterangan
                                </label>
                                <textarea name="keterangan" id="keterangan" rows="3" class="form-control form-control-sm" placeholder="Keterangan"><?= $edit['keterangan']; ?></textarea>
                                <?= form_error('keterangan', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <hr>

                        <div class="form-row col-md-6 mt-3">
                            <div class="text-right">
                                <a href="<?= site_url('master/mobil'); ?>" class="btn btn-secondary">
                                    <i class="fas fa-window-close"></i>
                                    Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-fw fa-pen-square"></i>
                                    Update Data Mobil</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->