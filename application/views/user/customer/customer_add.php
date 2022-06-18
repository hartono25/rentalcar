<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-7 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-fw fa-plus-square"></i>
                        Add New Customer
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('master/customer/tambah'); ?>">
                        <?= csrf(); ?>
                        <input type="hidden" name="page" value="<?= $this->uri->segment(1) . $this->uri->slash_segment(2, 'leading'); ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_cust">
                                    <i class="fas fa-fw fa-address-card"></i>
                                    NAMA CUSTOMER
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_cust" placeholder="Nama Customer" name="nama_cust" value="<?= set_value('nama_cust'); ?>">
                                <?= form_error('nama_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mail_cust">
                                    <i class="fas fa-fw fa-envelope"></i>
                                    EMAIL
                                </label>
                                <input type="text" name="mail_cust" id="mail_cust" class="form-control form-control-sm" placeholder="Email Customer" value="<?= set_value('mail_cust'); ?>">
                                <?= form_error('alamat_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ktp_cust">
                                    KTP / SIM
                                </label>
                                <input type="text" class="form-control form-control-sm" id="ktp_cust" placeholder="No. Identitas Customer" name="ktp_cust" value="<?= set_value('ktp_cust'); ?>">
                                <?= form_error('ktp_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="npwp_cust">
                                    NPWP
                                </label>
                                <input type="text" class="form-control form-control-sm" id="npwp_cust" placeholder="NPWP " name="npwp_cust" value="<?= set_value('npwp_cust'); ?>">
                                <?= form_error('npwp_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="alamat_cust">
                                    <i class="fas fa-map-marker-alt"></i>
                                    ALAMAT
                                </label>
                                <textarea name="alamat_cust" id="alamat_cust" rows="3" class="form-control form-control-sm"></textarea>
                                <?= form_error('alamat_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telp_cust1">
                                    <i class="fas fa-fw fa-phone-square"></i>
                                    NO. TELP#1
                                </label>
                                <input type="text" class="form-control form-control-sm" id="telp_cust1" placeholder="No. Telepon Customer" name="telp_cust1" value="<?= set_value('telp_cust1'); ?>">
                                <?= form_error('telp_cust1', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telp_cust2">
                                    <i class="fas fa-fw fa-phone-square"></i>
                                    NO. TELP#2
                                </label>
                                <input type="text" class="form-control form-control-sm" id="telp_cust2" placeholder="No. Telepon Customer" name="telp_cust2" value="<?= set_value('telp_cust2'); ?>">
                                <?= form_error('telp_cust2', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_perusahaan">
                                    <i class="fas fa-fw fa-building"></i>
                                    PERUSAHAAN
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_perusahaan" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?= set_value('nama_perusahaan'); ?>">
                                <?= form_error('nama_perusahaan', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jabatan_cust">
                                    <i class="fas fa-fw fa-user-tie"></i>
                                    JABATAN
                                </label>
                                <input type="text" class="form-control form-control-sm" id="jabatan_cust" placeholder="Jabatan Customer" name="jabatan_cust" value="<?= set_value('jabatan_cust'); ?>">
                                <?= form_error('jabatan_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="keterangan">
                                    KETERANGAN
                                </label>
                                <textarea name="keterangan" id="keterangan" rows="3" class="form-control form-control-sm" placeholder="Remarks in here..."></textarea>
                                <?= form_error('keterangan', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <hr>

                        <div class="text-right">
                            <a href="<?= site_url('master/customer'); ?>" class="btn btn-secondary">
                                <i class="fas fa-window-close"></i>
                                Cancel</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-fw fa-save"></i>
                                Simpan Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->