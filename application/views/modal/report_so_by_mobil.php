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
                    <th>P_MOBIL</th>
                    <th>M_NAMA</th>
                    <th>M_NOPOL</th>
                    <th>M_NOMESIN</th>
                    <th>M_NORANGKA</th>
                    <th>M_PEMILIK</th>
                    <th>AMT</th>
                    <th>COUNT</th>
                    <th>CETAK</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $so) : ?>
                    <tr>
                        <th><?= $so['kode_mobil'] ?></th>
                        <th>M_NAMA</th>
                        <th>M_NOPOL</th>
                        <th>M_NOMESIN</th>
                        <th>M_NORANGKA</th>
                        <th>M_PEMILIK</th>
                        <th>AMT</th>
                        <th>COUNT</th>
                        <th>CETAK</th>
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