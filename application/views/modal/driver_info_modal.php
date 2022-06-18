<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Detail <span class="badge <?= ($edit['is_active'] == '1' ? "badge-success" : "badge-danger"); ?>"><?= ($edit['is_active'] == '1' ? "Active" : "Not Active"); ?></span></h5>
    <button class="close close-modal-edit-role text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="kode_driver" class="font-weight-bolder">
                <i class="fas fa-fw fa-barcode"></i>
                KODE
            </label>
            <input type="text" class="form-control-plaintext" id="kode_driver" placeholder="Kode Driver" name="kode_driver" value="<?= $edit['kode_driver']; ?>" readonly>
        </div>
        <div class="form-group col-md-5">
            <label for="nama_driver" class="font-weight-bolder">
                <i class="fas fa-fw fa-address-card"></i>
                NAMA DRIVER
            </label>
            <input type="text" class="form-control-plaintext" id="nama_driver" placeholder="Nama Lengkap Driver" name="nama_driver" value="<?= $edit['nama_driver']; ?>" readonly>
        </div>
        <div class="form-group col-md-5">
            <label for="no_telp_driver" class="font-weight-bolder">
                <i class="fas fa-fw fa-phone-square"></i>
                NO. TELP
            </label>
            <input type="text" class="form-control-plaintext" id="no_telp_driver" placeholder="Nomor Telepon Driver" name="no_telp_driver" value="<?= $edit['no_telp_driver']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama_saudara" class="font-weight-bolder">
                <i class="fas fa-fw fa-user"></i>
                SAUDARA KANDUNG
            </label>
            <input type="text" class="form-control-plaintext" id="nama_saudara" placeholder="Nama Saudara Kandung" name="nama_saudara" value="<?= $edit['nama_saudara']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="no_telp_saudara" class="font-weight-bolder">
                <i class="fas fa-fw fa-phone-square"></i>
                NO. TELP
            </label>
            <input type="text" class="form-control-plaintext" id="no_telp_saudara" placeholder="Nomor Telepon Saudara" name="no_telp_saudara" value="<?= $edit['no_telp_saudara']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="no_ktp" class="font-weight-bolder">
                <i class="fas fa-fw fa-id-card-alt"></i>
                NO. KTP
            </label>
            <input type="text" class="form-control-plaintext" id="no_ktp" placeholder="Nomor KTP Driver" name="no_ktp" value="<?= $edit['no_ktp']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="no_sim" class="font-weight-bolder">
                <i class="fas fa-fw fa-id-card-alt"></i>
                NO. SIM
            </label>
            <input type="text" class="form-control-plaintext" id="no_sim" placeholder="Nomor SIM Driver" name="no_sim" value="<?= $edit['no_sim']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="alamat_ktp" class="font-weight-bolder">
                <i class="fas fa-fw fa-map-marker-alt"></i>
                ALAMAT KTP
            </label>
            <textarea name="alamat_ktp" id="alamat_ktp" rows="3" class="form-control form-control-sm" placeholder="Alamat Sesuai KTP Driver" readonly><?= $edit['alamat_ktp']; ?></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="alamat_domisili" class="font-weight-bolder">
                <i class="fas fa-fw fa-map-marker-alt"></i>
                ALAMAT DOMISILI
            </label>
            <textarea name="alamat_domisili" id="alamat_domisili" rows="3" class="form-control form-control-sm" placeholder="Alamat Domisili Driver" readonly><?= $edit['alamat_domisili']; ?></textarea>
        </div>
    </div>
</div>

<div class="modal-footer bg-dark">
    <div class="col-md-6">
        <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_driver']; ?>" data-jenis="ktp" data-keterangan="driver" class="btn btn-secondary">
            <i class="far fa-fw fa-id-card"></i>
            KTP</a>
        <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_driver']; ?>" data-jenis="sim" data-keterangan="driver" class="btn btn-secondary">
            <i class="far fa-fw fa-id-card"></i>
            SIM</a>

    </div>
    <div class="col-md-6 text-right">
        <button class="btn btn-light" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
    </div>
</div>