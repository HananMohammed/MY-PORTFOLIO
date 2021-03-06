<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" <?php if(app()->getLocale() == 'ar'): ?> dir="rtl" <?php endif; ?>>
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="WE-Coders"/>
    <meta name="keywords" content="WE-Coders, Development Company, Marketing Agency" />
    <meta name="author" content="Hanan-Mohammed"/>
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($data["setting"][0]->title); ?>|<?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicons -->
    <link href="<?php echo e(asset_public('storage/uploads/'.$data["setting"][0]->image)); ?>" rel="icon">
    <link href="<?php echo e(asset_public('storage/uploads/'.$data["setting"][0]->image)); ?>" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset_public('front/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <?php if(app()->getLocale()=='ar'): ?>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    <?php endif; ?>
    <link href="<?php echo e(asset_public('front/assets/css/style.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
    <?php if(app()->getLocale()=='ar'): ?>
        <link href="<?php echo e(asset_public('front/assets/css/style_ar.css')); ?>" rel="stylesheet">
    <?php endif; ?>
    <!-- whatsapp Chat Section-->
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!--whatsapp Chat Section-->
</head>
<body>
<!--Page main section start-->
<?php echo $__env->make('front.layouts.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="lightModeToggle">
    <div class="lightModeRotate">
        <div class="moon">
            <img src="<?php echo e(asset_public('front/assets/images/moon.svg')); ?>" class="img-fluid" alt="moon">
        </div>
        <div class="sun">
            <img src="<?php echo e(asset_public('front/assets/images/sun.svg')); ?>" class="img-fluid" alt="sun">
        </div>
    </div>
</div>
<?php echo $__env->yieldContent('content'); ?>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="WAButton" style="z-index: 30;right: 60px!important;"></div>
<?php echo $__env->make('front.layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<a href="https://api.whatsapp.com/send?phone=<?php echo e($data["setting"][0]->whatsapp); ?>" class="btn-whatsapp-pulse" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<!-- Vendor JS Files -->
<script src="<?php echo e(asset_public('front/assets/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/venobox/venobox.min.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/vendor/aos/aos.js')); ?>"></script>
<script src="<?php echo e(asset_public('front/assets/js/main.js')); ?>"></script>
<script src="<?php echo e(asset_public('js/app.js')); ?>"></script>



















<?php echo $__env->yieldContent('scripts'); ?>
<!--main js file end-->
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/MY-PORTFOLIO/resources/views/front/layouts/app.blade.php ENDPATH**/ ?>