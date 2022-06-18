<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-0">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            STNK Expired
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="<?= site_url('cetak/cetak_expired') ?>" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-print"></i>
                                Print as PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- Content Column -->
        <?php if ($uri != null) : ?>
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <!-- <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            No. Polisi <?= $car['no_polisi']; ?>
                        </h6>
                    </div> -->
                    <div class="card-body">
                        <div class="form-row justify-content-end mb-5 font-weight-bold">
                            Exp Date: <?= date_indo($car['exp_date']); ?>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">NAMA MOBIL</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $car['nama_mobil']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">MERK MOBIL</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $car['merk_mobil']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">NO. POLISI</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $car['no_polisi']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">NO. MESIN</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $car['no_mesin']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">NO. RANGKA</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $car['no_rangka']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">STNK</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $car['nama_stnk']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <?php foreach ($mobil as $c) : ?>
                <?php $hari = expired($c['exp_date']); ?>
                <?php if ($hari <= 30) : ?>
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <!-- <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    No. Polisi <?= $c['no_polisi']; ?>
                                </h6>
                            </div> -->
                            <div class="card-body">
                                <div class="form-row justify-content-end mb-5 font-weight-bold">
                                    Exp Date: <?= date_indo($c['exp_date']); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">NAMA MOBIL</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $c['nama_mobil']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">MERK MOBIL</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $c['merk_mobil']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">NO. POLISI</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $c['no_polisi']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">NO. MESIN</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $c['no_mesin']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">NO. RANGKA</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $c['no_rangka']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">STNK</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext alert-danger pl-3" id="staticEmail" value="<?= $c['nama_stnk']; ?>">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->