<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('assets/admin/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/vendors/js/extensions/toastr.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/forms/switch.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/select/select2.full.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/forms/select/form-select2.js')); ?>" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo e(asset('assets/admin/vendors/js/charts/chart.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/charts/echarts/echarts.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/vendors/js/extensions/datedropper.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/extensions/timedropper.min.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/pages/chat-application.js')); ?>" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="<?php echo e(asset('assets/admin/js/core/app-menu.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/core/app.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/customizer.js')); ?>" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo e(asset('assets/admin/js/scripts/pages/dashboard-crypto.js')); ?>" type="text/javascript"></script>


<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatables/datatable-styling.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatables-extensions/datatable-responsive.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatables-extensions/datatables-sources.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatable-button/datatable-button-basic.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatable-button/datatable-html5.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatable-button/datatable-print.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatable-button/datatable-extensions-api.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/extensions/date-time-dropper.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="<?php echo e(asset('assets/admin/js/scripts/forms/checkbox-radio.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/modal/components-modal.js')); ?>" type="text/javascript"></script>
<script>
    $('#table').DataTable({
        paging :true,
        //responsive: true,
        processing: true,
        orderBy: [[1, 'desc']],
        minifiedAjax:true,
        bProcessing:true,
        lengthChange: true,
        autoWidth: false,
        info: true,
        searching:true,
        ordering:true,
        lengthMenu: [[5, 10, 25, 100,-1], [5, 10, 25, 50, '<?php echo e(trans('admin.all_record')); ?>']],
        language: {
            "lengthMenu": "<?php echo e(trans('admin.sLengthMenu')); ?>",
            "paginate":{
                "sFirst"                    : "<?php echo e(trans('admin.sFirst')); ?>",
                "sLast"                     : "<?php echo e(trans('admin.sLast')); ?>",
                "sNext"                     : '<?php echo e(trans('admin.sNext')); ?>',
                "sPrevious"                 : "<?php echo e(trans('admin.sPrevious')); ?>",
            },
            "sSearch"                      : "<?php echo e(trans('admin.sSearch')); ?>",
            'sProcessing'                  : "<?php echo e(trans('admin.sProcessing')); ?>",
            'sZeroRecords'                 : "<?php echo e(trans('admin.sZeroRecords')); ?>",
            'sEmptyTable'                  : "<?php echo e(trans('admin.sEmptyTable')); ?>",
            'sInfo'                        : "<?php echo e(trans('admin.sInfo')); ?>",
            'sInfoEmpty'                   : "<?php echo e(trans('admin.sInfoEmpty')); ?>",
            'sInfoFiltered'                : "<?php echo e(trans('admin.sInfoFiltered')); ?>",
            'sLoadingRecords'              : "<?php echo e(trans('admin.sLoadingRecords')); ?>",
            'sSortAscending'               : "<?php echo e(trans('admin.sSortAscending')); ?>",
            'sSortDescending'              : "<?php echo e(trans('admin.sSortDescending')); ?>",
            'sInfoPostFix'                 : "<?php echo e(trans('admin.sInfoPostFix')); ?>",
            'sUrl'                         : "<?php echo e(trans('admin.sUrl')); ?>",
            'sInfoThousands'               : "<?php echo e(trans('admin.sInfoThousands')); ?>",
        },
    });
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
</script>
<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modern\resources\views/dashboard/includes/tpl_end.blade.php ENDPATH**/ ?>