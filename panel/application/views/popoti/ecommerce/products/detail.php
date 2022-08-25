<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-5">

                    <div class="tab-content pt-0">
                        <?php $productno = 1; 
                        foreach(json_decode($detail->images) as $image): ?>
                        <div class="tab-pane <?php echo $productno == 1 ? 'active show' : '' ?>" id="<?php echo 'product-'.$productno.'-item' ?>">
                            <img src="<?php echo base_url('media/products/lg/'.$image) ?>" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <?php $productno++; endforeach; ?>
                    </div>

                    <ul class="nav nav-pills nav-justified">
                        <?php $productno = 1; 
                        foreach(json_decode($detail->images) as $image): ?>
                        <li class="nav-item">
                            <a href="#<?php echo 'product-'.$productno.'-item' ?>" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb <?php echo $productno == 1 ? 'active show' : '' ?>">
                                <img src="<?php echo base_url('media/products/sm/'.$image) ?>" alt="" class="img-fluid mx-auto d-block rounded">
                            </a>
                        </li>
                        <?php $productno++; endforeach; ?>
                    </ul>
                </div> <!-- end col -->
                <div class="col-lg-7">
                    <div class="pl-xl-3 mt-3 mt-xl-0">
                        <h4 class="mb-3"><?php echo $detail->nama ?></h4>
                        <p class="text-muted float-left mr-3 text-warning">
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                            <span class="far fa-star"></span>
                        </p>
                        <p class="mb-4"><a href="" class="text-muted">( 36 Customer Reviews )</a></p>
                        <!-- <h6 class="text-danger text-uppercase">20 % Off</h6> -->
                        <!-- <h4 class="mb-4">Price : <span class="text-muted mr-2"><del>$80 USD</del></span> <b>$64 USD</b></h4> -->
                        <h4 class="mb-4">Price : <b><?php echo rupiah($detail->price) ?> IDR</b></h4>
                        <h4>
                            <?php if ($detail->stocks > 0): ?>
                                <span class="badge bg-soft-success text-success mb-4">Instock</span>
                            <?php else: ?>
                                <span class="badge bg-soft-danger text-danger mb-4">Out of stock</span>
                            <?php endif; ?>
                        </h4>
                        <p class="text-muted mb-4"><?php echo $detail->description ?></p>

                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->