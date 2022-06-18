<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Void Sales Order</h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

<form action="<?= site_url('transaksi/sales-order/void-so') ?>" method="post">
    <?= csrf(); ?>
    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
    <div class="modal-body">
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" rows="10" class="form-control"></textarea>
        </div>
    </div>
    <div class="modal-footer bg-dark justify-content-start">
        <button type="button" data-dismiss="modal" class="btn btn-light">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-fw fa-save"></i>
            Simpan
        </button>
    </div>
</form>