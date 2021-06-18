<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

        <div class="logo mr-auto">
            <a href="<?php echo e(route('front.homepage')); ?>">  <img src="<?php echo e(asset_public('storage/uploads/'.$data["setting"][0]->image)); ?>" ></a>

        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header"><?php echo app('translator')->get('front.home'); ?></a></li>
                <li><a href="#about"><?php echo app('translator')->get('front.about'); ?></a></li>
                <li><a href="#services"><?php echo app('translator')->get('front.services'); ?></a></li>
                <li><a href="#portfolio"><?php echo app('translator')->get('front.project'); ?></a></li>

                <li><a href="#contact"><?php echo app('translator')->get('front.contact'); ?></a></li>
                <li>
                    <?php if(app()->getLocale() == 'ar'): ?>
                        <a rel="alternate" hreflang="<?php echo e(app()->getLocale()); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL('en', null, [], true)); ?>">
                            <span class="symbol symbol-20 lang mr-3">
                            <img src="<?php echo e(asset_public('front/assets/images/united-states (1).svg')); ?>">
                            </span>
                         </a>
                    <?php else: ?>
                        <a rel="alternate" hreflang="<?php echo e(app()->getLocale()); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL('ar', null, [], true)); ?>">
                           <span class="symbol symbol-20 lang mr-3">
                                <img src="<?php echo e(asset_public('front/assets/images/egypt.svg')); ?>">
                           </span>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>
<?php /**PATH /opt/lampp/htdocs/MY-PORTFOLIO/resources/views/front/layouts/includes/navbar.blade.php ENDPATH**/ ?>