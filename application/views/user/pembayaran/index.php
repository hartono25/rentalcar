<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header bg-success py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-white">INFORMASI PAYMENT TERKINI</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-left mb-4">
                        <a href="#" data-toggle="modal" data-target="#paymentModal" data-backdrop="static" class="btn btn-info btn-sm">
                            New Payment
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-6 text-right"> -->
                <!-- </div> -->
            </div>
            <hr>

            <div class="table-responsive">
                <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th width="10">#</th>
                            <th>NO_ORDER</th>
                            <th>TIPE</th>
                            <th>AKHIR</th>
                            <th>OVERTIME</th>
                            <th>CUSTOMER</th>
                            <th>DRIVER</th>
                            <th>NOPOL</th>
                            <th>MESIN</th>
                            <th>RANGKA</th>
                            <th>WARNA</th>
                            <th>TAHUN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($so as $s) : ?>
                            <?php $sisa = time() - strtotime($s['tgl_end']); ?>
                            <?php $jam = floor($sisa / (60 * 60)); ?>
                            <?php if ($s['status_order'] == 'finish') : ?>
                                <tr>
                                    <td><?= $no + 1; ?></td>
                                    <td><?= $s['kode_so']; ?></td>
                                    <td><?= $s['tipe_order']; ?></td>
                                    <td><?= date('d/m/Y H:i:s', strtotime($s['tgl_end'])); ?></td>
                                    <td><?= $jam; ?></td>
                                    <td><?= $s['nama_customer']; ?></td>
                                    <td><?= $s['nama_driver']; ?></td>
                                    <td><?= $s['no_polisi']; ?></td>
                                    <td><?= $s['no_mesin']; ?></td>
                                    <td><?= $s['no_rangka']; ?></td>
                                    <td><?= $s['warna']; ?></td>
                                    <td><?= $s['tahun']; ?></td>
                                </tr>
                                <?php $no++; ?>
                            <?php endif;
                            ?>
                        <?php endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->