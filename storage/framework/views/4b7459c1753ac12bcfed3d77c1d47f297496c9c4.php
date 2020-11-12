<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin.application_name')); ?> |
    <?php echo e(trans('admin.admin_create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- Start app-content -->
    <div class="app-content content">
        <!-- Start Content Wrapper -->
        <div class="content-wrapper">
            <!-- Start Content Header -->
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <!-- Start Breadcrumbs -->
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item h5"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(trans('admin.dashboard')); ?></a></li>
                                <li class="breadcrumb-item h5"><a href="<?php echo e(route('admin.admins')); ?>"> <?php echo e(trans('admin.admins')); ?></a></li>
                                <li class="breadcrumb-item h5"><a href="<?php echo e(route('admin.create')); ?>"> <?php echo e(trans('admin.admin_create')); ?></a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Breadcrumbs -->
                </div>
            </div>
            <!-- End Content Header -->

            <!-- Start Page Heading -->
            <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Cairo';">
                    <i class="la la-plus-circle"></i> /
                    <?php echo e(trans('admin.create_new_admin')); ?>

                </h1>
            </div>
            <!-- End Page Heading -->
            <hr>
            <!-- Start Content Body -->
            <div class="content-body">
                <h1 class="h4 mb-0 text-gray-800" style="font-family: 'Cairo';">
                    <i class="ft-edit-2"></i> /
                    <?php echo e(trans('admin.adminDetails')); ?>

                </h1>
            </div>
            <br><br>
            <!-- Start Form -->
            <?php echo $__env->make('dashboard.includes.alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('dashboard.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Start Card Content -->
            <div class="card-content collapse show">
                <!-- Start Card Body -->
                <div class="card-body">
                    <!-- Start Form -->
                    <form class="form" action="<?php echo e(route('admin.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <!-- Start Form body -->
                        <div class="form-body">
                            <!-- Start Row -->
                            <div class="row">
                                <!-- Start Name Field -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold;" for="projectinput1"><?php echo e(trans('admin.adminsName')); ?></label>
                                        <input type="text" name="name" value="" id="name" class="form-control" placeholder="<?php echo e(trans('admin.adminName_typing')); ?>">
                                    </div>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- End Name Field -->

                                <!-- Start Username Field -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold;" for="projectinput2"><?php echo e(trans('admin.adminNickname')); ?></label>
                                        <input type="text" name="username" value="" id="name" class="form-control" placeholder="<?php echo e(trans('admin.adminNickname_typing')); ?>">
                                    </div>
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- End Username Field -->

                                <!-- Start Email Field -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold;" for="projectinput3"><?php echo e(trans('admin.adminEmail')); ?></label>
                                        <input type="email" name="email" value="" id="name" class="form-control" placeholder="<?php echo e(trans('admin.adminEmail_typing')); ?>">
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
                                </div>
                                <!-- End Email Field -->
                            </div>
                            <!-- End Row -->

                            <div class="row">
                                <!-- Start Password Field -->
                                <div class="col-md-4">
                                    <div class="form-group position-relative">
                                        <label style="font-weight: bold;" for="projectinput2"><?php echo e(trans('admin.password')); ?></label>
                                        <input type="password" name="password" class="form-control" id="user-password" placeholder="<?php echo e(trans('admin.type_your_password_here')); ?>" required>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- End Password Field -->
                            </div>

                            <!-- Start Status Row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mt-1">
                                        <label for="switcheryColor4" style="font-weight: bold;"><?php echo e(trans('admin.status')); ?></label>
                                        <input type="checkbox" class="switchery" value="1" name="status" id="switcheryColor4" data-color="success" checked />
                                    </div>
                                </div>
                            </div>
                            <!-- End Status Row -->
                            <hr>
                            <!-- Start Actions Row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">
                                        <i class="ft-check-circle"> </i>
                                        <?php echo e(trans('admin.save')); ?>

                                    </button>
                                    <button type="button" class="btn btn-warning" onclick="history.back();">
                                        <i class="ft-rotate-ccw"> </i>
                                        <?php echo e(trans('admin.back')); ?>

                                    </button>
                                </div>
                            </div>
                            <!-- End Actions Row -->
                        </div>
                        <!-- End Form body -->
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End Card Content -->
        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End app-content -->
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modern\resources\views/dashboard/admins/create.blade.php ENDPATH**/ ?>