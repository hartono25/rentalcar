<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-7 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Menu Management</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_menu">
                                    <i class="far fa-fw fa-folder"></i>
                                    Nama Menu
                                </label>
                                <input type="text" class="form-control form-control-sm" id="nama_menu" placeholder="Nama Menu" name="nama_menu">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="icon_menu">
                                    <i class="far fa-fw fa-images"></i>
                                    Icon
                                </label>
                                <input type="text" class="form-control form-control-sm" id="icon_menu" placeholder="Icon for menu" name="icon_menu">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="url_menu">
                                    <i class="fas fa-fw fa-link"></i>
                                    URL Site
                                </label>
                                <input type="text" class="form-control form-control-sm" id="url_menu" placeholder="Site URL" name="url_menu">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="level_menu">
                                    <i class="fas fa-fw fa-layer-group"></i>
                                    Level Menu
                                </label>
                                <select class="form-control form-control-sm" name="level_menu" id="level_menu">
                                    <option>---</option>
                                    <option value="main">Main Menu</option>
                                    <option value="sub">Sub Menu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="urutan_menu">
                                    <i class="fas fa-fw fa-sort-numeric-down"></i>
                                    Urutan Menu
                                </label>
                                <input type="number" class="form-control form-control-sm" id="urutan_menu" name="urutan_menu">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="is_active_menu">Active</label>
                                <select id="is_active_menu" class="form-control form-control-sm" name="is_active_menu">
                                    <option selected>---</option>
                                    <option value="0">No</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6" id="mainmenu">
                                <label for="sub_for_menu">Main Menu</label>
                                <input type="text" class="form-control form-control-sm" name="sub_for_menu" id="sub_for_menu">
                            </div>
                        </div>
                        <hr>

                        <div class="form-row justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-fw fa-save"></i>
                                Simpan Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->