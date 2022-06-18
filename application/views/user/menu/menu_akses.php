<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Menu Access</h6>
                </div>
                <?php if ($tambah == '1') : ?>
                    <div class="form-group col-md-6 text-right">
                        <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#roleModal" data-backdrop="static">
                            <i class="fas fa-fw fa-plus-square"></i>
                            Tambah Role User
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>User role</th>
                            <th width="250">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($role as $r) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $r['role']; ?></td>
                                <td class="text-center">
                                    <a data-toggle="modal" href="#roleAksesModal" data-backdrop="static" data-id="<?= $r['id']; ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-fw fa-check-square"></i>
                                        Give Access
                                    </a>
                                    <a data-toggle="modal" href="#roleEditModal" data-backdrop="static" data-id="<?= $r['id']; ?>" class="btn btn-success btn-sm">
                                        <i class="fas fa-fw fa-edit"></i>
                                        Edit
                                    </a>
                                    <a data-id="<?= $r['id']; ?>" href="<?= base_url('menu/access-management/hapus'); ?>" class="btn btn-danger btn-sm delete">
                                        <i class="fas fa-trash-alt"></i>
                                        Hapus
                                    </a>
                                </td>
                            </tr>
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