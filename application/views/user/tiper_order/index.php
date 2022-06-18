<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
                </div>
                <?php if ($tambah == '1') : ?>
                    <div class="form-group col-md-6 text-right">
                        <a href="#" data-toggle="modal" data-target="#tipeOrderModal" data-backdrop="static" class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-user-plus"></i>
                            Tambah Tipe Order
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th width="10">#</th>
                            <th>Tipe Order</th>
                            <th>Active</th>
                            <th>Date Created</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($tipe as $t) : ?>
                            <tr>
                                <td><?= $no + 1; ?></td>
                                <td><?= $t['nama_tipe']; ?></td>
                                <td><?= $t['is_active']; ?></td>
                                <td><?= date_indo(date_strtotime($t['date_created'])); ?></td>
                                <td>
                                    <?= ($edit == '0' ? "" : "<a href='#' data-toggle='modal' data-target='#tipeEditModal' data-id='" . $t['order_tipe_id'] . "' data-backdrop='static' class='btn btn-success btn-sm'>
                                        <i class='fas fa-fw fa-edit'></i>
                                        Edit
                                    </a>"); ?>
                                    <?= ($hapus == '0' ? "" : "<a data-id='" . $t['order_tipe_id'] . "' href='" . base_url('master/tipe-order/hapus') . "' class='btn btn-danger btn-sm delete'>
                                        <i class='fas fa-fw fa-trash-alt'></i>
                                        Hapus
                                    </a>"); ?>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="tipeOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tipe Order</h5>
                <button class="close close-modal-edit-role" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="<?= site_url('master/tipe-order/tambah'); ?>">
                <?= csrf(); ?>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="role_user" class="col-sm-3 col-form-label">Tipe Order</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" name="nama_tipe" id="nama_tipe" value="<?= set_value('nama_tipe'); ?>">
                            <?= form_error('nama_tipe', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary close-modal-edit-role" type="button" data-dismiss="modal">
                        <i class="fas fa-window-close"></i>
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary" id="simpan_menu">
                        <i class="fas fa-fw fa-save"></i>
                        Simpan Tipe Order
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="tipeEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="tipe-data"></div>
        </div>
    </div>
</div>