<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New Category</h5>
                <form action="<?php echo base_url('ecommerce/save-category') ?>" method="post" class="category-form">
                    <div class="form-group">
                        <label for="">Parent</label>
                        <select name="parentid" id="" class="form-control">
                            <option value="">-- Empty --</option>
                            <?php echo nestedKategoriSelect($category) ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group col-12">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Save</button>
                            <button type="reset" class="btn btn-danger"><i class="fas fa-ban mr-1"></i>Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">

                <div class="custom-dd-empty dd" id="nestable_list_3">';

                    <?php echo nestedkategori($category) ?>

                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->