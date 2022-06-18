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
            </div>
        </div>
        <div class="card-body">
            <?php if ($tambah == '1') : ?>
                <div class="text-left mb-4">
                    <a href="<?= site_url('master/mobil/merk') ?>" class="btn btn-secondary">
                        Merk Mobil</a>
                    <!-- <a href="#" class="btn btn-primary">
                        Warna Mobil</a> -->
                    <a href="<?= site_url('master/mobil/tambah-mobil') ?>" class="btn btn-info">
                        Master Mobil</a>
                </div>
            <?php endif; ?>
            <hr>

            <div class="table-responsive">
                <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th width="10">#</th>
                            <th>NAMA</th>
                            <th>WARNA</th>
                            <th>NO.POLISI</th>
                            <th>NO.RANGKA</th>
                            <th>NO.MESIN</th>
                            <th>IS ACTIVE</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($datamobil as $dm) : ?>
                            <tr>
                                <td><?= $no + 1; ?></td>
                                <td><?= $dm['nama_mobil']; ?></td>
                                <td><?= $dm['warna']; ?></td>
                                <td><?= $dm['no_polisi']; ?></td>
                                <td><?= $dm['no_rangka']; ?></td>
                                <td><?= $dm['no_mesin']; ?></td>
                                <td class="text-center"><?= $dm['is_active']; ?></td>
                                <td class="text-center">
                                    <a data-toggle="modal" href="#infoMobilModal" data-backdrop="static" data-id="<?= $dm['mobil_id']; ?>" class='btn btn-warning btn-sm'>
                                        <i class="fas fa-fw fa-eye"></i>
                                        Detail
                                    </a>
                                    <?= ($edit == '0' ? "" : "<a href='" . site_url('master/mobil/edit-mobil/' . $dm['mobil_id']) . "' class='btn btn-success btn-sm'>
                                        <i class='fas fa-fw fa-edit'></i>
                                        Edit
                                    </a>"); ?>

                                    <?= ($hapus == '0' ? "" : "<a data-id='" . $dm['mobil_id'] . "' href='" . base_url('master/mobil/hapus-mobil') . "' class='btn btn-danger btn-sm delete'>
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


<div class="modal fade" id="infoMobilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="mobil-data"></div>
        </div>
    </div>
</div>