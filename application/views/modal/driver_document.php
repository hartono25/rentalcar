<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Document</h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= site_url('master/' . $keterangan . '/dokumen'); ?>" enctype="multipart/form-data">
    <?= csrf(); ?>
    <div class="modal-body">
        <img src="<?= $gambar; ?>" width="100%">

    </div>
    <div class="modal-footer bg-dark">
        <input type="hidden" name="id" id="id" value="<?= $id; ?>">
        <input type="hidden" name="jenis" id="jenis" value="<?= $jenis; ?>">
        <input type="hidden" name="keterangan" id="keterangan" value="<?= $keterangan; ?>">
        <div class="col-md-6">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="file">Choose file</label>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <button class="btn btn-light" type="button" data-dismiss="modal">
                <i class="fas fa-window-close"></i>
                Cancel
            </button>
            <button type="submit" class="btn btn-primary" id="simpan_menu">
                <i class="fas fa-fw fa-save"></i>
                Simpan
            </button>
        </div>
    </div>
</form>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>