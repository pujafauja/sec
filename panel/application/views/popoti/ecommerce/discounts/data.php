<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="<?php echo base_url('ecommerce/add-discount') ?>" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Add New</a>
                    </div>
                </div>

                <table id="discounts-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Discount Name</th>
                            <th>Periode</th>
                            <th class="no-sort">Products Affected</th>
                            <th>Discount</th>
                            <th class='no-sort'>Options</th>
                        </tr>
                    </thead>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->