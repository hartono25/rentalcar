<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Access Management</h5>
    <button class="close close-modal-akses-role text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= site_url('menu/access-management/simpan_role_akses') ?>">
    <?= csrf(); ?>
    <div class="modal-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center bg-info text-white">
                        <th width="10">#</th>
                        <th>Nama Menu</th>
                        <th>Level Menu</th>
                        <th>Akses</th>
                        <th>Tambah</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                    <input type="hidden" name="kode" id="kode" value="<?= hash('sha1', $id); ?>">
                    <?php
                    $no = 0;
                    foreach ($list as $ma) : ?>
                        <tr>
                            <td>
                                <?= $no + 1; ?>
                            </td>
                            <td>
                                <div <?= $ma['level_menu'] == 'sub' ? "class='ml-4'" : ""; ?>><?= $ma['nama_menu']; ?></div>
                            </td>
                            <td class="text-center"><?= $ma['level_menu']; ?></td>
                            <td class="text-center">
                                <?= inputToggle($no, $ma['akses'], 'akses'); ?>
                            </td>
                            <?php if ($ma['level_menu'] == 'sub') : ?>
                                <td class="text-center">
                                    <?= inputToggle($no, $ma['tambah'], 'tambah'); ?>
                                </td>
                                <td class="text-center">
                                    <?= inputToggle($no, $ma['edit'], 'edit'); ?>
                                </td>
                                <td class="text-center">
                                    <?= inputToggle($no, $ma['hapus'], 'hapus'); ?>
                                </td>
                            <?php else : ?>
                                <td colspan="3"></td>
                            <?php endif; ?>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
    <div class="modal-footer bg-dark">
        <button class="btn btn-light close-modal-akses-role" type="button" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
        <button type="submit" class="btn btn-primary" id="simpan_menu">
            <i class="fas fa-fw fa-pen-square"></i>
            Simpan Access
        </button>
    </div>
</form>

<script>
    $('.close-modal-akses-role').on('click', function(e) {
        e.preventDefault();
        window.location = "<?= site_url('menu/access-management') ?>";
    });
</script>