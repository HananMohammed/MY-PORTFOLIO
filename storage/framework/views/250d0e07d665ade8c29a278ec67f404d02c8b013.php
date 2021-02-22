<?php $__env->startSection('style'); ?>
    <style>
        .table-image .img-thumbnail{
            width: 50%;
        }
        .badge-info{
            background-color:#ff7315!important;
            top: 0px!important;
        }
        .btn-success{
            background-color: #ec6306!important;
            border-color: #ea7322!important;
        }
        .btn-success:hover, .btn-success:focus{
            background-color: #232020;
            border-color: #232020;
        }
        .btn-success:disabled {
            color: #fff;
            background-color: #e3772d;
            border-color: #be7545;

        .table-image {
        thead {
        td,
        th {
            border: 0;
            color: #666;
            font-size: 0.8rem;
        }
        }

        td,
        th {
            vertical-align: middle;
            text-align: center;

        &.qty {
             max-width: 2rem;
         }
        }
        }

        .price {
            margin-left: 1rem;
        }

        .modal-footer {
            padding-top: 0rem;
        }

    </style>
<?php $__env->stopSection(); ?>
<li class="transmitvcart galssescart2 cart cart box_1">
    <button class="top_transmitv_cart" type="button" data-toggle="modal" data-target="#cartModal">
        <?php echo app('translator')->get('front.cart'); ?><span class="fa fa-shopping-cart"><span class="badge"><?php echo e(session()->has('cart') ? session()->get('cart')->totalQuantity : ''); ?></span></span>
    </button>
</li>
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" <?php if(app()->getLocale()=='ar'): ?> dir="ltr"<?php endif; ?>>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0" style="color: #ff7315;">
                <h5 class="modal-title" id="exampleModalLabel" >
                   <?php echo app('translator')->get('front.shopping-cart'); ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">
                       <i class="fa fa-times"></i>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <?php if(!empty(session()->get('cart')->items )): ?>
                <table class="table table-image">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"><?php echo app('translator')->get('front.product'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('front.price'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('front.qty'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('front.total'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('front.action'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = session()->get('cart')->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td class="w-25">
                            <img src="<?php echo e(asset_public('storage/uploads/'.$item["item"]->image)); ?>" class="img-fluid img-thumbnail" alt="Sheep">
                        </td>
                        <td><?php echo e($item["item"]->title); ?></td>
                        <td><?php if(!empty($item["item"]->offer)): ?><?php echo e($item["item"]->offer); ?><?php else: ?> <?php echo e($item["item"]->price); ?> <?php endif; ?></td>
                        <td class="qty">
                            <a href="javascript:void(0)" class="badge badge-info" style="color: whitesmoke;"><?php echo e($item["quantity"]); ?></a>
                        </td>
                        <td><?php if(!empty($item["item"]->offer)): ?><?php echo e($item["item"]->offer * $item["quantity"]); ?><?php else: ?> <?php echo e($item["item"]->price * $item["quantity"]); ?> <?php endif; ?></td>
                        <td>
                            <a href="<?php echo e(route('front.removeFromCart',$item["item"]->id)); ?>" class="btn btn-danger btn-sm">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                    <div class="d-flex justify-content-end">
                        <h5 <?php if(app()->getLocale() == 'ar'): ?> dir="rtl" <?php endif; ?>><?php echo app('translator')->get('front.total'); ?>: <span class="price" style="color: #ff7315;"><?php echo e(session()->get('cart')->totalPrice." EGP"); ?></span></h5>
                    </div>
                <?php else: ?>
                <p class="error" style="text-align: center;"><?php echo app('translator')->get('front.cart-empty'); ?></p>
                <?php endif; ?>
                <?php if(!empty(session()->get('cart')->items )): ?>
                    <?php if(session()->get('cart')->totalQuantity >0 ): ?>
                        <a href="<?php echo e(route('front.checkout')); ?>" class="btn btn-success" <?php if(empty(session()->get('cart')->items )): ?> disabled <?php endif; ?>><?php echo app('translator')->get('front.checkout'); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('admin.close'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\we-coders\resources\views/front/cart/index.blade.php ENDPATH**/ ?>