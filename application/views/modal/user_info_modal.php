<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">User <span class="badge <?= ($user['is_active'] == '1' ? "badge-success" : "badge-danger"); ?>"><?= ($user['is_active'] == '1' ? "Active" : "Not Active"); ?></span></h5>
    <button class="close close-modal-edit-role" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama_user" class="font-weight-bolder">
                <i class="fas fa-fw fa-address-card"></i>
                Nama User :
            </label>
            <input type="text" class="form-control-plaintext" id="nama_user" placeholder="Nama Lengkap" name="nama_user" value="<?= $user['nama']; ?>" readonly>
            <?= form_error('nama_user', '<small class="text-danger ">', '</small>'); ?>
        </div>
        <div class="form-group col-md-6">
            <label for="mail_user" class="font-weight-bolder">
                <i class="fas fa-fw fa-envelope"></i>
                Email Address :
            </label>
            <input type="email" class="form-control-plaintext" id="mail_user" placeholder="You Email Address" name="mail_user" value="<?= $user['email']; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="username" class="font-weight-bolder">
                <i class="far fa-fw fa-user"></i>
                Username :
            </label>
            <input type="text" class="form-control-plaintext" id="username" placeholder="Username " name="username" value="<?= $user['username']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="role" class="font-weight-bolder">
                <i class="fas fa-fw fa-sort-numeric-down"></i>
                Role User :
            </label>
            <input type="text" class="form-control-plaintext" id="role" placeholder=" " name="role" value="<?= $user['role']; ?>" readonly>
        </div>
    </div>
</div>
<div class="modal-footer">

</div>