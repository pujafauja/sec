

<div class="row">
    <?php
    if($products['totalFiltered'] > 0):
    foreach($products['query']->result() as $pro): ?>
    <div class="col-md-3 col-xl-2">
        <div class="card-box product-box">

            <div class="product-action">
                <button data-id="<?php echo encode($pro->id) ?>" class="btn btn-success btn-xs waves-effect waves-light add-this"><i class="fas fa-check"></i></button>
            </div>

            <div class="bg-light">
                <?php $gambar = json_decode($pro->images) ?>
                <img src="<?php echo base_url('media/products/md/'.$gambar[0]) ?>" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><?php echo $pro->nama ?></a>
                        <div class="text-warning mb-2 font-13">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>                            
                        </div>
                        <h5 class="m-0"> <span class="text-muted"> Stocks : <?php echo rupiah($pro->stocks) ?> pcs</span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            Rp <?php echo price($pro->price) ?>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->
    <?php 
    endforeach;
    endif; ?>
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <?php customPagination($products['totalFiltered'], $itemperpage, 'ecommerce/product-modal-lists', $hlm) ?>
    </div> <!-- end col-->
</div>
<!-- end row-->