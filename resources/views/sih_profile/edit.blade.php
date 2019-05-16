@extends('layouts.default')

@section('page_title', 'Edit Profile')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/custom/css/dp_selector.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/select2/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/v1/js/plugins/dropzonejs/min/dropzone.min.css')}}">
@endsection

@section('javascripts')
    <script type="text/javascript" src="{{url('/')}}/assets/custom/js/dp_selector.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/custom/js/file_upload_names.js"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/select2/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/masked-inputs/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/plugins/dropzonejs/min/dropzone.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/v1/js/pages/be_forms_plugins.js')}}"></script>

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
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="block p-4">
                <form>
                <div class="col-12 mt-4 clearfix">
                    <div class="push">
                    <button type="button" class="btn btn-rounded btn-danger btn-noborder float-left">
                        <i class="fa fa-times mx-5"></i>
                        <span class="d-none d-sm-inline">Cancel</span>
                    </button>
                    <a  href="{{url('/my-account/ideas/create')}}">
                    <button type="button" class="btn btn-rounded btn-success btn-noborder float-right">
                        <i class="fa fa-plus mx-5"></i>
                        <span class="d-none d-sm-inline">Update</span>
                    </button>
                    </a>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12 pb-4">
                            <center>
                            <div class="mb-4">
                                <label for="imageUpload">Display Picture <span class="text-danger js-pop-over-enabled" data-toggle="popover" data-placement="top" data-content="Upload an image of ration 1:1" data-orignal-title="Skills Input Info"><i class="fa fa-info-circle"></i></span></label>
                            </div>
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url({{url('/assets/v1/img/avatars/avatar15.jpg')}});">
                                    </div>
                                </div>
                            </div>
                        </center>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 mb-4">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name.." required>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 mb-4">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email.." required>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 mb-4">
                            <label for="founded-on">Founded On <span class="text-danger">*</span></label>
                            <input type="text" class="js-datepicker form-control form-control-lg" id="founded-on" name="founded_on" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4 mb-4">
                            <label for="location">Location <span class="text-danger js-pop-over-enabled js-popover-enabled" data-toggle="popover" data-placement="top" data-content="Your location will show in your profile" data-orignal-title="Skills Input Info" data-original-title="" title=""><i class="fa fa-info-circle"></i></span></label>
                            <input type="text" class="form-control form-control-lg" id="location" name="location" placeholder="Enter your username..">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 mb-4">
                            <label for="contact-email">Contact Email <span class="text-danger js-pop-over-enabled js-popover-enabled" data-toggle="popover" data-placement="top" data-content="Your contact email will show in your profile" data-orignal-title="Skills Input Info" data-original-title="" title=""><i class="fa fa-info-circle"></i></span></label>
                            <input type="email" class="form-control form-control-lg" id="contact-email" name="contact_email" placeholder="Enter your contact email..">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 mb-4">
                            <label for="contact-phone">Contact Phone <span class="text-danger js-pop-over-enabled js-popover-enabled" data-toggle="popover" data-placement="top" data-content="Your contact phone will show in your profile" data-orignal-title="Skills Input Info" data-original-title="" title=""><i class="fa fa-info-circle"></i></span></label>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <b>+91</b>
                                            </span>
                                        </div>
                                        <input type="text" class="js-masked-phone form-control form-control-lg" id="contact-phone" name="contact_phone" placeholder="(999) 999-9999">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8 col-xl-8">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="bio">Bio <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-lg" id="bio" name="bio" rows="10" placeholder="Enter a few details about yourself.." style="resize: none;"  required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xl-4">
                            <div class="form-group row">
                                <label class="col-12" for="interests">Interests <span class="text-danger js-pop-over-enabled" data-toggle="popover" data-placement="top" data-content="Select suitable tags foryour idea" data-orignal-title="Skills Input Info"><i class="fa fa-info-circle"></i></span></label>
                                <div class="col-12">
                                    <select class="js-select2 form-control" id="interests" name="interests" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($tags as $tag => $id)
                                        <option value="{{$id}}">{{$tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="additional-info">Additional Info <span class="text-danger js-pop-over-enabled" data-toggle="popover" data-placement="top" data-content="Press tab after entering each skill" data-orignal-title="Skills Input Info"><i class="fa fa-info-circle"></i></span></label>
                                    <input type="text" class="form-control form-control-lg" id="additional-info" name="additional_info[0]" placeholder="(SEE EXAMPLES) info_name => info">
                                    <div id="responce"></div>
                                    <button type="button" class="btn btn-alt-primary mt-2" onclick="javascript:addInput()"><i class="fa fa-plus mr-5"></i>Add Info</button>
                                    <button type="button" class="btn btn-alt-secondary mt-2" data-toggle="modal" data-target="#add-info-examples"><i class="fa fa-expand mr-5"></i>Add Info Examples</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                To add more information about your startup/corporate, you can use "Add Info" button. It will add a text field in your page where you can add custom detils about your startup/corporate. Here is an example:<br />
                                If you want to add a youtube video, you can type <i>"Youtube => https://youtu.be/Yy-F519BsS0"</i> or if you want to add a link to your repository, you can  type <i>"Github => https://github.com/laravel/laravel"</i>. Likewise you can add unlimited information about your startup/corporate from Social Media profiles to showcase videos.
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
@endsection