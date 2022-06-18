<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Menu Management</h6>
                </div>
                <?php if ($tambah == '1') : ?>
                    <div class="form-group col-md-6 text-right">
                        <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#menuModal" data-backdrop="static">
                            <i class="fas fa-fw fa-plus-square"></i>
                            Tambah Menu
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
                            <th>Nama Menu</th>
                            <th>URL Site</th>
                            <th>Icon Menu</th>
                            <th>Level Menu</th>
                            <th>posisi</th>
                            <th>is active</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($datamenu as $dm) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <div <?= ($dm['level_menu'] == 'sub' ? "class='ml-4'" : ""); ?>>
                                        <?= $dm['nama_menu']; ?>
                                    </div>
                                </td>
                                <td><?= $dm['url']; ?></td>
                                <td><?= $dm['icon']; ?></td>
                                <td>
                                    <div <?= ($dm['level_menu'] == 'sub' ? "class='ml-4'" : ""); ?>>
                                        <?= $dm['level_menu']; ?>
                                    </div>
                                </td>
                                <td><?= $dm['no_urut']; ?></td>
                                <td><?= $dm['is_active']; ?></td>
                                <td class="text-center">
                                    <a data-toggle="modal" href="#menuEditModal" data-backdrop="static" data-id="<?= $dm['menu_id']; ?>" class="btn btn-success btn-sm">
                                        <i class="fas fa-fw fa-edit"></i>
                                        Edit
                                    </a>
                                    <a data-id="<?= $dm['menu_id']; ?>" href="<?= base_url('menu/menu-management/hapus'); ?>" class="btn btn-danger btn-sm delete">
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