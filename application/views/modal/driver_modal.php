<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">New Customer</h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

<div class="modal-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th width="10">#</th>
                    <th width="90">D_KODE</th>
                    <th>D_NAMA</th>
                    <th>D_NOTELP</th>
                    <th width="150">Pilih</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                <?php foreach ($driver as $d) : ?>
                    <tr>
                        <td><?= $no + 1; ?></td>
                        <td class="text-center"><?= $d['kode_driver']; ?></td>
                        <td><?= $d['nama_driver']; ?></td>
                        <td><?= $d['no_telp_driver']; ?></td>
                        <td class="text-center">
                            <button type="button" id="pilihDriver" data-id="<?= $d['driver_id']; ?>" class="btn btn-info btn-sm">
                                <i class="fas fa-fw fa-check-square"></i>
                                Pilih Driver
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