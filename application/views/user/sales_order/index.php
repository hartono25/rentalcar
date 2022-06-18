<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <form>
        <div class="form-inline">
            <div class="input-group mb-2 mr-sm-2">Tanggal</div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-fw fa-calendar-alt"></i></div>
                </div>
                <input type="date" class="form-control" id="tgl1" name="tgl1">
            </div>
            <div class="input-group mb-2 mr-sm-2">s/d</div>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-fw fa-calendar-alt"></i></div>
                </div>
                <input type="date" class="form-control" id="tgl2" name="tgl2">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-1 col-form-label">Customer</label>
            <div class="col-sm-2">
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" id="so_customer" name="so_customer">
                    <div class="input-group-prepend">
                        <a href="#" onclick="window.open('<?= site_url('home/customer'); ?>','popuppage','width=920,toolbar=0,resizable=0,scrollbars=no,height=450,top=100,left=300');" class="input-group-text">...</a>
                    </div>
                </div>
            </div>
            <div class="form-inlnie col-sm-4 mr-2">
                <input type="text" class="form-control" id="so_nama" name="so_nama" readonly>
            </div>

            <div class="form-inlnie">
                <a class="btn btn-secondary" data-toggle="modal" href="#newCustModal" data-id="<?= $this->uri->segment(1) . $this->uri->slash_segment(2, 'leading'); ?>">
                    <i class="fas fa-fw fa-address-card"></i>
                    New Customer
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">No.HP</label>
                <div class="col-sm">
                    <div class="input-group mr-sm-2">
                        <input type="text" class="form-control" id="so_telp" name="so_telp" readonly>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-fw fa-phone-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-1 col-form-label">Tipe Order</label>
                <div class="col-sm-3">
                    <select name="t_order" id="t_order" class="form-control" onchange="getSelVal()">
                        <option>Choose Tipe Order</option>
                        <?php foreach ($tipeorder as $to) : ?>
                            <option value="<?= $to['nama_tipe']; ?>"><?= $to['nama_tipe']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Antar/Jemput</label>
                    <div class="col-sm-8">
                        <textarea name="alamat_jemput" id="alamat_jemput" rows="5" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Finish</label>
                    <div class="col-sm-8">
                        <textarea name="alamat_finish" id="alamat_finish" rows="5" class="form-control" disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="newCustModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="customer-data"></div>
        </div>
    </div>
</div>

<script>
    function getSelVal() {
        var dat = jQuery('select[name=t_order]').val();
        var alt1 = jQuery('textarea[name=alamat_jemput]')
        var alt2 = jQuery('textarea[name=alamat_finish]')

        if (dat == "Lepas Kunci") {
            alt1.removeAttr("disabled");
            alt2.attr('disabled', 'disabled');
        } else if (dat == "Dengan Driver") {
            alt1.removeAttr("disabled");
            alt2.removeAttr("disabled");
        } else if (dat == "Rent To Rent") {
            alt1.attr('disabled', 'disabled');
            alt2.attr('disabled', 'disabled');
        }
    }
</script>