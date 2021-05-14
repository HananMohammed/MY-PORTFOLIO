<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 footer-menu">
                    <h4>Download App</h4>
                    <p>COOMING SOON</p>
                    <a href="#about" class="btn-get-started" > Download Now </a>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                    <a href="<?php echo e(route('front.homepage')); ?>">
                        <img src="<?php echo e(asset_public('storage/uploads/'.$data["setting"][0]->image)); ?>" style=" padding: 0;margin: 0;max-height: 56px;" >
                    </a>
                        <div class="footer-contact1">
                            <label for="#addresses"><strong ><?php echo app('translator')->get('front.address'); ?></strong></label>
                            <ul style="list-style-type: none;" id="addresses ">
                                <?php $__currentLoopData = $data["addresses"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($address->address); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <div  class="footer-contact1">

                        <label for="#phones"><strong><?php echo app('translator')->get('front.phone'); ?></strong></label>
                        <ul style="list-style-type: none;" id="phones">
                            <?php $__currentLoopData = $data["phones"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="tel:<?php echo e($phone->phone); ?>" style="font-size:13px;color: #212529;"><?php echo e($phone->phone); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <label for="#emails"><strong><?php echo app('translator')->get('front.email2'); ?></strong></label>
                        <ul style="list-style-type: none;" id="emails">
                            <?php $__currentLoopData = $data["emails"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="mailto:<?php echo e($email->email); ?>" style="font-size:13px;color: #212529;" ><?php echo e($email->email); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                    <h4><?php echo app('translator')->get('front.useful'); ?></h4>
                    <ul class="footer-menu">
                        <li><i class="bx bx-chevron-right"></i> <a href="#header"><?php echo app('translator')->get('front.home'); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about"><?php echo app('translator')->get('front.about'); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services"><?php echo app('translator')->get('front.services'); ?></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#portfolio"><?php echo app('translator')->get('front.project'); ?></a></li>

                        <li><i class="bx bx-chevron-right"></i> <a href="#contact"><?php echo app('translator')->get('front.contact'); ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                    <h4><?php echo app('translator')->get('front.our-services'); ?></h4>
                    <ul class="footer-menu">
                        <?php $__currentLoopData = $data["services"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services"><?php echo e($service->title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                    <h4><?php echo app('translator')->get('front.social-network'); ?></h4>
                    <p><?php echo app('translator')->get('front.specialized'); ?></p>
                    <div class="social-links mt-3">
                        <?php $__currentLoopData = $data["socialMedia"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <a href="<?php echo e($social->url); ?>"  target="blank" class="social-media" >  <?php echo $social->icon()->pluck('icon')[0]; ?> </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Hanan Mohamed</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed and Developed by <a href="<?php echo e(route('front.homepage')); ?>">Hanan Mohamed</a>
        </div>
    </div>
</footer>
<!-- End Footer -->
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/layouts/includes/footer.blade.php ENDPATH**/ ?>