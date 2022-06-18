<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">User Management</h6>
                </div>
                <?php if ($tambah == '1') : ?>
                    <div class="form-group col-md-6 text-right">
                        <a href="<?= site_url('master/user/tambah-user') ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-user-plus"></i>
                            Tambah User
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
                            <th>Nama User</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Active</th>
                            <th>Date Created</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($datauser as $dm) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $dm['nama']; ?></td>
                                <td><?= $dm['username']; ?></td>
                                <td><?= $dm['email']; ?></td>
                                <td><?= $dm['role']; ?></td>
                                <td class="text-center"><?= $dm['is_active']; ?></td>
                                <td><?= date_indo(date_strtotime($dm['date_created'])); ?></td>
                                <td class="text-center">
                                    <a data-toggle="modal" href="#userInfoModal" data-backdrop="static" data-id="<?= $dm['kode']; ?>" class='btn btn-warning btn-sm'>
                                        <i class="fas fa-fw fa-eye"></i>
                                        Detail
                                    </a>
                                    <?= ($edit == '0' ? "" : "<a href='" . site_url('master/user/edit-user/' . $dm['kode']) . "' class='btn btn-success btn-sm'>
                                        <i class='fas fa-fw fa-edit'></i>
                                        Edit
                                    </a>"); ?>
                                    <?= ($hapus == '0' ? "" : "<a data-id='" . $dm['kode'] . "' href='" . base_url('master/user/hapus') . "' class='btn btn-danger btn-sm delete'>
                                        <i class='fas fa-fw fa-trash-alt'></i>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="userInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="user-data"></div>
        </div>
    </div>
</div>