<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
            <input type="hidden" name="product-id" value="<?php echo encode($detail->id) ?>">

            <div class="form-group mb-3">
                <label for="product-name">Product Name <span class="text-danger">*</span></label>
                <input type="text" id="product-name" name="nama" class="form-control" placeholder="" value="<?php echo $detail->nama ?>">
            </div>

            <div class="form-group mb-3">
                <label for="product-description">Product Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="product-description" name="description" rows="5" placeholder="Please enter description"><?php echo $detail->description ?></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="product-summary">Product Summary</label>
                <textarea class="form-control" id="product-summary" name="summary" rows="3" placeholder="Please enter summary"><?php echo $detail->summary ?></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="product-price">Price <span class="text-danger">*</span></label>
                <input type="text" class="form-control autonumber" data-a-sign="Rp " data-a-sep="." data-a-dec="," data-m-dec="2" id="product-price" name="price" placeholder="Enter amount" value="<?php echo $detail->price ?>">
            </div>

            <div class="form-group mb-3">
                <label for="product-stock">Stock <span class="text-danger">*</span></label>
                <input type="text" class="form-control autonumber" data-a-sep="." data-a-dec="," data-m-dec="0" id="product-stock" name="stock" placeholder="" value="<?php echo $detail->stocks ?>">
            </div>


            <div class="form-group mb-0">
                <label>Comment</label>
                <textarea class="form-control" name="comment" rows="3" placeholder="Please enter comment"><?php echo $detail->comment ?></textarea>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->

    <div class="col-lg-6">

        <div class="card-box">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Categories</h5>

            <div class="form-group mb-3">
                <div class="form-group mb-3">
                    <label for="product-category">Categories <span class="text-danger">*</span></label>
                    <select id="product-category" name="categories[]" multiple class="form-control">
                        <?php echo nestedKategoriMultipleSelect($category, '', json_decode($detail->categories, true)); ?>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="card-box">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

            <form action="/" method="post" id="myAwesomeDropzone" enctype="multipart/form-data">
                <input name="pictures[]" type="file" data-plugins="dropify" data-height="150" data-allowed-file-extensions="png jpg jpeg" data-max-file-size="3M" multiple />
            </form>

            <!-- Preview -->
            <div class="dropzone-previews mt-3" id="file-previews"></div>

        </div> <!-- end col-->

        <div class="card-box">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

            <div class="form-group mb-3">
                <label for="product-meta-title">Meta title</label>
                <input type="text" class="form-control" name="meta-title" id="product-meta-title" placeholder="Enter title" value="<?php echo $detail->metaTitle ?>">
            </div>

            <div class="form-group mb-3">
                <label for="product-meta-keywords">Meta Keywords</label>
                <input type="text" class="form-control" name="meta-keywords" id="product-meta-keywords" placeholder="Enter keywords" value="<?php echo $detail->metaKeywords ?>">
            </div>

            <div class="form-group mb-0">
                <label for="product-meta-description">Meta Description </label>
                <textarea class="form-control" rows="5" name="meta-description" id="product-meta-description" placeholder="Please enter description"><?php echo $detail->metaDescription ?></textarea>
            </div>
        </div> <!-- end card-box -->

    </div> <!-- end col-->
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="text-center mb-3">
            <a href="<?php echo base_url('ecommerce/products') ?>" class="btn w-sm btn-light waves-effect">Cancel</a>
            <a href="<?php echo base_url('ecommerce/save-product') ?>" class="btn w-sm btn-success waves-effect waves-light save-product">Save</a>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->


<!-- file preview template -->
<div class="d-none" id="uploadPreviewTemplate">
    <div class="card mt-1 mb-0 shadow-none border">
        <div class="p-2">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                </div>
                <div class="col pl-0">
                    <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                    <p class="mb-0" data-dz-size></p>
                </div>
                <div class="col-auto">
                    <!-- Button -->
                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                        <i class="dripicons-cross"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>