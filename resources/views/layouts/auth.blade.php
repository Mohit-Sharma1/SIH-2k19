<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>@yield('page_title') - {{config('constants.app_name')}} v{{config('constants.app_version')}}</title>

        <!-- Meta Content -->
        <meta name="description" content="{{config('constants.app_name')}} - It is a project management tool for teams">
        <meta name="author" content="Crazy Developers">
        <!-- END Meta Content -->

        <!-- Icons -->
        <link rel="shortcut icon" href="{{url('/')}}/assets/v1/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="{{url('/')}}/assets/v1/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/assets/v1/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Additional stylesheets-->
        @yield('stylesheets')
        <!-- END Additional stylesheets--> 

        <!-- Codebase framework -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/v1/css/codebase.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/v1/css/themes/pulse.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('{{url('/')}}/assets/v1/img/photos/photo34@2x.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Stay Connected and Do More.
                                </p>
                                <p class="font-italic text-white-op">
                                &copy; <?php echo date('Y'); ?>. All Rights Reserved <b class="font-w600">{{config('constants.app_name')}} v{{config('constants.app_version')}}</b>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        
        <!-- Terms Modal -->
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfect
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->

        <!-- Codebase Core JS -->
        <script src="{{url('/')}}/assets/v1/js/core/jquery.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/core/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/core/jquery.slimscroll.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/core/jquery.scrollLock.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/core/jquery.appear.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/core/jquery.countTo.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/core/js.cookie.min.js"></script>
        <script src="{{url('/')}}/assets/v1/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="{{url('/')}}/assets/v1/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="{{url('/')}}/assets/v1/js/pages/op_auth_signin.js"></script>
    </body>
</html>