<div class="">
    <div class="">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

            <div class="card shadow mt-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="m-0 font-weight-bold text-primary">Load Sales Order</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- <form action="<?php// base_url('home/data-load-so'); ?>" method="post"> -->
                    <form method="POST">
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <input type="date" name="tgl_start" id="tgl_start" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_finish" id="tgl_finish" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <select name="select" id="select" class="form-control">
                                    <option>- Status Order -</option>
                                    <option value="order">order</option>
                                    <option value="finish">finish</option>
                                    <option value="void">void</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-success" id="btn_proses">Proses Data</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No. Sales Order</th>
                                    <th>Customer</th>
                                    <th>Merk / Type</th>
                                    <th>No. Polisi</th>
                                    <th>No. Mesin</th>
                                    <th>Driver</th>
                                    <th>Tgl Start</th>
                                    <th>Status</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                                <?php// $no = 0; ?>
                                <?php //foreach ($list as $l) : 
                                ?>
                                <!-- <tr>
                                        <td><?= $no + 1; ?></td>
                                        <td><?= $l['kode_so']; ?></td>
                                        <td><?= $l['nama_customer']; ?></td>
                                        <td><?= $l['nama_mobil']; ?></td>
                                        <td><?= $l['no_polisi']; ?></td>
                                        <td><?= $l['no_mesin']; ?></td>
                                        <td><?= $l['nama_driver']; ?></td>
                                        <td><?= date('d/m/Y H:i:s', $l['tgl_start']); ?></td>
                                        <td><?= $l['status_order']; ?></td>
                                        <td>
                                            <a data-toggle="modal" href="#soEditModal" data-backdrop="static" data-id="<?= $l['so_id']; ?>" class="btn btn-success btn-sm">
                                                <i class="fas fa-fw fa-edit"></i>
                                                Edit
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#addSOModal" class="btn btn-danger btn-sm">
                                                Void
                                            </a>
                                        </td>
                                    </tr> -->
                                <?php// $no++; ?>
                                <?php// endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="soEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="so-data"></div>
        </div>
    </div>
</div>


<script>
    function sendValue(r, s, t, u, v, w) {
        window.opener.document.getElementById('so_mobil').value = r;
        window.opener.document.getElementById('so_nama_mobil').value = s;
        window.opener.document.getElementById('no_polisi').value = t;
        window.opener.document.getElementById('warna').value = u;
        window.opener.document.getElementById('tahun').value = v;
        window.opener.document.getElementById('tipe_merk').value = w;
        window.close();
    }
</script>