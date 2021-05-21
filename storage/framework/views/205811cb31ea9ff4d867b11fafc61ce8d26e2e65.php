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
            <form action="<?php echo e(route('admin.phones.store')); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="col-lg-12 col-sm-12">
                        <label for="phone"><?php echo app('translator')->get('admin.phone'); ?><label class="text-danger">*</label></label>
                        <div class="form-group">
                            <input id="phone" name="phone" type="tel"  class="form-control "  value="<?php echo e(old('phone')); ?>" >
                        </div>
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
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/admin/settings/phone/form_store.blade.php ENDPATH**/ ?>