<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel"><?= $title; ?></h5>
    <button class="close close-modal-edit-tipe text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= site_url('master/tipe-order/edit'); ?>">
    <?= csrf(); ?>
    <input type="hidden" name="id" value="<?= $edit['order_tipe_id']; ?>">
    <div class="modal-body">
        <div class="form-group row">
            <label for="role_user" class="col-sm-3 col-form-label">Tipe Order</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-sm" name="nama_tipe" id="nama_tipe" value="<?= $edit['nama_tipe']; ?>">
                <?= form_error('nama_tipe', '<small class="text-danger">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="role_user" class="col-sm-3 col-form-label">Is Active</label>
            <div class="col-sm-9">
                <select name="is_active" id="is_active" class="form-control form-control-sm">
                    <option value="<?= $edit['is_active'] ?>"><?= ($edit['is_active'] == '1' ? "Active" : "No"); ?></option>
                    <option value="0">No</option>
                    <option value="1">Active</option>
                </select>
            </div>
        </div>
    </div>

    <div class="modal-footer bg-dark">
        <button class="btn btn-light close-modal-edit-tipe" type="button" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
        <button type="submit" class="btn btn-primary" id="simpan_menu">
            <i class="fas fa-fw fa-pen-square"></i>
            Update Tipe Order
        </button>
    </div>
</form>

<script>
    $('.close-modal-edit-tipe').on('click', function(e) {
        e.preventDefault();
        window.location = "<?= site_url('master/tipe-order') ?>";
    });
</script>