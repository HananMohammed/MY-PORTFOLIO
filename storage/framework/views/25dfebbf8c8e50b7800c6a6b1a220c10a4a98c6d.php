<!-- //content-6-section -->

<section class="w3l-content-w-photo-6">
    <!-- /specification-6-->
    <div class="content-photo-6-mian py-5">
        <div class="container py-lg-5">
            <div class="align-photo-6-inf-cols row">

                <div class="photo-6-inf-right col-lg-6">
                    <?php echo $data["mens-offer"][0]->text; ?>

                    <a href="<?php echo e(route('front.products')); ?>" class="read-more btn">
                        <?php echo app('translator')->get('front.shop-now'); ?>
                    </a>
                </div>
                <div class="photo-6-inf-left col-lg-6">
                    <img src="<?php echo e(asset_public('storage/uploads/'. $data["mens-offer"][0]->image )); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //specification-6-->
<?php /**PATH C:\xampp\htdocs\we-coders\resources\views/front/homepage/mensOffer/index.blade.php ENDPATH**/ ?>