<section class="w3l-banner-slider-main inner-pagehny">
    <div class="breadcrumb-infhny">
        <div class="top-header-content">
            <?php echo $__env->make('front.layouts.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="breadcrumb-contentnhy">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <h2 class="hny-title text-center"><?php echo app('translator')->get('front.contact'); ?></h2>
                        <ol class="breadcrumb mb-0">
                            <li><a href="<?php echo e(route('front.homepage')); ?>"><?php echo app('translator')->get('front.homepage'); ?></a>
                                <span class="fa fa-angle-double-right"></span></li>
                            <li class="active"><?php echo app('translator')->get('front.contact'); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/contact/banner/index.blade.php ENDPATH**/ ?>