<div class="row">

    <div class="col-lg-12">
    	<div class="card">
            <div class="card-body">

                <h4 class="header-title mb-3"> Add New Position <div class="text-primary ml-3" role="status" id="loading"></div></h4>

                <div id="ResponseInput" class="mt-3 mb-3"></div>

                <div id="rootwizard">
                    <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                        <li class="nav-item" data-target-form="#posisi">
                            <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                <i class="mdi mdi-account-details mr-1"></i>
                                <span class="d-none d-sm-inline">Position</span>
                            </a>
                        </li>
                        <li class="nav-item" data-target-form="#otoritas">
                            <a href="#fourth" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                <i class="mdi mdi-lock-open-check mr-1"></i>
                                <span class="d-none d-sm-inline">Authority</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content mb-0 b-0 pt-0">

                        <div class="tab-pane" id="first">
                            <form id="posisi" method="post" action="<?php echo base_url('user/tambah-posisi/'.encode($otoritas->id)) ?>" class="form-horizontal">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">Position Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="userName3" name="nama" value="<?php echo $otoritas->nama ?>" required>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </form>
                        </div>

                        <div class="tab-pane fade" id="fourth">
                            <form id="otoritas" method="post" action="<?php echo base_url('user/tambah-posisi/'.encode($otoritas->id)) ?>" class="form-horizontal">
                                <div class="row">
                                    <div class="col-12">
                                    	<table class="table table-sm table-striped">
					                        <thead>
					                            <tr>
					                                <th>Menu Option</th>
					                                <th>View</th>
					                                <th>Add</th>
					                                <th>Edit</th>
					                                <th>Delete</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <?php echo nestedTable($menu, FALSE, '', $otoritas->otority) ?>
					                        </tbody>
					                    </table>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                        </div>

                        <ul class="list-inline wizard mb-0">
                            <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                            </li>
                            <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-secondary">Next</a></li>
                            <li class="finish list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-secondary">Finish</a></li>
                        </ul>

                    </div> <!-- tab-content -->
                </div> <!-- end #rootwizard-->

            </div> <!-- end card-body -->
        </div> <!-- end card-->
		<!-- <form action="<?php echo site_url('user/tambah-group/'.$otoritas->id) ?>" method="post" enctype="multipart/form-data" class="form-horizontal add-group">
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                <div class="col-12 col-md-9"><input type="text" name="nama" value="<?php echo $otoritas->nama ?>" placeholder="Nama" class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    
                    <div id='ResponseInput'></div>
                </div>
            </div>
        </form> -->
    </div>

</div>