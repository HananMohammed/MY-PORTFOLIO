<div id="app">
    <projects-component
        :recent-projects = "'<?php echo app('translator')->get('front.recent-projects'); ?>'"
        :checkout-projects = "'<?php echo app('translator')->get('front.checkout-projects'); ?>'"
        :all = "'<?php echo app('translator')->get('front.all'); ?>'"
        :web = "'<?php echo app('translator')->get('front.web'); ?>'"
        :app = "'<?php echo app('translator')->get('front.app'); ?>'"
        :ui = "'<?php echo app('translator')->get('front.ui'); ?>'"
    ></projects-component>
</div>
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/projects/index.blade.php ENDPATH**/ ?>