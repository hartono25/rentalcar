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
                        <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th width="10">#</th>
                                    <th>M_KODE</th>
                                    <th>M_NAMA</th>
                                    <th>M_MERK</th>
                                    <th>M_WARNA</th>
                                    <th>M_NOPOL</th>
                                    <th>M_NOMESIN</th>
                                    <th>M_PEMILIK</th>
                                    <th>M_TAHUN</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($mobil as $m) : ?>
                                    <tr>
                                        <td><?= $no + 1; ?></td>
                                        <td><?= $m['kode_mobil']; ?></td>
                                        <td><?= $m['nama_mobil']; ?></td>
                                        <td><?= $m['merk_mobil']; ?></td>
                                        <td><?= $m['warna']; ?></td>
                                        <td><?= $m['no_polisi']; ?></td>
                                        <td><?= $m['no_mesin']; ?></td>
                                        <td><?= $m['nama_pemilik']; ?></td>
                                        <td><?= $m['tahun']; ?></td>
                                        <td>
                                            <a href="#" onclick="javascript:sendValue('<?= $m['kode_mobil']; ?>','<?= $m['nama_mobil']; ?>','<?= $m['no_polisi']; ?>','<?= $m['warna']; ?>','<?= $m['tahun']; ?>','<?= $m['merk_mobil']; ?>')" class="btn btn-warning btn-sm">
                                                <i class="fas fa-fw fa-check-square"></i>
                                                Pilih Mobil
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