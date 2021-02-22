<!-- //w3l-banner-slider-main -->
<section class="w3l-grids-hny-2">
    <!-- /content-6-section -->
    <div class="grids-hny-2-mian py-5">
        <div class="container py-lg-5">

            <h3 class="hny-title mb-0 text-center"><?php echo app('translator')->get('front.shop-with'); ?> <span><?php echo app('translator')->get('front.us'); ?></span></h3>
            <p class="mb-4 text-center"><?php echo app('translator')->get('front.shop-with-us-text'); ?></p>
            <div class="welcome-grids row mt-5">
                <?php $__currentLoopData = $data["categories"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2 col-md-4 col-6 welcome-image">
                    <div class="boxhny13">
                        <a href="<?php echo e(route('front.single-category-products',["id" => $category->id, "slug" => Str::slug($category->title, '-')])); ?>">
                            <img src="<?php echo e(asset_public('storage/uploads/'.$category->image)); ?>" class="img-fluid" alt="" />
                            <div class="boxhny-content">
                                <h3 class="title"><?php echo app('translator')->get('front.products'); ?></h3>
                            </div>
                        </a>
                    </div>
                    <h4><a href="<?php echo e(route('front.single-category-products',["id" => $category->id, "slug" => Str::slug($category->title, '-')])); ?>"><?php echo e($category->title); ?></a></h4>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
</section>
<!-- //content-6-section -->
<?php /**PATH C:\xampp\htdocs\we-coders\resources\views/front/homepage/categories/index.blade.php ENDPATH**/ ?>