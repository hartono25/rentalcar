<div class="">
    <div class="">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

            <div class="card shadow mt-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th width="10">#</th>
                                    <th>D_KODE</th>
                                    <th>D_NAMA</th>
                                    <th>D_NOTELP</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($driver as $d) : ?>
                                    <tr>
                                        <td><?= $no + 1; ?></td>
                                        <td><?= $d['kode_driver']; ?></td>
                                        <td><?= $d['nama_driver']; ?></td>
                                        <td><?= $d['no_telp_driver']; ?></td>
                                        <td>
                                            <a href="#" onclick="javascript:sendValue('<?= $d['kode_driver']; ?>','<?= $d['nama_driver']; ?>','<?= $d['no_telp_driver']; ?>')" class="btn btn-warning btn-sm">
                                                <i class="fas fa-fw fa-check-square"></i>
                                                Pilih Driver
                                            </a>
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
    </div>
</div>


<script>
    function sendValue(r, s, t) {
        window.opener.document.getElementById('so_driver').value = r;
        window.opener.document.getElementById('so_nama_driver').value = s;
        window.opener.document.getElementById('so_telp_driver').value = t;
        window.close();
    }
</script>