<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_en"><?php echo app('translator')->get('admin.title-en'); ?><label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="<?php echo e(old('title.0')??$service->getTranslation('title','en')); ?>" class="form-control " id="title_en"  placeholder="<?php echo app('translator')->get('admin.enter-en-title'); ?>" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_ar"><?php echo app('translator')->get('admin.title-ar'); ?><label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="<?php echo e(old('title.1')??$service->getTranslation('title','ar')); ?>" class="form-control " id="title_ar"  placeholder="<?php echo app('translator')->get('admin.enter-ar-title'); ?>" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_en"><?php echo app('translator')->get('admin.text-en'); ?><label class="text-danger">*</label></label>
                <textarea type="text" name="text[]" class="form-control summernote" id="text_en" placeholder="<?php echo app('translator')->get('dashboard.enter-english-text'); ?>" >
                    <?php echo e(old('text.0')??$service->getTranslation('text','en')); ?>

                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_ar"><?php echo app('translator')->get('admin.text-ar'); ?><label class="text-danger">*</label></label>
                <textarea type="text" name="text[]" class="form-control summernote" id="text_ar" placeholder="<?php echo app('translator')->get('dashboard.enter-arabic-text'); ?>" >
                    <?php echo e(old('text.1')??$service->getTranslation('text','ar')); ?>

                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-xl-12">
            <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url(<?php echo e(asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')); ?>) ;width:300px;height: 220px;">
                <div class="image-input-wrapper"  style="background-image:<?php if(!empty($service->toArray())): ?> url(<?php echo e(asset_public('storage/uploads/'.$service->image)); ?>) <?php else: ?> url(<?php echo e(asset_public('admin/assets/media/photography.svg')); ?>) <?php endif; ?>; width:300px;height: 220px;"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="image">
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>

    </div>
</div
    <?php $__env->startSection('scripts'); ?>
    /*editor*/
<script src="<?php echo e(asset_public('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')); ?>"></script>
<script src="<?php echo e(asset_public('admin/assets/plugins/js/pages/crud/forms/editors/ckeditor-classic.js')); ?>"></script>
<script src="<?php echo e(asset_public('admin/assets/js/pages/crud/forms/widgets/select2.js')); ?>"></script>
<script>
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var demos = function() {
            // basic
            $('#kt_select2_1').select2({
                placeholder: "Select a state"
            });
        }
        // Public functions
        return {
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
    });    </script>
<script>
    // Class definition

    var KTSummernoteDemo = function () {
        // Private functions
        var demos = function () {
            $('.summernote').summernote({
                height: 150
            });
        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSummernoteDemo.init();
    });
</script>
<script>
    "use strict";

    // Class definition
    var KTContactsEdit = function () {
        // Base elements
        var avatar;

        var initAvatar1 = function() {
            avatar = new KTImageInput('kt_contacts_edit_avatar1');
        }
        return {
            // public functions
            init: function() {
                initAvatar1();
            }
        };
    }();


    jQuery(document).ready(function() {
        KTContactsEdit.init();
    });
</script>
<?php if(session()->has('success')): ?>
    <script>Swal.fire("Good Job", "<?php echo e(session()->get('success')); ?>", "success");</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/admin/services/form.blade.php ENDPATH**/ ?>