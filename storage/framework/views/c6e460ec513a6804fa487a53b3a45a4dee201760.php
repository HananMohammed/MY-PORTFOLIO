<?php $__env->startSection('title' ,'Settings'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5"><?php echo app('translator')->get('admin.setting-edit'); ?></h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('admin.adminPanel')); ?>" class="text-muted"><?php echo app('translator')->get('admin.adminPanel'); ?></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascrpit:;" class="text-muted"><?php echo app('translator')->get('admin.setting-edit'); ?></a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <?php if(!empty($errors->any())): ?>
                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">
                            <ol>
                                <?php if($errors->any()): ?>
                                    <?php echo implode('',$errors->all('<li>:message</li>')); ?>

                                <?php endif; ?>
                            </ol>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo app('translator')->get('admin.setting-edit'); ?></h3>
                            </div>
                            <!--begin::Form-->
                            <form action="<?php echo e(route('admin.settings.update')); ?>" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo $__env->make('admin.settings.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2"><?php echo app('translator')->get('admin.submit'); ?></button>
                                    <a href="<?php echo e(route('admin.adminPanel')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('admin.close'); ?></a>
                                </div>
                            </form>
                            <!--end::Form-->
                            <!-- Start Sub setting Form-->
                            <div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('admin.sub-setting'); ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div data-scroll="true" data-height="300">
                                                <div class="row">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Sub setting Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/MY-PORTFOLIO/resources/views/admin/settings/edit.blade.php ENDPATH**/ ?>