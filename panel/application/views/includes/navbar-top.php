

    <body data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}}'>

        <!-- Begin page -->
        <div id="wrapper">

            <input type="hidden" name="" id="base_url" value="<?php echo base_url() ?>">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
    
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets/images/img-profile/<?php echo sql_get_var('tb_user', 'USE_AVATAR', ['USE_ID' => $this->session->userdata('user')]) ?>" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    <?php echo sql_get_var('tb_user', 'USE_NAMA', ['USE_ID' => $this->session->userdata('user')]) ?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="<?php echo base_url('user/profile') ?>" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="<?php echo base_url('user/change-password') ?>" class="dropdown-item notify-item" id="user-setting">
                                    <i class="fe-settings"></i>
                                    <span>Change Password</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="<?php echo site_url('user/logout') ?>" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">    
                        <!-- <a href="<?php echo base_url() ?>" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="<?php echo base_url('upload/popoti/'.$this->data['weblogo']) ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url('upload/popoti/'.$this->data['weblogo']) ?>" alt="" height="20">
                            </span>
                        </a> -->
                        <h4 class="logo text-light mb-3"><?php echo $this->data['webtitle'] ?></h4>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topnav shadow-lg">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <?php
                                  echo nestedMenus($this->data['menus']);
                                ?>
                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Dashboard</a></li>
                                            <li class="breadcrumb-item <?php echo ($this->uri->segment(2) ? '' : 'class="active"') ?>">
                                                <?php echo ($this->uri->segment(2) ? '<a href="'.site_url($this->uri->segment(1)).'">' : '') ?>
                                                <?php echo $this->data['menuName'] ?><?php echo ($this->uri->segment(2)) ? '</a>' : '' ?>
                                            </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"><?php echo $this->data['menuName'] ?></h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 