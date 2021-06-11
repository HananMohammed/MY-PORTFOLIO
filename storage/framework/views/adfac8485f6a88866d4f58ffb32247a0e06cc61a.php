<!-- Modal-->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('admin.new-section'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form action="<?php echo e(route('admin.social-media.store')); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="url"><?php echo app('translator')->get('admin.social-media-link'); ?><label class="text-danger">*</label></label>
                            <input id="url" name="url" type="url"  class="form-control"  value="<?php echo e(old('url')); ?>" placeholder="Enter A Social Media Related Link">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <label for="icon"><?php echo app('translator')->get('admin.social-media-icon'); ?><label class="text-danger">*</label></label>
                        <select class="form-control selectpicker" name="icon_id" id="icon">
                            <option value=""  disabled selected ><?php echo app('translator')->get('admin.select-social-media-icon'); ?></option>
                            <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($icon->id); ?>"><?php echo e($icon->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"><?php echo app('translator')->get('admin.close'); ?></button>
                    <input type="submit" class="btn btn-primary font-weight-bold" value="<?php echo app('translator')->get('admin.submit'); ?>" style="width: 15%;">
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/admin/settings/socialMedia/form_store.blade.php ENDPATH**/ ?>