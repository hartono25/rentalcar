<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
    <button class="close close-modal-edit-role text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            <label for="kode_merk" class="font-weight-bolder">
                <i class="fas fa-fw fa-barcode"></i>
                Kode Merk
            </label>
            <input type="text" class="form-control-plaintext" id="kode_merk" placeholder="Kode Merk Mobil" name="kode_merk" value="<?= $edit['kode_merk']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="merk_mobil" class="font-weight-bolder">
                <i class="fas fa-fw fa-car"></i>
                Nama Merk Mobil
            </label>
            <input type="text" class="form-control-plaintext" id="merk_mobil" placeholder="Nama Merk Mobil" name="merk_mobil" value="<?= $edit['merk_mobil']; ?>" readonly>
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            <label for="tipe_mobil" class="font-weight-bolder">
                <i class="fas fa-fw fa-car"></i>
                Nama Tipe Mobil
            </label>
            <input type="text" class="form-control-plaintext" id="tipe_mobil" placeholder="Nama Tipe Mobil " name="tipe_mobil" value="<?= $edit['tipe_mobil']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="produksi_mobil" class="font-weight-bolder">
                <i class="fas fa-fw fa-building"></i>
                Produksi
            </label>
            <input type="text" class="form-control-plaintext" id="produksi_mobil" placeholder="Produksi By " name="produksi_mobil" value="<?= $edit['produksi_by']; ?>" readonly>
        </div>
    </div>
</div>

<div class="modal-footer">

</div>