<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Mobil</h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

<div class="modal-body">
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
                        <td class="text-center"><?= $no + 1; ?></td>
                        <td class="text-center"><?= $m['kode_mobil']; ?></td>
                        <td><?= $m['nama_mobil']; ?></td>
                        <td><?= $m['merk_mobil']; ?></td>
                        <td><?= $m['warna']; ?></td>
                        <td><?= $m['no_polisi']; ?></td>
                        <td><?= $m['no_mesin']; ?></td>
                        <td><?= $m['nama_pemilik']; ?></td>
                        <td class="text-center"><?= $m['tahun']; ?></td>
                        <td class="text-center">
                            <button type="button" href="#" id="pilihMobil" data-id="<?= $m['mobil_id']; ?>" class="btn btn-info btn-sm">
                                <i class="fas fa-fw fa-check-square"></i>
                                Pilih Mobil
                            </button>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal-footer bg-dark justify-content-start">
    <button type="button" data-dismiss="modal" class="btn btn-light">
        <i class="fas fa-window-close"></i>
        Cancel
    </button>
</div>