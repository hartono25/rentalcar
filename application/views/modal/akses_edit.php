<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Edit User Role</h5>
    <button class="close close-modal-edit-role text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= site_url('menu/access-management/edit'); ?>">
    <?= csrf(); ?>
    <input type="hidden" name="id" value="<?= $role['id']; ?>">
    <div class="modal-body">
        <div class="form-group row">
            <label for="role_user" class="col-sm-3 col-form-label">Role User</label>
            <div class="col-sm-9">
                <input type="text" class="form-control form-control-sm" name="role_user" id="role_user" value="<?= $role['role']; ?>">
                <?= form_error('role_user', '<small class="text-danger">', '</small>'); ?>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-dark">
        <button class="btn btn-light close-modal-edit-role" type="button" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
        <button type="submit" class="btn btn-primary" id="simpan_menu">
            <i class="fas fa-fw fa-pen-square"></i>
            Update Role User
        </button>
    </div>
</form>

<script>
    $('.close-modal-edit-role').on('click', function(e) {
        e.preventDefault();
        window.location = "<?= site_url('menu/access-management') ?>";
    });
</script>