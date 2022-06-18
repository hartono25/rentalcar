<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Menu Modal-->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel">Menu Management</h5>
                <button class="close close-modal-simpan-menu text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="<?= site_url('menu/menu-management/tambah'); ?>">
                <?= csrf(); ?>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_menu">
                                <i class="far fa-fw fa-folder"></i>
                                Nama Menu
                            </label>
                            <input type="text" class="form-control form-control-sm" id="nama_menu" placeholder="Nama Menu" name="nama_menu" value="<?= set_value('nama_menu') ?>">
                            <?= form_error('nama_menu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="icon_menu">
                                <i class="far fa-fw fa-images"></i>
                                Icon
                            </label>
                            <input type="text" class="form-control form-control-sm" id="icon_menu" placeholder="Icon for menu" name="icon_menu" value="<?= set_value('icon_menu') ?>">
                            <?= form_error('icon_menu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="url_menu">
                                <i class="fas fa-fw fa-link"></i>
                                URL Site
                            </label>
                            <input type="text" class="form-control form-control-sm" id="url_menu" placeholder="Site URL" name="url_menu" value="<?= set_value('url_menu') ?>">
                            <?= form_error('url_menu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="level_menu">
                                <i class="fas fa-fw fa-layer-group"></i>
                                Level Menu
                            </label>
                            <select class="form-control form-control-sm" name="level_menu" id="level_menu" value="<?= set_value('level_menu') ?>">
                                <option>---</option>
                                <option value="main">Main Menu</option>
                                <option value="sub">Sub Menu</option>
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
                            <input type="number" class="form-control form-control-sm" id="urutan_menu" name="urutan_menu" placeholder="0" value="<?= set_value('urutan_menu') ?>">
                            <?= form_error('urutan_menu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="is_active_menu">Active</label>
                            <select id="is_active_menu" class="form-control form-control-sm" name="is_active_menu" value="<?= set_value('is_active_menu') ?>">
                                <option selected>---</option>
                                <option value="0">No</option>
                                <option value="1">Active</option>
                            </select>
                            <?= form_error('is_active_menu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" id="mainmenu">
                            <label for="sub_for_menu">Main Menu</label>
                            <input type="text" class="form-control form-control-sm" name="sub_for_menu" id="sub_for_menu" value="<?= set_value('sub_for_menu') ?>">
                            <?= form_error('sub_for_menu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-dark">
                    <button class="btn btn-light close-modal-simpan-menu" type="button" data-dismiss="modal">
                        <i class="fas fa-window-close"></i>
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-fw fa-save"></i>
                        Simpan Menu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel">Role Management</h5>
                <button class="close close-modal-edit-role text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="<?= site_url('menu/access-management/tambah'); ?>">
                <?= csrf(); ?>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="role_user" class="col-sm-3 col-form-label">Role User</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" name="role_user" id="role_user" value="<?= set_value('role_user'); ?>">
                            <?= form_error('role_user', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-dark">
                    <button class="btn btn-light close-modal-edit-role" type="button" data-dismiss="modal">
                        <i class="fas fa-window-close"></i>
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-fw fa-save"></i>
                        Simpan Role User
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Tampil Edit Modal-->
<div class="modal fade" id="menuEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="edit-data"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="roleEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="role-data"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="roleAksesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="akses-data"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="documentDriverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="docdriver-data"></div>
        </div>
    </div>
</div>


<div class="modal fade" id="addSOModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="tambah-so"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="loadSOModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1200px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel">Sales Order</h5>
                <a class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <input type="date" name="loadtgl_start" id="loadtgl_start" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <input type="date" name="loadtgl_finish" id="loadtgl_finish" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <select name="select" id="select" class="form-control">
                            <option>- Status Order -</option>
                            <option value="order">order</option>
                            <option value="finish">finish</option>
                            <option value="void">void</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" href="#" class="btn btn-success" id="btn_proses">Proses Data</button>
                    </div>
                </div>
                <hr>

                <div class="table-responsive">
                    <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No. Sales Order</th>
                                <th>Customer</th>
                                <th>Merk / Type</th>
                                <th>No. Polisi</th>
                                <th>No. Mesin</th>
                                <th>Driver</th>
                                <th>Tgl Start</th>
                                <th>Status</th>
                                <th>Pilih</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer bg-dark justify-content-start">
                <button type="button" data-dismiss="modal" class="btn btn-light">
                    <i class="fas fa-window-close"></i>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newCustModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="customer-data"></div>
        </div>
    </div>
</div>


<div class="modal fade" id="soEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div id="so-data"></div>
        </div>
    </div>
</div>


<div class="modal fade" id="editfindCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1020px !important;" role="document">
        <div class="modal-content">
            <div id="editfindCustomerModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="findDriverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1020px !important;" role="document">
        <div class="modal-content">
            <div id="findDriverModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="editfindDriverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1020px !important;" role="document">
        <div class="modal-content">
            <div id="editfindDriverModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="findMobil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1240px !important;" role="document">
        <div class="modal-content">
            <div id="findMobil-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="editfindMobil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1240px !important;" role="document">
        <div class="modal-content">
            <div id="editfindMobil-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="soVoidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="soVoidModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 750px !important;" role="document">
        <div class="modal-content">
            <div id="paymentModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="findSoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1300px !important;" role="document">
        <div class="modal-content">
            <div id="findSoModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="findCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1020px !important;" role="document">
        <div class="modal-content">
            <div id="findCustomerModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="reportByMobilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1020px !important;" role="document">
        <div class="modal-content">
            <div id="reportByMobilModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="pengeluaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 950px !important;" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel">Display Kas</h5>
                <a class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('cetak/detail_kas') ?>" target="_blank">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="date" name="tgl_pengeluaran" id="tgl_pengeluaran" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" href="#" class="btn btn-info" id="btn_pengeluaran">Proses Data</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addPengeluaranModal" data-backdrop="static">Tambah Data</a>
                            <button type="button" class="btn btn-danger" id="btn_closing">Close / Unclose</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-fw fa-print"></i>
                                Cetak
                            </button>
                        </div>
                    </div>
                </form>
                <hr>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>TANGGAL</th>
                                <th>VOUCHER</th>
                                <th>DEBET</th>
                                <th>KREDIT</th>
                                <th>JENIS</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="show_kas">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer bg-dark justify-content-start">
                <button type="button" data-dismiss="modal" class="btn btn-light">
                    <i class="fas fa-window-close"></i>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addPengeluaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel">Display Kas</h5>
                <a class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <form method="POST" action="<?= site_url('transaksi/pengeluaran/input') ?>">
                <?= csrf(); ?>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl" name="tgl">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="account" class="col-sm-2 col-form-label">Account</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="account" name="account">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="debet" class="col-sm-4 col-form-label">Debet</label>
                                <div class="col-sm-8">
                                    <input type="number" placeholder="0" class="form-control" id="debet" name="debet">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="kredit" class="col-sm-3 col-form-label">Kredit</label>
                                <div class="col-sm-9">
                                    <input type="number" placeholder="0" class="form-control" id="kredit" name="kredit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="memo" class="col-sm-2 col-form-label">Kepada</label>
                        <div class="col-sm-10">
                            <textarea name="memo" id="memo" rows="4" class="form-control" placeholder="Memo"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-dark justify-content-end">
                    <button type="button" data-dismiss="modal" class="btn btn-light">
                        <i class="fas fa-window-close"></i>
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editPengeluaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="editPengeluaranModal-data"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="dokumenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 850px!important;" role="document">
        <div class="modal-content">
            <div id="dokumenModal-data"></div>
        </div>
    </div>
</div>

<script>
    function getSelVal() {
        var dat = jQuery('select[name=t_order]').val();
        var alt1 = jQuery('textarea[name=alamat_jemput]');
        var alt2 = jQuery('textarea[name=alamat_finish]');
        var btnDriver = jQuery('a[name=btn_driver]');
        var EditbtnDriver = jQuery('a[name=EditBtnDriver]');
        // const href = jQuery('a[name=btn_driver]').attr('onclick');

        if (dat == "Lepas Kunci") {
            alt1.removeAttr("disabled");
            alt2.attr('disabled', 'disabled');
            // btnDriver.attr('disabled', 'disabled');
            btnDriver.removeAttr('data-target');
            EditbtnDriver.removeAttr('data-target');
        } else if (dat == "Dengan Driver") {
            alt1.removeAttr("disabled");
            alt2.removeAttr("disabled");
            btnDriver.attr("data-target", "#findDriverModal");
            EditbtnDriver.attr("data-target", "#editfindDriverModal");
        } else if (dat == "Rent To Rent") {
            alt1.attr('disabled', 'disabled');
            alt2.attr('disabled', 'disabled');
            btnDriver.attr("data-target", "#findDriverModal");
            EditbtnDriver.attr("data-target", "#editfindDriverModal");
        }
    }
</script>

<!-- Bootstrap core JavaScript-->
<!-- <script src="<?= base_url('template/') ?>vendor/jquery/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script type="text/javascript" src="<?= base_url('template/') ?>vendor/jquery/3.1.1/jquery.min.js"></script>

<script src="<?= base_url('template/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('template/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('template/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('template/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('template/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('template/') ?>js/demo/datatables-demo.js"></script>

<!-- Sweet Alert 2 -->
<script src="<?= base_url('template/'); ?>sweet-alert-2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('template/'); ?>sweet-alert-2/myscript.js"></script>


<!-- Switch Toggle -->
<!-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


<script>
    $(document).ready(function() {
        // Kondisi saat Form di-load
        if ($("#level_menu").val() == "sub") {
            $('#mainmenu').show();
        } else if ($("#level_menu").val() == "main") {
            $('#mainmenu').hide();
        } else {
            $('#mainmenu').hide();
        }
        // Kondisi saat ComboBox (Select Option) dipilih nilainya
        $("#level_menu").change(function() {
            if ($(this).val() == "sub") {
                $('#mainmenu').show();
            } else {
                $('#mainmenu').hide();
            }
        });
    });

    $(document).ready(function() {
        $('#menuEditModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('menu/modal_menu_edit'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#edit-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#roleEditModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('menu/modal_userole_edit'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#role-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#roleAksesModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('menu/role_akses_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#akses-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#documentDriverModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/driver_document_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#docdriver-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#userInfoModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/user_info_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#user-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#infoMobilModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/mobil_info_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#mobil-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#infoMerkModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/merk_info_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#merk-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#infoDriverModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/driver_info_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#driver-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#custInfoModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/cust_info_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#cust-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#newCustModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/add_cust_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#customer-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#tipeEditModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/edit_tipe_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#tipe-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#tipeSewaEditModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/edit_tipe_sewa_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#tipe-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#addSOModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/add_so_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#tambah-so').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#soEditModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/edit_so_modal'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#so-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#btn_proses').on('click', function() {
            // function load() {
            var start = $('#loadtgl_start').val();
            var finish = $('#loadtgl_finish').val();
            var select = $('#select').val();
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/data_load_so'); ?>",
                dataType: "JSON",
                data: {
                    start: start,
                    finish: finish,
                    select: select
                },

                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].kode_so + '</td>' +
                            '<td>' + data[i].nama_customer + '</td>' +
                            '<td>' + data[i].nama_mobil + '</td>' +
                            '<td>' + data[i].no_polisi + '</td>' +
                            '<td>' + data[i].no_mesin + '</td>' +
                            '<td>' + data[i].nama_driver + '</td>' +
                            '<td>' + data[i].tgl_start + '</td>' +
                            '<td>' + data[i].status_order + '</td>' +
                            '<td style="text-align:center;">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-toggle="modal" data-backdrop="static" data-target="#soEditModal" data-id="' + data[i].so_id + '">Edit</a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-toggle="modal" data-backdrop="static" data-target="#soVoidModal" data-id="' + data[i].so_id + '">Void</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                    console.log(data);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#findSoModal').on('show.bs.modal', function(e) {
            var cust = $('#so_customer').val();
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/findSO'); ?>',
                data: 'cust=' + cust,
                success: function(data) {
                    $('#findSoModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#findSoModal').on('click', '#pilih', function(e) {
            // function load() {
            // var rowid = $(e.relatedTarget).data('id');
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_so_id'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findSoModal').modal('hide');
                    var i;
                    for (i = 0; i < data.length; i++) {
                        $('#no_so').val(data[i].kode_so);
                        $('#tgl_start').val(data[i].tgl_start);
                        $('#tgl_end').val(data[i].tgl_end);
                        $('#no_polisi').val(data[i].no_polisi);
                        $('#mobil').val(data[i].nama_mobil);
                        $('#nilai_sewa').val(data[i].harga_sewa);
                        $('#nilai_dp').val(data[i].pembayaran_dp);
                        $('#over_time').val(data[i].overtime);
                        $('#terbayar').val(data[i].terbayar);
                        $('#total').val(data[i].total);
                        console.log(data);
                    }
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#findCustomerModal').on('show.bs.modal', function(e) {
            // var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/customer'); ?>',
                // data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findCustomerModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#findCustomerModal').on('click', '#pilihCust', function(e) {
            // function load() {
            // var rowid = $(e.relatedTarget).data('id');
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_customer'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findCustomerModal').modal('hide');
                    $('#so_customer').val(data['kode_customer']);
                    $('#so_nama').val(data['nama_customer']);
                    $('#so_telp').val(data['no_telp_customer1']);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#editfindCustomerModal').on('show.bs.modal', function(e) {
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/customer'); ?>',
                success: function(data) {
                    $('#editfindCustomerModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#editfindCustomerModal').on('click', '#pilihCust', function(e) {
            // function load() {
            // var rowid = $(e.relatedTarget).data('id');
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_customer'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#editfindCustomerModal').modal('hide');
                    $('#edit_so_customer').val(data['kode_customer']);
                    $('#edit_so_nama').val(data['nama_customer']);
                    $('#edit_so_telp').val(data['no_telp_customer1']);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#findDriverModal').on('show.bs.modal', function(e) {
            // var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/driver'); ?>',
                // data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findDriverModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#findDriverModal').on('click', '#pilihDriver', function(e) {
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_driver'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findDriverModal').modal('hide');
                    $('#so_driver').val(data['kode_driver']);
                    $('#so_nama_driver').val(data['nama_driver']);
                    $('#so_telp_driver').val(data['no_telp_driver']);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#editfindDriverModal').on('show.bs.modal', function(e) {
            // var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/driver'); ?>',
                // data: 'rowid=' + rowid,
                success: function(data) {
                    $('#editfindDriverModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#editfindDriverModal').on('click', '#pilihDriver', function(e) {
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_driver'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#editfindDriverModal').modal('hide');
                    $('#edit_so_driver').val(data['kode_driver']);
                    $('#edit_so_nama_driver').val(data['nama_driver']);
                    $('#edit_so_telp_driver').val(data['no_telp_driver']);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#findMobil').on('show.bs.modal', function(e) {
            // var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/mobil'); ?>',
                // data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findMobil-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#findMobil').on('click', '#pilihMobil', function(e) {
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_mobil'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#findMobil').modal('hide');
                    $('#so_mobil').val(data['kode_mobil']);
                    $('#so_nama_mobil').val(data['nama_mobil']);
                    $('#no_polisi').val(data['no_polisi']);
                    $('#warna').val(data['warna']);
                    $('#tahun').val(data['tahun']);
                    $('#tipe_merk').val(data['merk_mobil']);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#editfindMobil').on('show.bs.modal', function(e) {
            // var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/mobil'); ?>',
                // data: 'rowid=' + rowid,
                success: function(data) {
                    $('#editfindMobil-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });

        $('#editfindMobil').on('click', '#pilihMobil', function(e) {
            var rowid = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/find_mobil'); ?>",
                dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#editfindMobil').modal('hide');
                    $('#edit_so_mobil').val(data['kode_mobil']);
                    $('#edit_so_nama_mobil').val(data['nama_mobil']);
                    $('#edit_no_polisi').val(data['no_polisi']);
                    $('#edit_warna').val(data['warna']);
                    $('#edit_tahun').val(data['tahun']);
                    $('#edit_tipe_merk').val(data['merk_mobil']);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#soVoidModal').on('show.bs.modal', function(e) {
            //menggunakan fungsi ajax untuk pengambilan data
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/void_so_modal'); ?>',
                // dataType: "JSON",
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#soVoidModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#home').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            var menu = $(e.relatedTarget).data('menu');
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/home_menu_modal'); ?>',
                // dataType: "JSON",
                data: {
                    rowid: rowid,
                    menu: menu,
                },
                success: function(data) {
                    $('#home-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#paymentModal').on('show.bs.modal', function(e) {
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/payment_modal'); ?>',
                // dataType: "JSON",
                success: function(data) {
                    $('#paymentModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#reportByMobilModal').on('show.bs.modal', function(e) {
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/report_so_by_mobil'); ?>',
                // dataType: "JSON",
                success: function(data) {
                    $('#reportByMobilModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#pengeluaranModal').on('show.bs.modal', function(e) {
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/report_so_by_mobil'); ?>',
                // dataType: "JSON",
                success: function(data) {
                    $('#pengeluaranModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#editPengeluaranModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/load_edit_kas'); ?>',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('#editPengeluaranModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#dokumenModal').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            var jenis = $(e.relatedTarget).data('jenis');
            var keterangan = $(e.relatedTarget).data('keterangan');
            $.ajax({
                type: 'post',
                url: '<?= base_url('home/load_dokumen'); ?>',
                data: {
                    rowid: rowid,
                    jenis: jenis,
                    keterangan: keterangan,
                },
                success: function(data) {
                    $('#dokumenModal-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function() {
        $('#btn_pengeluaran').on('click', function() {
            // function load() {
            var start = $('#tgl_pengeluaran').val();
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/data_load_kas'); ?>",
                dataType: "JSON",
                data: {
                    start: start,
                },

                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].tanggal + '</td>' +
                            '<td>' + data[i].voucher + '</td>' +
                            '<td>' + data[i].debet + '</td>' +
                            '<td>' + data[i].kredit + '</td>' +
                            '<td>' + data[i].jenis + '</td>' +
                            '<td>' + data[i].status + '</td>' +
                            '<td style="text-align:center;" width="140">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-toggle="' + data[i].modal + '" data-backdrop="static" data-target="#editPengeluaranModal" data-id="' + data[i].kas_id + '">Edit</a>' + ' ' +
                            '<a href="' + data[i].href + '" class="btn btn-danger btn-sm delete">Delete</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_kas').html(html);
                }
            });
            return false;
        });

    });

    $(document).ready(function() {
        $('#btn_closing').on('click', function() {
            // function load() {
            var start = $('#tgl_pengeluaran').val();
            $.ajax({
                type: "POST",
                url: "<?= site_url('home/closing_kas'); ?>",
                dataType: "JSON",
                data: {
                    start: start,
                },
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].tanggal + '</td>' +
                            '<td>' + data[i].voucher + '</td>' +
                            '<td>' + data[i].debet + '</td>' +
                            '<td>' + data[i].kredit + '</td>' +
                            '<td>' + data[i].jenis + '</td>' +
                            '<td>' + data[i].status + '</td>' +
                            '<td style="text-align:center;" width="140">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-toggle="' + data[i].modal + '" data-backdrop="static" data-target="#editPengeluaranModal" data-id="' + data[i].kas_id + '">Edit</a>' + ' ' +
                            '<a href="' + data[i].href + '" class="btn btn-danger btn-sm delete">Delete</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_kas').html(html);
                }
            });
            return false;
        });

    });

    $('.close-modal-simpan-menu').on('click', function(e) {
        e.preventDefault();
        window.location = "<?= site_url('menu/menu-management') ?>";
    });
</script>
</body>

</html>