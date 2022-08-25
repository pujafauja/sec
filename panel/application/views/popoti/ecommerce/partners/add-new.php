<form action="<?php echo site_url('ecommerce/save-partner/'.encode($partner->id)) ?>" method="post" class="add-new" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">

                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Partner Data</h5>
                    
                <div class="form-group">
                    <label for="simpleinput">Partner Name <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" name="nama" class="form-control" value="<?php echo $partner->nama ?>">
                </div>
                    
                <div class="form-group">
                    <label for="simpleinput">URL / Website <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" name="url" class="form-control" value="<?php echo $partner->url ?>">
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">

                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Partner Logo</h5>
                    
                <input name="logo" type="file" data-plugins="dropify" data-height="150" data-allowed-file-extensions="png jpg jpeg" <?php echo ($partner->logo) ? 'data-default-file="'.base_url('media/partners/'.$partner->logo).'"' : '' ?> data-max-file-size="3M" />

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">
                <button type="submit" class="btn w-sm btn-success waves-effect waves-light save-product">Save</button>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</form>