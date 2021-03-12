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
    <title><?php echo e($data["setting"][0]->title); ?>|<?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicons -->
    <link href="<?php echo e(asset_public('storage/uploads/'.$data["setting"][0]->image)); ?>" rel="icon">
    <link href="<?php echo e(asset_public('storage/uploads/'.$data["setting"][0]->image)); ?>" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset_public('front/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset_public('front/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset_public('front/assets/css/style.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
    <?php if(app()->getLocale()=='ar'): ?>

    <?php endif; ?>
    <!-- whatsapp Chat Section-->
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!--whatsapp Chat Section-->
</head>
<body>
<!--Page main section start-->
<?php echo $__env->make('front.layouts.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="WAButton" style="z-index: 30;right: 60px!important;"></div>
<?php echo $__env->make('front.layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<!-- whatsapp Chat Section-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<!--whatsapp Chat Section-->
<script type="text/javascript">
    $(function () {
        $('#WAButton').floatingWhatsApp({
            phone: '<?php echo e($data["setting"][0]->whatsapp); ?>', //WhatsApp Business phone number
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right" //Position: left | right

        });
    });
</script>
<?php echo $__env->yieldContent('scripts'); ?>
<!--main js file end-->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>