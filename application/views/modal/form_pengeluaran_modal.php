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
                        <button type="button" href="#" class="btn btn-info" id="btn_pengeluarann">Proses Data</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addPengeluaranModal" data-backdrop="static">Tambah Data</a>
                <button type="button" class="btn btn-danger" id="btn_closingg">Close / Unclose</button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-fw fa-print"></i>
                    Cetak
                </button>
            </div>
        </div>
    </form>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-xs" id="dataTable" width="100%" cellspacing="0">
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
            <tbody id="show_kass">

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

<script>
    $(document).ready(function() {
        $('#btn_pengeluarann').on('click', function() {
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
                    $('#show_kass').html(html);
                }
            });
            return false;
        });

    });
    $(document).ready(function() {
        $('#btn_closingg').on('click', function() {
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
                    $('#show_kass').html(html);
                }
            });
            return false;
        });

    });
</script>