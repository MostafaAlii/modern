<!-- begin tpl_start -->
<?php echo $__env->make('dashboard.includes.tpl_start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end tpl_start -->

    <!-- begin header -->
    <?php echo $__env->make('dashboard.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end header -->

    <!-- begin sidebar -->
    <?php echo $__env->make('dashboard.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end sidebar -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- begin footer html -->
    <?php echo $__env->make('dashboard.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end footer -->

    
     

<!-- begin tpl_end -->
<?php echo $__env->make('dashboard.includes.tpl_end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end tpl_end --><?php /**PATH C:\xampp\htdocs\modern\resources\views/layouts/admin.blade.php ENDPATH**/ ?>