<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <!-- <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1> -->
                                    <div class="sidebar-brand-icon rotate-n-15">
                                        <i class="fab fa-cloudscale fa-4x"></i>
                                    </div>
                                    <div class="sidebar-brand-text mx-3">RENTAL CAR<br><small style="font-size: 10px;">Management Sistem</small></div><br>

                                </div>
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                                <form class="user" method="POST" action="<?= site_url('auth/login'); ?>">
                                    <?= csrf(); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter User Name..." name="username" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Enter Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-user btn-block login">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-left">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <!-- <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>