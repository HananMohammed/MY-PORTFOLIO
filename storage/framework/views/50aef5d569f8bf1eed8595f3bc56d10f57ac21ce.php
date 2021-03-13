<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                <h1 data-aos="fade-down"><?php echo e($data["slider"]->title); ?></h1>
                <h2 data-aos="fade-up"><?php echo $data["slider"]->text; ?></h2>
                <a data-aos="fade-up" href="#about" class="btn-get-started scrollto"><?php echo app('translator')->get('front.get-started'); ?></a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="<?php echo e(asset_public('storage/uploads/' . $data["slider"]->image)); ?>" class="img-fluid animated" alt="" style="height: 350px;">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/slider/index.blade.php ENDPATH**/ ?>