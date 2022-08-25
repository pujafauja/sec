<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword2" class="sr-only">Search</label>
                            <input type="search" class="form-control" id="search-products" placeholder="Search...">
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="status-select" class="mr-2">Sort By</label>
                            <select class="custom-select" id="product-status-select">
                                <option value="id" selected="">All</option>
                                <option value="clicked">Popular</option>
                                <option value="price-low">Price Low</option>
                                <option value="price-high">Price High</option>
                                <option value="sold">Sold Out</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <a href="<?php echo base_url('ecommerce/new-featured') ?>" class="btn btn-danger waves-effect waves-light new-featured"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                    </div>
                </div><!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div id="featured-lists"></div>