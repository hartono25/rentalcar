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
                        <a href="<?= site_url('master/driver/tambah') ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-user-plus"></i>
                            Tambah Driver
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
                            <th>KODE</th>
                            <th>NAMA</th>
                            <th>NO.KTP</th>
                            <th>NO.SIM</th>
                            <th>NO.TELP</th>
                            <th>ACTIVE</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($datadriver as $dm) : ?>
                            <tr>
                                <td><?= $no + 1; ?></td>
                                <td><?= $dm['kode_driver']; ?></td>
                                <td><?= $dm['nama_driver']; ?></td>
                                <td><?= $dm['no_ktp']; ?></td>
                                <td><?= $dm['no_sim']; ?></td>
                                <td><?= $dm['no_telp_driver']; ?></td>
                                <td class="text-center"><?= $dm['is_active']; ?></td>
                                <td class="text-center">
                                    <a data-toggle="modal" href="#infoDriverModal" data-backdrop="static" data-id="<?= $dm['driver_id']; ?>" class='btn btn-warning btn-sm'>
                                        <i class="fas fa-fw fa-eye"></i>
                                        Detail
                                    </a>
                                    <?= ($edit == '0' ? "" : "<a href='" . site_url('master/driver/edit/' . $dm['driver_id']) . "' class='btn btn-success btn-sm'>
                                        <i class='fas fa-fw fa-edit'></i>
                                        Edit
                                    </a>"); ?>

                                    <?= ($hapus == '0' ? "" : "<a data-id='" . $dm['driver_id'] . "' href='" . base_url('master/driver/hapus') . "' class='btn btn-danger btn-sm delete'>
                                        <i class='fas fa-trash-alt'></i>
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

<div class="modal fade" id="infoDriverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="driver-data"></div>
        </div>
    </div>
</div>