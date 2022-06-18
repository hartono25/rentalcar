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
                                    <th>C_KODE</th>
                                    <th>C_NAMA</th>
                                    <th>C_NOTELP</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($customer as $c) : ?>
                                    <tr>
                                        <td><?= $no + 1; ?></td>
                                        <td><?= $c['kode_customer']; ?></td>
                                        <td><?= $c['nama_customer']; ?></td>
                                        <td><?= $c['no_telp_customer1']; ?></td>
                                        <td>
                                            <a href="#" onclick="javascript:sendValue('<?= $c['kode_customer']; ?>','<?= $c['nama_customer']; ?>','<?= $c['no_telp_customer1']; ?>')" class="btn btn-warning btn-sm">
                                                <i class="fas fa-fw fa-check-square"></i>
                                                Pilih Customer
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
        window.opener.document.getElementById('so_customer').value = r;
        window.opener.document.getElementById('so_nama').value = s;
        window.opener.document.getElementById('so_telp').value = t;
        window.close();
    }
</script>