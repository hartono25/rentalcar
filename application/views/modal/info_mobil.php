<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Mobil Info</h5>
    <button class="close close-modal-edit-role text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-row col-md-12 text-right">
        <div class="form-group col-md-12">
            <label for="exp_date" class="font-weight-bolder">
                <i class="far fa-fw fa-calendar-alt"></i>
                Exp Date : <?= date_indo($edit['exp_date']); ?>
            </label>
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-2">
            <label for="kode_mobil" class="font-weight-bolder">
                <i class="fas fa-fw fa-barcode"></i>
                Kode Mobil
            </label>
            <input type="text" class="form-control-plaintext" id="kode_mobil" placeholder="Kode Mobil" name="kode_mobil" value="<?= $edit['kode_mobil']; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="nama_mobil" class="font-weight-bolder">
                <i class="fas fa-fw fa-car"></i>
                Nama Mobil
            </label>
            <input type="text" class="form-control-plaintext" id="nama_mobil" placeholder="Nama Mobil" name="nama_mobil" value="<?= $edit['nama_mobil']; ?>" readonly>
        </div>
        <div class="form-group col-md-2">
            <label for="no_polisi" class="font-weight-bolder">
                No. Polisi
            </label>
            <input type="text" class="form-control-plaintext" id="no_polisi" placeholder="No. Polisi" name="no_polisi" value="<?= $edit['no_polisi']; ?>" readonly>
        </div>
        <div class="form-group col-md-2">
            <label for="tahun_mobil" class="font-weight-bolder">
                <i class="far fa-fw fa-calendar-alt"></i>
                Tahun
            </label>
            <input type="text" class="form-control-plaintext" id="tahun_mobil" placeholder="Tahun" name="tahun_mobil" value="<?= $edit['tahun']; ?>" readonly>
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-4">
            <label for="jenis_mobil" class="font-weight-bolder">
                Jenis/Merk
            </label>
            <input type="text" class="form-control-plaintext" id="jenis_mobil" placeholder="Tahun" name="jenis_mobil" value="<?= $edit['merk_mobil'] . ' ' . $edit['tipe_mobil']; ?>" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="warna_mobil" class="font-weight-bolder">
                Warna
            </label>
            <input type="text" class="form-control-plaintext" id="warna_mobil" placeholder="Warna Mobil" name="warna_mobil" value="<?= $edit['warna']; ?>" readonly>
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            <label for="no_rangka" class="font-weight-bolder">
                No. Rangka Mobil
            </label>
            <input type="text" class="form-control-plaintext" id="no_rangka" placeholder="Nomor Rangka Mobil" name="no_rangka" value="<?= $edit['no_rangka']; ?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="no_mesin" class="font-weight-bolder">
                No. Mesin Mobil
            </label>
            <input type="text" class="form-control-plaintext" id="no_mesin" placeholder="Nomor Mesin Mobil" name="no_mesin" value="<?= $edit['no_mesin']; ?>" readonly>
        </div>
    </div>

    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            <label for="nama_stnk" class="font-weight-bolder">
                STNK
            </label>
            <input type="text" class="form-control-plaintext" id="nama_stnk" placeholder="Nama STNK" name="nama_stnk" value="<?= $edit['nama_stnk']; ?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="nama_pemilik" class="font-weight-bolder">
                <i class="fas fa-fw fa-address-card"></i>
                Nama Pemilik
            </label>
            <input type="text" class="form-control-plaintext" id="nama_pemilik" placeholder="Nama Pemilik" name="nama_pemilik" value="<?= $edit['nama_pemilik']; ?>" readonly>
        </div>
    </div>

    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            <label for="alamat_stnk" class="font-weight-bolder">
                Alamat STNK
            </label>
            <textarea name="alamat_stnk" id="alamat_stnk" rows="3" class="form-control form-control-sm" placeholder="Alamat Sesuai STNK" readonly><?= $edit['alamat_stnk']; ?></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="alamat_domisili" class="font-weight-bolder">
                Alamat Domisili
            </label>
            <textarea name="alamat_domisili" id="alamat_domisili" rows="3" class="form-control form-control-sm" placeholder="Alamat Sekarang" readonly><?= $edit['alamat_domisili'] ?></textarea>
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6" class="font-weight-bolder">
            <label for="keterangan" class="font-weight-bolder">
                Keterangan
            </label>
            <textarea name="keterangan" id="keterangan" rows="3" class="form-control form-control-sm" placeholder="Keterangan" readonly><?= $edit['keterangan']; ?></textarea>
        </div>
    </div>
</div>

<div class="modal-footer">

</div>