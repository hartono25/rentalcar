<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Sales Order</h5>
    <a class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </a>
</div>
<div class="modal-body">
    <div class="table-responsive">
        <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>NO_ORDER</th>
                    <th>TGL_START</th>
                    <th>TGL_END</th>
                    <th>NO_POL</th>
                    <th>MOBIL</th>
                    <th>SISA</th>
                    <th>SEWA</th>
                    <th>DP</th>
                    <th>OVERTIME</th>
                    <th>BAYAR</th>
                    <th>Pilih</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $so) : ?>
                    <?php $sisa       = $so['harga_sewa'] - $so['pembayaran_dp']; ?>
                    <?php
                    $overtime   = time() - strtotime($so['tgl_end']);
                    $jam        = floor($overtime / (60 * 60));
                    ?>
                    <tr>
                        <td><?= $so['kode_so']; ?></td>
                        <td><?= date('d//m/Y h:i:s A', strtotime($so['tgl_start'])); ?></td>
                        <td><?= date('d//m/Y h:i:s A', strtotime($so['tgl_end'])); ?></td>
                        <td><?= $so['no_polisi']; ?></td>
                        <td><?= $so['nama_mobil']; ?></td>
                        <td><?= number_format($sisa); ?></td>
                        <td><?= number_format($so['harga_sewa']); ?></td>
                        <td><?= number_format($so['pembayaran_dp']); ?></td>
                        <td><?= number_format(denda($so['so_id'])); ?></td>
                        <td><?= 0; ?></td>
                        <td class="text-center">
                            <a href="#" id="pilih" data-id="<?= $so['so_id']; ?>" class="btn btn-info">Pilih</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal-footer bg-dark justify-content-start">
    <button type="button" data-dismiss="modal" class="btn btn-light">
        <i class="fas fa-window-close"></i>
        Close
    </button>
</div>