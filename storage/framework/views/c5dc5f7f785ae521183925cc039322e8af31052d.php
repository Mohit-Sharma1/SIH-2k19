<?php $__env->startSection('page_title', 'Corporates'); ?>

<?php $__env->startSection('stylesheets'); ?>
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
            <!-- Announcement Options -->
            <div class="push">
                <button type="button" class="btn btn-rounded btn-warning btn-noborder float-right"  data-toggle="modal" data-target="#filters">
                    <i class="si si-settings mx-5"></i>
                    <span class="d-none d-sm-inline">Filters</span>
                </button>
                <div class="form-group row">
                    <div class="col-lg-4">
                        <div class="input-group">
                            <input type="text" class="form-control" id="example-input1-group2" name="example-input1-group2" placeholder="Search...">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary bg-primary">
                                    <i class="fa fa-search text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <!-- Block Tabs Default Style -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                    <li class="nav-item" style="width:33%;">
                        <a class="nav-link active" href="#all-corporates">All</a>
                    </li>
                    <li class="nav-item" style="width:33%;">
                        <a class="nav-link" href="#ranked-corporates">Ranked</a>
                    </li>
                    <li class="nav-item" style="width:33%;">
                        <a class="nav-link" href="#unranked-corporates">Unranked</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="all-corporates"" role="tabpanel">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-6">
                            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar" src="<?php echo e(url('/assets/v1/img/avatars/avatar3.jpg')); ?>" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Corporate Name</div>
                                    <div class="font-size-sm text-muted">This is a long description of the corporate. This is a long description of the corporate. This is a long description of the corporate.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane text-center" id="ranked-corporates" role="tabpanel">
                        <h4 class="font-w400">Currently There Are No Ranked Corporates</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="unranked-corporates" role="tabpanel">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-6">
                            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar" src="<?php echo e(url('/assets/v1/img/avatars/avatar3.jpg')); ?>" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Corporate Name</div>
                                    <div class="font-size-sm text-muted">This is a long description of the corporate. This is a long description of the corporate. This is a long description of the corporate.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FILTERS Pop Out Modal -->
    <div class="modal fade" id="filters" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
        <form>
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Filters</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label mt-10">Rank Percentile</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider4" name="example-rangeslider4" data-type="double" data-grid="true" data-min="0" data-max="100" data-from="25" data-to="75">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label mt-10">Location</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control form-control-lg" id="location" name="location" placeholder="Location">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label mt-10">Tags</label>
                                    <div class="col-lg-9">
                                        <select class="js-select2 form-control" id="tags" name="tags" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">Angular</option>
                                        <option value="8">React</option>
                                        <option value="9">Vue.js</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label mt-10">Recognised</label>
                                    <div class="col-lg-9">
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" name="example-inline-radios" id="radio-yes" value="Yes" checked="">
                                            <label class="custom-control-label" for="radio-yes">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" name="example-inline-radios" id="radio-no" value="No">
                                            <label class="custom-control-label" for="radio-no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-alt-success" data-dismiss="modal">Apply Filters</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- FILTERS Pop Out Modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>