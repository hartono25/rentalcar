<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold"><?= $title; ?></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="text-left mb-4">
                        <a href="#" data-toggle="modal" data-target="#paymentModal" data-backdrop="static" class="btn btn-info btn-sm">
                            New Payment
                        </a>
                    </div>
                </div>
            </div> -->
            <form method="POST" action="<?= site_url('report/report-order') ?>" target="_blank">
                <div class="row">
                    <div class="col">
                        <select name="filter_by" id="filter_by" class="form-control">
                            <option value="all">Sales Order By Month</option>
                            <option value="mobil">Sales Order By Mobil</option>
                            <option value="customer">Sales Order By Customer</option>
                            <option value="count">Sales Order Count By Mobil</option>
                            <option value="kas">Detail Kas Harian</option>
                            <option value="profit">Profit And Loose</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="tgl_start" id="tgl_start">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="tgl_finish" id="tgl_finish">
                    </div>
                    <div class="col">
                        <button type="submit" name="btn_search" id="btn_search" class="btn btn-info">
                            <i class="fas fa-fw fa-search"></i>
                            Search
                        </button>
                    </div>
                </div>
            </form>
            <hr>
            <?php if ($list) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>P_MOBIL</th>
                                <th>M_NAMA</th>
                                <th>M_NOPOL</th>
                                <th>M_NOMESIN</th>
                                <th>M_NORANGKA</th>
                                <th>M_PEMILIK</th>
                                <th>AMT</th>
                                <th>COUNT</th>
                                <th>CETAK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $so) : ?>
                                <tr>
                                    <th class="text-center"><?= $so['kode_mobil']; ?></th>
                                    <th><?= $so['nama_mobil']; ?></th>
                                    <th><?= $so['no_polisi']; ?></th>
                                    <th><?= $so['no_mesin']; ?></th>
                                    <th><?= $so['no_rangka']; ?></th>
                                    <th><?= $so['nama_pemilik']; ?></th>
                                    <th class="text-right"><?= rupiah($so['ptotal']); ?></th>
                                    <th class="text-center"><?= $so['mobil']; ?></th>
                                    <th class="text-center">
                                        <a href="<?= site_url('cetak/sales_order_by_count_mobil/' . $start . '/' . $end . '/' . $so['mobil_id']) ?>" class="btn btn-info btn-sm">
                                            <i class="fas fa-fw fa-print"></i>
                                            cetak
                                        </a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->