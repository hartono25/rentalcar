<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Display Kas</h5>
    <a class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </a>
</div>
<form method="POST" action="<?= site_url('transaksi/pengeluaran/update') ?>">
    <?= csrf(); ?>
    <input type="hidden" name="id" id="id" value="<?= $kas['pengeluaran_id']; ?>">
    <div class="modal-body">
        <div class="form-group row">
            <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tgl" name="tgl" value="<?= date('Y-m-d', strtotime($kas['p_tanggal'])); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="account" class="col-sm-2 col-form-label">Account</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="account" name="account" value="<?= $kas['jenis']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="debet" class="col-sm-4 col-form-label">Debet</label>
                    <div class="col-sm-8">
                        <input type="number" placeholder="0" class="form-control" id="debet" name="debet" value="<?= $kas['debet']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="kredit" class="col-sm-3 col-form-label">Kredit</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="0" class="form-control" id="kredit" name="kredit" value="<?= $kas['kredit']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $kas['keterangan']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="memo" class="col-sm-2 col-form-label">Kepada</label>
            <div class="col-sm-10">
                <textarea name="memo" id="memo" rows="4" class="form-control" placeholder="Memo"> <?= $kas['memo']; ?></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-dark justify-content-end">
        <button type="button" data-dismiss="modal" class="btn btn-light">
            <i class="fas fa-window-close"></i>
            Close
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-fw fa-pen-square"></i>
            Update
        </button>
    </div>
</form>