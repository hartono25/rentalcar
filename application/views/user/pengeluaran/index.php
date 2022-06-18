<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header bg-info py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-white">Pengeluaran Kas</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-left mb-4">
                        <a href="#" data-toggle="modal" data-target="#pengeluaranModal" data-backdrop="static" class="btn btn-info btn-sm">
                            Pengeluaran
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-6 text-right"> -->
                <!-- </div> -->
            </div>
            <hr>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th width="10">#</th>
                            <th width="90">TANGGAL</th>
                            <th width="150">VOUCHER</th>
                            <th>DEBET</th>
                            <th>KREDIT</th>
                            <th>JENIS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($list as $k) : ?>
                            <tr>
                                <td class="text-center"><?= ($no + 1) . '.'; ?></td>
                                <td><?= date('d/m/Y', strtotime($k['p_tanggal'])); ?></td>
                                <td class="text-center"><?= $k['kode_kas']; ?></td>
                                <td class="text-right"><?= rupiah($k['debet']); ?></td>
                                <td class="text-right"><?= rupiah($k['kredit']); ?></td>
                                <td><?= $k['jenis']; ?></td>
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