<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-7 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-fw fa-pencil-alt"></i>
                        Edit User
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= site_url('master/user/edit-user/' . $user['kode']); ?>">
                        <?= csrf(); ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_user">
                                    <i class="fas fa-fw fa-address-card"></i>
                                    Nama User
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_user" placeholder="Nama Lengkap" name="nama_user" value="<?= $user['nama']; ?>">
                                <?= form_error('nama_user', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mail_user">
                                    <i class="fas fa-fw fa-envelope"></i>
                                    Email Address
                                </label>
                                <input type="email" class="form-control form-control-sm" id="mail_user" placeholder="You Email Address" name="mail_user" value="<?= $user['email']; ?>">
                                <?= form_error('mail_user', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">
                                    <i class="far fa-fw fa-user"></i>
                                    Username
                                </label>
                                <input type="text" class="form-control form-control-sm" id="username" placeholder="Username " name="username" value="<?= $user['username']; ?>">
                                <?= form_error('username', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password_user">
                                    <i class="fas fa-fw fa-lock"></i>
                                    Your Password
                                </label>
                                <input type="password" class="form-control form-control-sm" id="password_user" placeholder=" " name="password_user">
                                <?= form_error('password_user', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="role">
                                    <i class="fas fa-fw fa-sort-numeric-down"></i>
                                    Role User
                                </label>
                                <select class="form-control form-control-sm" name="role" id="role">
                                    <option value="<?= $user['id']; ?>"><?= $user['role']; ?></option>
                                    <?php foreach ($role as $r) : ?>
                                        <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('role', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="is_active_user">Active</label>
                                <select id="is_active_user" class="form-control form-control-sm" name="is_active_user">
                                    <?php if ($user['is_active'] == 1) : ?>
                                        <option value="<?= $user['is_active']; ?>">Active</option>
                                        <option value="0">No</option>
                                        <option value="1">Active</option>
                                    <?php else : ?>
                                        <option value="<?= $user['is_active']; ?>">No</option>
                                        <option value="0">No</option>
                                        <option value="1">Active</option>
                                    <?php endif; ?>
                                </select>
                                <?= form_error('is_active_user', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                        </div>

                        <hr>

                        <div class="text-right">
                            <a href="<?= site_url('master/user'); ?>" class="btn btn-secondary">
                                <i class="fas fa-window-close"></i>
                                Cancel</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-fw fa-pen-square"></i>
                                Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->