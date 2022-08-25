<form action="<?php echo site_url('ecommerce/save-discount/'.encode($discount->id)) ?>" method="post" class="add-new">
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">

                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                    
                <div class="form-group">
                    <label for="simpleinput">Discount Name <span class="text-danger">*</span></label>
                    <input type="text" id="simpleinput" name="nama" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="simpleinput">Periode <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" id="" name="awal" class="form-control basic-datepicker" value="">
                        <div class="input-group-text">-</div>
                        <input type="text" id="" name="akhir" class="form-control basic-datepicker" value="">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">

                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Discount Detail</h5>
                    
                <div class="form-group">
                    <label for="simpleinput">Discount For <span class="text-danger">*</span></label>
                    <select name="type" id="" class="form-control">
                        <option value="all">All Products</option>
                        <option value="product">Specific Products</option>
                        <option value="kategori">Specific Categories</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="form-group mb-3">
                        <label for="product-category">Categories <span class="text-danger">*</span></label>
                        <select id="product-category" name="categories[]" multiple class="form-control">
                            <?php echo nestedKategoriMultipleSelect($category, '', json_decode($discount->kategoriid, true), $optionGroup = true); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="simpleinput">Disc. Amount <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <label for="">
                                    <input type="radio" name="typeDisc" value="%" checked>
                                    %
                                </label>
                                <label for="">
                                    <input type="radio" name="typeDisc" value="Rp">
                                    Rp
                                </label>
                            </div>
                        </div>
                        <input type="text" id="" name="nominal" class="form-control currency" value="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">
                <a href="<?php echo base_url('ecommerce/discounts') ?>" class="btn w-sm btn-light waves-effect">Cancel</a>
                <button type="submit" class="btn w-sm btn-success waves-effect waves-light save-product">Save</button>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</form>