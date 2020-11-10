<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin.application_name')); ?> |
    <?php echo e(trans('admin.forget_password_page_title')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <img src="<?php echo e(asset('assets/admin/images/logo/logo-dark.png')); ?>" alt="branding logo">
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span><?php echo e(trans('admin.forget_password_content')); ?></span>
                        </h6>
                    </div>
                    <?php echo $__env->make('dashboard.includes.alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('dashboard.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="" method="post" novalidate>
                                <?php echo csrf_field(); ?>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="text" name="email" class="form-control" id="user-name" placeholder="<?php echo e(trans('admin.type_your_email_here')); ?>" required>
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-md-6 col-12 float-sm-left text-center text-sm-left">
                                        <a href="<?php echo e(route('admin.login')); ?>" class="card-link text-dark">
                                            <?php echo e(trans('admin.backTo_login_page')); ?>

                                        </a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-dark btn-block">
                                    <i class="ft-unlock"> </i>
                                    <?php echo e(trans('admin.rest_password_link_btn')); ?>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modern\resources\views/dashboard/auth/forgetPassword.blade.php ENDPATH**/ ?>