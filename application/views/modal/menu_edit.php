<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Edit Menu Management</h5>
    <button class="close close-modal-simpan-menu text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= base_url('menu/menu-management/edit'); ?>">
    <?= csrf(); ?>
    <input type="hidden" name="id" value="<?= $menu['menu_id']; ?>">
    <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama_menu">
                    <i class="far fa-fw fa-folder"></i>
                    Nama Menu
                </label>
                <input type="text" class="form-control form-control-sm" id="nama_menu" placeholder="Nama Menu" name="nama_menu" value="<?= $menu['nama_menu']; ?>">
                <?= form_error('nama_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6">
                <label for="icon_menu">
                    <i class="far fa-fw fa-images"></i>
                    Icon
                </label>
                <input type="text" class="form-control form-control-sm" id="icon_menu" placeholder="Icon for menu" name="icon_menu" value="<?= $menu['icon']; ?>">
                <?= form_error('icon_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="url_menu">
                    <i class="fas fa-fw fa-link"></i>
                    URL Site
                </label>
                <input type="text" class="form-control form-control-sm" id="url_menu" placeholder="Site URL" name="url_menu" value="<?= $menu['url']; ?>">
                <?= form_error('url_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6">
                <label for="level_menu">
                    <i class="fas fa-fw fa-layer-group"></i>
                    Level Menu
                </label>
                <select class="form-control form-control-sm" name="level_menu" id="level_menu" value="<?= set_value('level_menu') ?>">
                    <?php if ($menu['level_menu'] == 'main') : ?>
                        <option value="<?= $menu['level_menu']; ?>">Main Menu</option>
                        <option value="sub">Sub Menu</option>
                    <?php elseif ($menu['level_menu'] == 'sub') : ?>
                        <option value="<?= $menu['level_menu']; ?>">Sub Menu</option>
                        <option value="main">Main Menu</option>
                    <?php endif; ?>
                </select>
                <?= form_error('level_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="urutan_menu">
                    <i class="fas fa-fw fa-sort-numeric-down"></i>
                    Urutan Menu
                </label>
                <input type="number" class="form-control form-control-sm" id="urutan_menu" name="urutan_menu" placeholder="0" value="<?= $menu['no_urut']; ?>">
                <?= form_error('urutan_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
                <label for="is_active_menu">Active</label>
                <select id="is_active_menu" class="form-control form-control-sm" name="is_active_menu" value="<?= set_value('is_active_menu') ?>">
                    <?php if ($menu['is_active'] == '1') : ?>
                        <option value="<?= $menu['is_active']; ?>">Active</option>
                        <option value="0">No</option>
                    <?php elseif ($menu['is_active'] == '0') : ?>
                        <option value="<?= $menu['is_active']; ?>">No</option>
                        <option value="1">Active</option>
                    <?php endif; ?>
                </select>
                <?= form_error('is_active_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6" id="mainmenu">
                <label for="sub_for_menu">Main Menu</label>
                <input type="text" class="form-control form-control-sm" name="sub_for_menu" id="sub_for_menu" value="<?= $menu['main_menu']; ?>">
                <?= form_error('sub_for_menu', '<small class="text-danger">', '</small>'); ?>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-dark">
        <button class="btn btn-light close-modal-simpan-menu" type="button" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
        <button type="submit" class="btn btn-primary" id="simpan_menu">
            <i class="fas fa-fw fa-pen-square"></i>
            Update Menu
        </button>
    </div>
</form>

<script>
    $('.close-modal-simpan-menu').on('click', function(e) {
        e.preventDefault();
        window.location = "<?= site_url('menu/menu-management') ?>";
    });
</script>