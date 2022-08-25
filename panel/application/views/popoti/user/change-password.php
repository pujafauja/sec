                                        <div class="row">
                                            <div class="col-lg-12">

                                                <form action="<?php echo site_url('user/change-password') ?>" method="post" class="change-password">

                                                    <div class="form-group">
                                                        <label for="">Your Password <span class="text-danger">*</span></label>
                                                        <input type="password" id="" class="form-control" name="old-password">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="example-email">New Password <span class="text-danger">*</span></label>
                                                        <input type="password" id="" class="form-control" name="password">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="example-email">Retype Password <span class="text-danger">*</span></label>
                                                        <input type="password" id="" class="form-control" name="repassword">
                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                        <div id='response'></div>