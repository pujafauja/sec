

                        <div class="row">

                            <div class="col-lg-4 col-xl-4">

                                <div class="card-box text-center">

                                    <form method="post" action="<?php echo base_url('employee/change-avatar') ?>" id="upload-avatar" enctype="multiplart/form-data">

                                        <div class="progress mb-2 mt-2 d-none">

                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                                            </div>

                                        <label for="avatar" style="width: 100%; cursor: pointer;">

                                            <img src="<?php echo base_url(); ?>assets/images/img-profile/<?php echo sql_get_var('tb_user', 'USE_AVATAR', ['USE_ID' => $this->session->userdata('user')]) ?>" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                                        </label>

                                        <input type="file" name="avatar" id="avatar" class="d-none">

                                    </form>



                                    <h4 class="mb-0"><?php echo $user->USE_NAMA ?></h4>

                                    <p class="text-muted"><?php echo $user->USE_USER ?></p>




                                </div> <!-- end card-box -->



                            </div> <!-- end col-->



                            <div class="col-lg-8 col-xl-8">

                                <div class="card-box">



                                    <div class="tab-pane" id="settings">

                                        <form action="<?php echo base_url('employee/save-profile/'.encode($user->USE_ID)) ?>" method="post" id="form-profile">

                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>

                                            <div class="row">

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label for="firstname">Name</label>

                                                        <input type="text" class="form-control" id="firstname" name="nama" value="<?php echo $user->USE_NAMA ?>" placeholder="Enter first name">

                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label for="lastname">Username</label>

                                                        <input type="text" class="form-control" id="lastname" name="username" value="<?php echo $user->USE_USER ?>" placeholder="Enter last name">

                                                    </div>

                                                </div> <!-- end col -->

                                            </div> <!-- end row -->



                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div id="response"></div>

                                                </div>

                                            </div>

                                            

                                            <div class="text-right">

                                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2" id="save-profile"><i class="mdi mdi-content-save"></i> Save</button>

                                            </div>

                                        </form>

                                    </div>

                                    <!-- end settings content-->



                                </div> <!-- end card-box-->



                            </div> <!-- end col -->

                        </div>

                        <!-- end row-->