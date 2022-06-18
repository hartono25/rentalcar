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
                <tr class="text-center bg-gray-200">
                    <th width="50">#</th>
                    <th width="90">C_KODE</th>
                    <th>C_NAMA</th>
                    <th>C_NOTELP</th>
                    <th width="200">Pilih</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                <?php foreach ($customer as $c) : ?>
                    <tr>
                        <td><?= $no + 1; ?></td>
                        <td class="text-center"><?= $c['kode_customer']; ?></td>
                        <td><?= $c['nama_customer']; ?></td>
                        <td><?= $c['no_telp_customer1']; ?></td>
                        <td class="text-center">
                            <button type="button" href="#" id="pilihCust" class="btn btn-info btn-sm" data-id="<?= $c['customer_id']; ?>">
                                <i class="fas fa-fw fa-check-square"></i>
                                Pilih Customer
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