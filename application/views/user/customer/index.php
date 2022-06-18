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
                        <!-- <a href="<?= site_url('cetak/cetak_customer') ?>" target="_blank" class="btn btn-info btn-sm">
                            <i class="fa fa-print"></i>
                            Print as PDF
                        </a> -->
                        <a href="<?= site_url('master/customer/tambah') ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-user-plus"></i>
                            Tambah Customer
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th width="10">#</th>
                            <th>KODE</th>
                            <th>NAMA</th>
                            <th>PERUSAHAAN</th>
                            <th>NO.TELP</th>
                            <th>SIM / KTP</th>
                            <th>NPWP</th>
                            <th width="150">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($customer as $c) : ?>
                            <tr>
                                <td><?= $no + 1; ?></td>
                                <td><?= $c['kode_customer']; ?></td>
                                <td><?= $c['nama_customer']; ?></td>
                                <td><?= $c['nama_perusahaan']; ?></td>
                                <td><?= $c['no_telp_customer1']; ?></td>
                                <td><?= $c['ktp_or_sim']; ?></td>
                                <td><?= $c['npwp']; ?></td>
                                <td class="text-center">
                                    <a data-toggle="modal" href="#custInfoModal" data-backdrop="static" data-id="<?= $c['customer_id']; ?>" class='btn btn-warning btn-sm'>
                                        <i class="fas fa-fw fa-eye"></i>
                                        Detail
                                    </a>

                                    <?= ($edit == '0' ? "" : "<a href='" . site_url('master/customer/edit/' . $c['customer_id']) . "' class='btn btn-success btn-sm'>
                                        <i class='fas fa-fw fa-edit'></i>
                                        Edit
                                    </a>"); ?>

                                    <?= ($hapus == '0' ? "" : "<a data-id='" . $c['customer_id'] . "' href='" . base_url('master/customer/hapus') . "' class='btn btn-danger btn-sm delete'>
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

<div class="modal fade" id="custInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="cust-data"></div>
        </div>
    </div>
</div>