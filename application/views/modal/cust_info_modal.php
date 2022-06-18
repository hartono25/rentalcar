<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
    <button class="close close-modal-edit-role text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="kode_cust" class="font-weight-bolder">
                <i class="fas fa-fw fa-barcode"></i>
                KODE
            </label>
            <input type="text" class="form-control-plaintext" id="kode_cust" placeholder="Kode Customer" name="kode_cust" value="<?= $edit['kode_customer']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="nama_cust" class="font-weight-bolder">
                <i class="fas fa-fw fa-address-card"></i>
                NAMA CUSTOMER
            </label>
            <input type="text" class="form-control-plaintext" id="nama_cust" placeholder="Nama Customer" name="nama_cust" value="<?= $edit['nama_customer']; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="ktp_cust" class="font-weight-bolder">
                KTP / SIM
            </label>
            <input type="text" class="form-control-plaintext" id="ktp_cust" placeholder="No. Identitas Customer" name="ktp_cust" value="<?= $edit['ktp_or_sim']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="npwp_cust" class="font-weight-bolder">
                NPWP
            </label>
            <input type="text" class="form-control-plaintext" id="npwp_cust" placeholder="Username " name="npwp_cust" value="<?= $edit['npwp']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="alamat_cust" class="font-weight-bolder">
                ALAMAT
            </label>
            <textarea name="alamat_cust" id="alamat_cust" rows="3" class="form-control form-control-sm" readonly><?= $edit['alamat_customer'] ?></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telp_cust1" class="font-weight-bolder">
                <i class="fas fa-fw fa-phone-square"></i>
                NO. TELP#1
            </label>
            <input type="text" class="form-control-plaintext" id="telp_cust1" placeholder="No. Telepon Customer" name="telp_cust1" value="<?= $edit['no_telp_customer1']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="telp_cust2" class="font-weight-bolder">
                <i class="fas fa-fw fa-phone-square"></i>
                NO. TELP#2
            </label>
            <input type="text" class="form-control-plaintext" id="telp_cust2" placeholder="No. Telepon Customer" name="telp_cust2" value="<?= $edit['no_telp_customer2']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama_perusahaan" class="font-weight-bolder">
                <i class="fas fa-fw fa-building"></i>
                PERUSAHAAN
            </label>
            <input type="text" class="form-control-plaintext" id="nama_perusahaan" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?= $edit['nama_perusahaan']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="jabatan_cust" class="font-weight-bolder">
                <i class="fas fa-fw fa-user-tie"></i>
                JABATAN
            </label>
            <input type="text" class="form-control-plaintext" id="jabatan_cust" placeholder="Jabatan Customer" name="jabatan_cust" value="<?= $edit['posisi_jabatan']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="mail_cust" class="font-weight-bolder">
                EMAIL
            </label>
            <input type="text" name="mail_cust" id="mail_cust" class="form-control-plaintext" placeholder="Email Customer" value="<?= $edit['email_customer']; ?>" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="keterangan" class="font-weight-bolder">
                KETERANGAN
            </label>
            <textarea name="keterangan" id="keterangan" rows="3" class="form-control form-control-sm" placeholder="Remarks in here..." readonly><?= $edit['keterangan']; ?></textarea>
        </div>
    </div>
</div>

<div class="modal-footer bg-dark justify-content-start">
    <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_customer']; ?>" data-jenis="siup" data-keterangan="customer" class="btn btn-secondary">
        <i class="far fa-fw fa-id-card"></i>
        SIUP
    </a>
    <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_customer']; ?>" data-jenis="npwp" data-keterangan="customer" class="btn btn-secondary">
        <i class="far fa-fw fa-id-card"></i>
        NPWP
    </a>
    <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_customer']; ?>" data-jenis="kk" data-keterangan="customer" class="btn btn-secondary">
        <i class="far fa-fw fa-id-card"></i>
        Kartu Keluarga
    </a>
    <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_customer']; ?>" data-jenis="pbb" data-keterangan="customer" class="btn btn-secondary">
        <i class="far fa-fw fa-id-card"></i>
        PBB
    </a>
    <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_customer']; ?>" data-jenis="ktp" data-keterangan="customer" class="btn btn-secondary">
        <i class="far fa-fw fa-id-card"></i>
        KTP
    </a>
    <a href="#" data-toggle="modal" data-target="#dokumenModal" data-id="<?= $edit['kode_customer']; ?>" data-jenis="skdu" data-keterangan="customer" class="btn btn-secondary">
        <i class="far fa-fw fa-id-card"></i>
        SKDU
    </a>
</div>