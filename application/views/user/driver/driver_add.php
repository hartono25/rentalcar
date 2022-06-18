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
                        Add New Driver
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('master/driver/tambah'); ?>">
                        <?= csrf(); ?>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="nama_driver">
                                    <i class="fas fa-fw fa-address-card"></i>
                                    NAMA DRIVER
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_driver" placeholder="Nama Lengkap Driver" name="nama_driver" value="<?= set_value('nama_driver'); ?>">
                                <?= form_error('nama_driver', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="no_telp_driver">
                                    <i class="fas fa-fw fa-phone-square"></i>
                                    NO. TELP
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_telp_driver" placeholder="Nomor Telepon Driver" name="no_telp_driver" value="<?= set_value('no_telp_driver'); ?>">
                                <?= form_error('no_telp_driver', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_saudara">
                                    <i class="fas fa-fw fa-user"></i>
                                    SAUDARA KANDUNG
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_saudara" placeholder="Nama Saudara Kandung" name="nama_saudara" value="<?= set_value('nama_saudara') ?>">
                                <?= form_error('nama_saudara', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="no_telp_saudara">
                                    <i class="fas fa-fw fa-phone-square"></i>
                                    NO. TELP
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_telp_saudara" placeholder="Nomor Telepon Saudara" name="no_telp_saudara" value="<?= set_value('no_telp_saudara'); ?>">
                                <?= form_error('no_telp_saudara', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="no_ktp">
                                    <i class="fas fa-fw fa-id-card-alt"></i>
                                    NO. KTP
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_ktp" placeholder="Nomor KTP Driver" name="no_ktp" value="<?= set_value('no_ktp'); ?>">
                                <?= form_error('no_ktp', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="no_sim">
                                    <i class="fas fa-fw fa-id-card-alt"></i>
                                    NO. SIM
                                </label>
                                <input type="text" class="form-control form-control-sm" id="no_sim" placeholder="Nomor SIM Driver" name="no_sim" value="<?= set_value('no_sim'); ?>">
                                <?= form_error('no_sim', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="alamat_ktp">
                                    <i class="fas fa-fw fa-map-marker-alt"></i>
                                    ALAMAT KTP
                                </label>
                                <textarea name="alamat_ktp" id="alamat_ktp" rows="3" class="form-control form-control-sm" placeholder="Alamat Sesuai KTP Driver"></textarea>
                                <?= form_error('alamat_ktp', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="alamat_domisili">
                                    <i class="fas fa-fw fa-map-marker-alt"></i>
                                    ALAMAT DOMISILI
                                </label>
                                <textarea name="alamat_domisili" id="alamat_domisili" rows="3" class="form-control form-control-sm" placeholder="Alamat Domisili Driver"></textarea>
                                <?= form_error('alamat_domisili', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="is_active_driver">
                                    ACTIVE
                                </label>
                                <select id="is_active_driver" class="form-control form-control-sm" name="is_active_driver">
                                    <option selected>---</option>
                                    <option value="0">No</option>
                                    <option value="1">Active</option>
                                </select>
                                <?= form_error('is_active_driver', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <hr>

                        <div class="">
                            <!-- <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="" data-id="" class="btn btn-secondary">
                                    <i class="far fa-fw fa-id-card"></i>
                                    KTP</a>
                                <a href="<?= site_url('master/driver'); ?>" class="btn btn-secondary">
                                    <i class="far fa-fw fa-id-card"></i>
                                    SIM</a>

                            </div> -->
                            <div class="text-right">
                                <a href="<?= site_url('master/driver'); ?>" class="btn btn-secondary">
                                    <i class="fas fa-window-close"></i>
                                    Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-fw fa-save"></i>
                                    Simpan Driver</button>
                            </div>
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