<?php $__env->startSection('page_title', 'Profile'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <style>
        .print-d {
            border: 0 !important;
            padding: 0 !important;
        }
        </style>
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
            <div class="block p-4">
                <div class="col-12 mt-4 clearfix">
                    <div class="push">
                    <a  href="<?php echo e(url('/profile/edit')); ?>">
                    <button type="button" class="btn btn-rounded btn-success btn-noborder">
                        <i class="fa fa-pencil mx-5"></i>
                        <span class="d-none d-sm-inline">Edit</span>
                    </button>
                    </a>
                    <a  href="<?php echo e(url('/profile/credits')); ?>">
                    <button type="button" class="btn btn-rounded btn-secondary btn-noborder float-right">
                        <i class="si si-badge mx-5"></i>
                        <span class="d-none d-sm-inline">Credits</span>
                    </button>
                    </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-4">
                        <center>
                        <div class="mb-4">
                            <label for="imageUpload">Display Picture </label>
                        </div>
                        <div class="avatar-upload">
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(<?php echo e(url('/assets/v1/img/avatars/avatar15.jpg')); ?>);">
                                </div>
                            </div>
                        </div>
                    </center>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <label for="name">Name:</label>
                        <div class="form-control form-control-lg print-d" id="name" name="name" placeholder="Enter your name.."> Test </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <label for="email">Email:</label>
                        <div type="email" class="form-control form-control-lg print-d" id="email" name="email" placeholder="Enter your email..">sampleemail.c.com</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <label for="founded-on">Founded On:</label>
                        <div type="text" class="form-control form-control-lg print-d" id="founded-on" name="founded_on">12/12/2012</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <label for="location">Location:</label>
                        <div type="text" class="form-control form-control-lg print-d" id="location" name="location" placeholder="Enter your username..">Kanpur, India</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <label for="contact-email">Contact Email:</label>
                        <div type="email" class="form-control form-control-lg print-d" id="contact-email" name="contact_email" placeholder="Enter your contact email..">contact@me.com</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <label for="contact-phone">Contact Phone:</label>
                        <div type="email" class="form-control form-control-lg print-d" id="contact-phone" name="contact_phone" placeholder="Enter your contact email..">+917006123456</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="bio">Bio <span class="text-danger">*</span></label>
                                <div class="form-control form-control-lg print-d" id="bio" name="bio" rows="7" placeholder="Enter a few details about yourself.." style="resize: none;">Loreium Ipusm</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="interests">Interests:</label>
                            <div type="text" class="form-control form-control-lg print-d" id="interests" name="interests" placeholder="Enter your username..">Automobile, Stuff, Stuff</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="additional-info">Additional Info:</label>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="">Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Susan Day</td>
                                        <td>sdsd</td>
                                    </tr>
                                    <tr>
                                        <td>Susan Day</td>
                                        <td>sdsd</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>