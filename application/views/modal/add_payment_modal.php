<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Pembayaran Invoice</h5>
    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<form method="POST" action="<?= base_url('transaksi/payment/input'); ?>">
    <?= csrf(); ?>
    <div class="modal-body">
        <div class="form-group row">
            <div class="col-sm-2 font-weight-bold">
                Customer
            </div>
            <div class="col-sm-3">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="so_customer" name="so_customer">
                    <div class="input-group-prepend">
                        <a href="#" data-target="#findCustomerModal" data-toggle="modal" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control " id="so_nama" name="so_nama" readonly>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2 font-weight-bold">
                No.Order
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="no_so" name="no_so">
                    <div class="input-group-prepend">
                        <a href="#" data-target="#findSoModal" data-toggle="modal" class="input-group-text"><i class="fas fa-fw fa-ellipsis-h"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                Tanggal
            </div>
            <div class="col-sm-4">
                <input type="text" name="tgl_start" id="tgl_start" class="form-control" readonly>
            </div>
            <div class="col-sm-4">
                <input type="text" name="tgl_end" id="tgl_end" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                No.Pol
            </div>
            <div class="col-sm-4">
                <input type="text" name="no_polisi" id="no_polisi" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                Mobil
            </div>
            <div class="col">
                <input type="text" name="mobil" id="mobil" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                Nilai Sewa
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="number" class="form-control " placeholder="0" id="nilai_sewa" name="nilai_sewa" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                Nilai DP
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="number" class="form-control " placeholder="0" id="nilai_dp" name="nilai_dp" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-minus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                Over Time
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="number" class="form-control " placeholder="0" id="over_time" name="over_time" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                Terbayar
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="number" class="form-control " placeholder="0" id="terbayar" name="terbayar" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-minus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2 font-weight-bold">
                <h3 class="font-weight-bolder">Total</h3>
            </div>
            <div class="col-sm-4">
                <div class="input-group mr-sm-2">
                    <input type="number" class="form-control " placeholder="0" id="total" name="total" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-fw fa-equals"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-2">
                Nilai Bayar
            </div>
            <div class="col-sm-4 font-weight-bold">
                <input type="number" class="form-control" placeholder="0" id="nilai_bayar" name="nilai_bayar">
            </div>
            <div class="col-sm-2">
                Tanggal Bayar
            </div>
            <div class="col-sm-4">
                <input type="date" class="form-control" placeholder="0" id="tgl_bayar" name="tgl_bayar">
            </div>
        </div>
    </div>

    <div class="modal-footer bg-dark">
        <!-- <button type="submit" class="btn btn-info">
            <i class="fas fa-fw fa-pen-square"></i>
            Edit Pembayaran
        </button> -->
        <button class="btn btn-light" type="button" data-dismiss="modal">
            <i class="fas fa-window-close"></i>
            Cancel
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-fw fa-save"></i>
            Simpan
        </button>
    </div>
</form>