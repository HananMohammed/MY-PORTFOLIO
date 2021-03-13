<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2><?php echo app('translator')->get('front.our-services'); ?></h2>
            <p><?php echo app('translator')->get('front.check-out'); ?></p>
        </div>

        <div class="row">
            <?php $__currentLoopData = $data["services"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon">
                            <div class="service-img-color">
                                <img src="<?php echo e(asset_public('storage/uploads/'.$service->image)); ?>" class="img-fluid" alt="seo">
                            </div>
                        </div>
                        <h4 class="title"><a href="#"><?php echo e($service->title); ?></a></h4>
                        <p class="description"><?php echo $service->text; ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<!-- End Services Section -->
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/services/index.blade.php ENDPATH**/ ?>