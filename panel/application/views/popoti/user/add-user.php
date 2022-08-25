                                        <div class="row">
                                            <div class="col-lg-12">

                                                <form action="<?php echo site_url('user/add/'.encode($user->USE_ID)) ?>" method="post" class="tambah-user" enctype="multipart/form-data">
                                                    <?php
                                                    if($user->USE_AVATAR) { ?>
                                                        <img src="<?php echo base_url('assets/images/img-profile/'.$user->USE_AVATAR) ?>" class="img-fluid avatar-lg rounded-circle">
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label for="simpleinput">Avatar</label>
                                                        <input type="file" name="avatar" class="form-control-file">
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="simpleinput">Full Name <span class="text-danger">*</span></label>
                                                            <input type="text" id="simpleinput" name="USE_NAMA" class="form-control" value="<?php echo $user->USE_NAMA ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="example-email">Username <span class="text-danger">*</span></label>
                                                            <input type="text" name="USE_USER" class="form-control" value="<?php echo $user->USE_USER ?>">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="example-email">Password <span class="text-danger">*</span></label>
                                                            <input type="password" id="password" class="form-control" name="USE_PASS">
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="example-password">User Group <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="OTORITY_ID">
                                                                <option value="">Choose One</option>
                                                                <?php foreach($otority as $o) { ?>
                                                                    <option value="<?php echo $o->id ?>" <?php echo ($o->id == $user->OTORITY_ID) ? 'selected=""' : ''; ?>><?php echo $o->nama ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="example-email">After Login <span class="text-danger">*</span></label>
                                                            <select name="afterlogin" class="form-control" data-toggle="select2">
                                                                <?php echo nestedSelect($menu, FALSE, '', $user->afterlogin) ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                        <div id='ResponseInput'></div>