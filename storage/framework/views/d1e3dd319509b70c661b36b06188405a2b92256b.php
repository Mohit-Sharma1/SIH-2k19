<?php $__env->startSection('page_title', 'Create Announcements'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/assets/custom/css/dp_selector.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/select2/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/select2/select2-bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets/v1/js/plugins/dropzonejs/min/dropzone.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
    <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/custom/js/dp_selector.js"></script>
    <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/custom/js/file_upload_names.js"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/select2/select2.full.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/masked-inputs/jquery.maskedinput.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/plugins/dropzonejs/min/dropzone.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/v1/js/pages/be_forms_plugins.js')); ?>"></script>

    <!--multiple additional_info boxes-->
    <script>
        var countBox = 1;
        var boxName = 0;
        function addInput()
        {
            var boxName =  countBox; 
            document.getElementById('responce').innerHTML += '<br /><input type="text" class="form-control form-control-lg" id="additional-info" name="additional-info[' + boxName + ']" placeholder="(SEE EXAMPLES) info_name => info" />';
            countBox ++;
        }
    </script>
    <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
    </script> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="block p-4 clearfix">
                <form method="POST" action="<?php echo e(url('/announcements/create')); ?>">
                    <?php echo csrf_field(); ?>
                <center>
                <div class="col-12 mt-4">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Enter a suitable title for your idea..." required>
                </div>
                <div class="col-12 mt-4">
                    <label for="description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control form-control-lg" id="description" name="description" placeholder="Enter the description for your idea..." rows="10" style="resize: none;" required></textarea>
                </div>
                <div class="col-12 mt-4">
                    <label for="type">Type <span class="text-danger">*</span></label>
                    <select class="form-control" id="type" name="type">
                        <option value="0" disabled selected>Please select</option>
                        <option value="a">All</option>
                        <option value="c">Startup</option>
                        <option value="s">Corporate</option>
                    </select>
                </div>
                <div class="col-12 mt-4">
                    <input type="submit" class="btn btn-primary" />
                </div>
                </center>
                </form>
            </div>
        </div>
    </div>

    <!-- EXAMPLES Pop Out Modal -->
    <div class="modal fade" id="add-info-examples" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Add Information Example</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>
                                To add more information about your challenge, you can use "Add Info" button. It will add a text field in your page where you can add custom detils about your challenge. Here is an example:<br />
                                If you want to add a youtube video, you can type <i>"Youtube => https://youtu.be/Yy-F519BsS0"</i> or if you want to add a link to your repository, you can  type <i>"Github => https://github.com/laravel/laravel"</i>. Likewise you can add unlimited information about your challenge from Social Media profiles to showcase videos.
                            </p>
                            <p>
                                <b>Points to remember while adding information</b> 
                                <ul>
                                    <li>Make sure you only add single information per text box.</li>
                                    <li>Make sure the information is in format <b>INFO_NAME => INFO</b></li>
                                    <li>Make sure the info is separated from info_name by <b>"=>"</b></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- EXAMPLES Pop Out Modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>