<!-- Bootstrap core JavaScript-->
<!-- <script src="<?= base_url('template/') ?>vendor/jquery/jquery.min.js"></script> -->
<script type="text/javascript" src="<?= base_url('template/') ?>vendor/jquery/3.1.1/jquery.min.js"></script>

<script src="<?= base_url('template/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('template/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Sweet Alert 2 -->
<script src="<?= base_url('template/'); ?>sweet-alert-2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('template/'); ?>sweet-alert-2/myscript.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('template/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('template/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('template/') ?>js/demo/datatables-demo.js"></script>

<script>
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
            var start = $('#tgl_start').val();
            var finish = $('#tgl_finish').val();
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
                        i = i + 1;
                        html += '<tr>' +
                            '<td>' + data[i].kode_so + '</td>' +
                            '<td>' + data[i].nama_customer + '</td>' +
                            '<td>' + data[i].nama_mobil + '</td>' +
                            '<td>' + data[i].no_polisi + '</td>' +
                            '<td>' + data[i].no_mesin + '</td>' +
                            '<td>' + data[i].nama_driver + '</td>' +
                            '<td>' + data[i].tgl_start + '</td>' +
                            '<td>' + data[i].status_order + '</td>' +
                            '<td style="text-align:right;">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="' + data[i].so_id + '">Edit</a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="' + data[i].so_id + '">Delete</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }
            });
            return false;
        });
    });
</script>
</body>

</html>