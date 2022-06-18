<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <div class="row">
        <?php foreach ($menu as $m) : ?>
            <?php foreach ($submenu as $s) : ?>
                <?php if ($s['main_menu'] == $m['nama_menu'] && $s['main_menu'] == 'Transaksi') : ?>
                    <?php $idmenu = str_replace(" ", "-", strtolower($s['nama_menu'])); ?>
                    <a href="#" data-toggle="modal" data-target="#home" data-backdrop="static" data-menu="<?= $idmenu; ?>" data-id="<?= $s['menu_id']; ?>" class="col-xl-2 col-md-6 mb-4">
                        <div class="card shadow h-100 py-0 bg-info text-white">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?= $s['nama_menu']; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <!-- <i class="far fa-list-alt fa-2x text-gray-300"></i> -->
                                        <i class="<?= $s['icon']; ?> fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php elseif ($s['main_menu'] == $m['nama_menu'] && $s['main_menu'] == 'Report') : ?>
                    <?php $idmenu = str_replace(" ", "-", strtolower($s['nama_menu'])); ?>
                    <a href="#" data-toggle="modal" data-target="#home" data-backdrop="static" data-menu="<?= $idmenu; ?>" data-id="<?= $s['menu_id']; ?>" class="col-xl-2 col-md-6 mb-4">
                        <div class="card shadow h-100 py-0 bg-success text-white">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?= $s['nama_menu']; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <!-- <i class="far fa-list-alt fa-2x text-gray-300"></i> -->
                                        <i class="<?= $s['icon']; ?> fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <a href="<?= site_url('cetak/outstanding_invoice') ?>" class="col-xl-2 col-md-6 mb-4" target="_blank">
            <div class="card shadow h-100 py-0 bg-warning text-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Outstanding Invoice</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-folder-plus fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger">
            <h6 class="m-0 font-weight-bold text-white">Informasi Finish Order Terkini</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO_ORDER</th>
                            <th>TIPE</th>
                            <th>AKHIR</th>
                            <th>SISA_JAM</th>
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
                            <?php if ($jam >= 0) : ?>
                                <tr>
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

<?php// foreach ($menu as $m) : ?>
<?php //foreach ($submenu as $s) : 
?>
<?php //if ($s['main_menu'] == $m['nama_menu'] && $s['main_menu'] == 'Transaksi') : 
?>
<?php //$idmenu = str_replace(" ", "-", strtolower($s['nama_menu'])); 
?>

<!-- <div class="modal fade" id="<?= $idmenu; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content"> -->
<!-- <div id="edit-data"></div> -->
<!-- <div class="modal-body"> -->
<?php// $s['nama_menu']; ?>
<!-- </div>
</div>
</div>
</div> -->

<?php// endif; ?>
<?php //endforeach; 
?>
<?php //endforeach; 
?>

<div class="modal fade" id="home" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="home-data"></div>
        </div>
    </div>
</div>