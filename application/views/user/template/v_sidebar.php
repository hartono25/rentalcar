<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('home'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-cloudscale"></i>
            </div>
            <div class="sidebar-brand-text mx-3">RENTAL CAR<br><small style="font-size: 10px;">Management Sistem</small></div>

        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!-- <div class="sidebar-heading">
            Administrator
        </div> -->

        <?php foreach ($menu as $m) : ?>
            <li class="nav-item <?= ($m['url'] == $this->uri->segment(1, 0) ? "active" : ""); ?>">
                <a class="nav-link collapsed" href="<?= site_url($m['url']); ?>" data-toggle="<?= tcollapse($m['nama_menu']); ?>" data-target="#<?= $m['nama_menu']; ?>" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="<?= $m['icon']; ?>"></i>
                    <span><?= $m['nama_menu']; ?></span>
                </a>
                <div id="<?= $m['nama_menu']; ?>" class="collapse <?= tshow($m['nama_menu']); ?> active" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php foreach ($submenu as $s) : ?>
                            <?php if ($s['main_menu'] == $m['nama_menu']) : ?>
                                <a class="collapse-item <?= ($s['url'] == $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'leading') ? "active" : ""); ?>" href="<?= site_url($s['url']); ?>"><i class="<?= $s['icon']; ?>"></i> <?= $s['nama_menu']; ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
                    </div>
                </div>
            </li>
        <?php endforeach; ?>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link logout" href="<?= site_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">
                                <?php $nourut = 0; ?>
                                <?php foreach ($mobil as $mm) : ?>
                                    <?php $haris = expired($mm['exp_date']); ?>
                                    <?php if ($haris <= 30) : ?>
                                        <?php $nourut++; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?= $nourut; ?>
                            </span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Info STNK Expired
                            </h6>
                            <?php foreach ($mobil as $m) : ?>
                                <?php $hari = expired($m['exp_date']); ?>
                                <?php $harisebulan = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($m['exp_date'])), date('Y', strtotime($m['exp_date']))); ?>
                                <?php if ($hari <= $harisebulan) : ?>
                                    <a class="dropdown-item d-flex align-items-center" href="<?= site_url('mobil/expired/' . $m['mobil_id']); ?>">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">Info STNK Expired</div>
                                            <div class="small text-gray-500">Last Exp Date: <?= date_indo($m['exp_date']); ?></div>
                                            <span class="font-weight-bold"><?= $m['nama_mobil'] . ': ' . $m['no_polisi']; ?></span>
                                        </div>
                                    </a>
                                <?php elseif ($hari <= 0) : ?>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-danger">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">Info STNK Expired</div>
                                            <div class="small text-gray-500">Last Exp Date: <?= date_indo($m['exp_date']); ?></div>
                                            <span class="font-weight-bold"><?= $m['nama_mobil'] . ': ' . $m['no_polisi']; ?></span>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <a class="dropdown-item text-center small text-gray-500" href="<?= site_url('mobil/expired'); ?>">Show All Alerts</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                            <!-- <img class="img-profile rounded-circle" src="<?= base_url('template/img/user.png'); ?>"> -->
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= site_url('home/profil'); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item logout" href="<?= base_url('auth/logout'); ?>">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->