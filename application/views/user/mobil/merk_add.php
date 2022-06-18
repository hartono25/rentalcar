<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- Content Row -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-fw fa-plus-square"></i>
                        Add New Merk
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('master/mobil/merk'); ?>">
                        <?= csrf(); ?>
                        <div class="form-row col-md-6">
                            <!-- <div class="form-group col-md-6">
                                <label for="kode_merk">
                                    <i class="fas fa-fw fa-barcode"></i>
                                    Kode Merk
                                </label>
                                <input type="text" class="form-control form-control-sm" id="kode_merk" placeholder="Kode Merk Mobil" name="kode_merk" value="<?= set_value('kode_merk'); ?>">
                                <?= form_error('kode_merk', '<small class="text-danger ">', '</small>'); ?>
                            </div> -->
                            <div class="form-group col-md-6">
                                <label for="merk_mobil">
                                    <i class="fas fa-fw fa-car"></i>
                                    Nama Merk Mobil
                                </label>
                                <input type="text" class="form-control form-control-sm" id="merk_mobil" placeholder="Nama Merk Mobil" name="merk_mobil" value="<?= set_value('merk_mobil'); ?>">
                                <?= form_error('merk_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipe_mobil">
                                    <i class="fas fa-fw fa-car"></i>
                                    Nama Tipe Mobil
                                </label>
                                <input type="text" class="form-control form-control-sm" id="tipe_mobil" placeholder="Nama Tipe Mobil " name="tipe_mobil" value="<?= set_value('tipe_mobil'); ?>">
                                <?= form_error('tipe_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="form-row col-md-6">
                            <div class="form-group col-md-6">
                                <label for="produksi_mobil">
                                    <i class="fas fa-fw fa-building"></i>
                                    Produksi
                                </label>
                                <input type="text" class="form-control form-control-sm" id="produksi_mobil" placeholder="Produksi By " name="produksi_mobil">
                                <?= form_error('produksi_mobil', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <!-- <hr> -->

                        <div class="form-row col-md-6 mt-3">
                            <div class="text-right">
                                <a href="<?= site_url('master/mobil'); ?>" class="btn btn-secondary">
                                    <i class="fas fa-window-close"></i>
                                    Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-fw fa-save"></i>
                                    Simpan Merk Mobil</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">#</th>
                                    <th width="20">Kode</th>
                                    <th>Merk Mobil</th>
                                    <th>Produksi</th>
                                    <th>User By</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($merk as $m) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $m['kode_merk']; ?></td>
                                        <td><?= $m['merk_mobil'] . ' ' . $m['tipe_mobil']; ?></td>
                                        <td><?= $m['produksi_by']; ?></td>
                                        <td><?= $m['user_by']; ?></td>
                                        <td class="text-center">
                                            <a data-toggle="modal" href="#infoMerkModal" data-backdrop="static" data-id="<?= $m['merk_id']; ?>" class='btn btn-warning btn-sm'>
                                                <i class="fas fa-fw fa-eye"></i>
                                                Detail
                                            </a>

                                            <?= ($edit == '0' ? "" : "<a href='" . site_url('master/mobil/edit-merk/' . $m['merk_id']) . "' class='btn btn-success btn-sm'>
                                                <i class='fas fa-fw fa-edit'></i>
                                                Edit
                                            </a>"); ?>

                                            <?= ($hapus == '0' ? "" : "<a data-id='" . $m['merk_id'] . "' href='" . base_url('master/mobil/hapus') . "'' class='btn btn-danger btn-sm delete'>
                                                <i class='fas fa-trash-alt'></i>
                                                Hapus
                                            </a>"); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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

<div class="modal fade" id="infoMerkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="merk-data"></div>
        </div>
    </div>
</div>