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
                        <i class="fas fa-fw fa-pencil-alt"></i>
                        Edit Customer
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('master/customer/edit/' . $edit['customer_id']); ?>">
                        <?= csrf(); ?>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="kode_cust">
                                    <i class="fas fa-fw fa-barcode"></i>
                                    KODE
                                </label>
                                <input type="text" class="form-control form-control-sm" id="kode_cust" placeholder="Kode Customer" name="kode_cust" value="<?= $edit['kode_customer']; ?>" readonly>
                                <?= form_error('kode_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nama_cust">
                                    <i class="fas fa-fw fa-address-card"></i>
                                    NAMA CUSTOMER
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_cust" placeholder="Nama Customer" name="nama_cust" value="<?= $edit['nama_customer']; ?>">
                                <?= form_error('nama_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ktp_cust">
                                    KTP / SIM
                                </label>
                                <input type="text" class="form-control form-control-sm" id="ktp_cust" placeholder="No. Identitas Customer" name="ktp_cust" value="<?= $edit['ktp_or_sim']; ?>">
                                <?= form_error('ktp_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="npwp_cust">
                                    NPWP
                                </label>
                                <input type="text" class="form-control form-control-sm" id="npwp_cust" placeholder="Username " name="npwp_cust" value="<?= $edit['npwp']; ?>">
                                <?= form_error('npwp_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="alamat_cust">
                                    ALAMAT
                                </label>
                                <textarea name="alamat_cust" id="alamat_cust" rows="3" class="form-control form-control-sm"><?= $edit['alamat_customer'] ?></textarea>
                                <?= form_error('alamat_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telp_cust1">
                                    <i class="fas fa-fw fa-phone-square"></i>
                                    NO. TELP#1
                                </label>
                                <input type="text" class="form-control form-control-sm" id="telp_cust1" placeholder="No. Telepon Customer" name="telp_cust1" value="<?= $edit['no_telp_customer1']; ?>">
                                <?= form_error('telp_cust1', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telp_cust2">
                                    <i class="fas fa-fw fa-phone-square"></i>
                                    NO. TELP#2
                                </label>
                                <input type="text" class="form-control form-control-sm" id="telp_cust2" placeholder="No. Telepon Customer" name="telp_cust2" value="<?= $edit['no_telp_customer2']; ?>">
                                <?= form_error('telp_cust2', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_perusahaan">
                                    <i class="fas fa-fw fa-building"></i>
                                    PERUSAHAAN
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_perusahaan" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?= $edit['nama_perusahaan']; ?>">
                                <?= form_error('nama_perusahaan', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jabatan_cust">
                                    <i class="fas fa-fw fa-user-tie"></i>
                                    JABATAN
                                </label>
                                <input type="text" class="form-control form-control-sm" id="jabatan_cust" placeholder="Jabatan Customer" name="jabatan_cust" value="<?= $edit['posisi_jabatan']; ?>">
                                <?= form_error('jabatan_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mail_cust">
                                    EMAIL
                                </label>
                                <input type="text" name="mail_cust" id="mail_cust" class="form-control form-control-sm" placeholder="Email Customer" value="<?= $edit['email_customer']; ?>">
                                <?= form_error('alamat_cust', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="keterangan">
                                    KETERANGAN
                                </label>
                                <textarea name="keterangan" id="keterangan" rows="3" class="form-control form-control-sm" placeholder="Remarks in here..."><?= $edit['keterangan']; ?></textarea>
                                <?= form_error('keterangan', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <hr>

                        <div class="text-right">
                            <a href="<?= site_url('master/customer'); ?>" class="btn btn-secondary">
                                <i class="fas fa-window-close"></i>
                                Cancel</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-fw fa-pen-square"></i>
                                Update Customer</button>
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