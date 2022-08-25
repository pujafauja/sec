<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>Log In | CMS E-Commerce</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

        <meta content="Coderthemes" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->

        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico">



        <!-- App css -->

        <link href="<?php echo base_url() ?>/assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

        <link href="<?php echo base_url() ?>/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />



        <link href="<?php echo base_url() ?>/assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />

        <link href="<?php echo base_url() ?>/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />



        <!-- icons -->

        <link href="<?php echo base_url() ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />



    </head>



    <body class="authentication-bg authentication-bg-pattern">



        <div class="account-pages mt-5 mb-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="card bg-pattern">



                            <div class="card-body p-4">

                                

                                <div class="text-center w-75 m-auto">

                                    <div class="auth-logo">

                                        <span class="logo-lg">

                                            <img src="<?php echo base_url('upload/popoti/'.$this->data['weblogo']) ?>" alt="" height="22">

                                        </span>

                                    </div>



                                    <p class="text-muted mb-4 mt-3">Enter your username and password to access this application.</p>

                                    <?php get_flashdata('login'); ?>

                                </div>



                                <form action="<?php echo site_url('user/auth') ?>" method="post">



                                    <div class="form-group mb-3">

                                        <label for="username">Username</label>

                                        <input class="form-control" type="text" id="username" required="" name="username" placeholder="Enter your username">

                                    </div>



                                    <div class="form-group mb-3">

                                        <label for="password">Password</label>

                                        <div class="input-group input-group-merge">

                                            <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">

                                            <div class="input-group-append" data-password="false">

                                                <div class="input-group-text">

                                                    <span class="password-eye"></span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="form-group mb-3">

                                        <div class="custom-control custom-checkbox">

                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="remember">

                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>

                                        </div>

                                    </div>



                                    <div class="form-group mb-0 text-center">

                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>

                                    </div>



                                </form>



                            </div> <!-- end card-body -->

                        </div>

                        <!-- end card -->



                    </div> <!-- end col -->

                </div>

                <!-- end row -->

            </div>

            <!-- end container -->

        </div>

        <!-- end page -->





        <footer class="footer footer-alt text-white-50">

            Puzha Framework &copy; 2021 Developed with <i class="fas fa-heart mr-1 text-danger"></i> by <a href="https://facebook.com/puzha.nzha" target="_blank" class="text-dark">Puzha Fauzha</a> 

        </footer>



        <!-- Vendor js -->

        <script src="<?php echo base_url() ?>/assets/js/vendor.min.js"></script>



        <!-- App js -->

        <script src="<?php echo base_url() ?>/assets/js/app.min.js"></script>

        

    </body>

</html>