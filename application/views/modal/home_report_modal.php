<div class="modal-header bg-dark text-white">
    <h5 class="modal-title" id="exampleModalLabel">Display Kas</h5>
    <a class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </a>
</div>
<div class="modal-body">
    <form method="POST" action="<?= site_url('report/report-order') ?>" target="_blank">
        <div class="row">
            <div class="col-md-4">
                <select name="filter_by" id="filter_by" class="form-control">
                    <option value="all">Sales Order By Month</option>
                    <option value="mobil">Sales Order By Mobil</option>
                    <option value="customer">Sales Order By Customer</option>
                    <option value="count">Sales Order Count By Mobil</option>
                    <option value="kas">Detail Kas Harian</option>
                    <option value="profit">Profit And Loose</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" name="tgl_start" id="tgl_start">
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" name="tgl_finish" id="tgl_finish">
            </div>
            <div class="col">
                <button type="submit" name="btn_search" id="btn_search" class="btn btn-info">
                    <i class="fas fa-fw fa-search"></i>
                    Search
                </button>
            </div>
        </div>
    </form>
    <hr>

</div>
<div class="modal-footer bg-dark justify-content-start">
    <button type="button" data-dismiss="modal" class="btn btn-light">
        <i class="fas fa-window-close"></i>
        Close
    </button>
</div>