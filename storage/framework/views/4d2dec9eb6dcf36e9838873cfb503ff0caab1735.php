<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title><?php echo $__env->yieldContent('page_title'); ?> - <?php echo e(config('constants.app_name')); ?> v<?php echo e(config('constants.app_version')); ?></title>

        <!-- Meta Content -->
        <meta name="description" content="<?php echo e(config('constants.app_name')); ?> - It is a project management tool for teams">
        <meta name="author" content="Crazy Developers">
        <!-- END Meta Content -->

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/assets/v1/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(url('/')); ?>/assets/v1/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url('/')); ?>/assets/v1/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Additional stylesheets-->
        <?php echo $__env->yieldContent('stylesheets'); ?>
        <!-- END Additional stylesheets--> 

        <!-- Codebase framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/assets/v1/css/codebase.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/assets/v1/css/themes/pulse.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="<?php echo e(url('/')); ?>/">
                                        <i class="si si-fire text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">star</span><span class="font-size-xl text-primary">Corp</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="<?php echo e(url('/')); ?>/assets/v1/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="#">
                                    <img class="img-avatar" src="<?php echo e(url('/')); ?>/assets/v1/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?php echo e(Auth::user()->name); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?><i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('/profile/password')); ?>">
                                    <i class="si si-lock-open mr-5"></i> Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="<?php echo e(url('/logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button class="dropdown-item">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="container">
                    <div class="content">
                        <?php echo $__env->yieldContent('content'); ?>

                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#" target="_blank">Crazy Developers</a>
                    </div>
                    <div class="float-right">
                        &copy; <?php echo date('Y'); ?>. All Rights Reserved <a class="font-w600" href="<?php echo e(url('/')); ?>/" target="_blank"><?php echo e(config('constants.app_name')); ?> v<?php echo e(config('constants.app_version')); ?></a>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/jquery.scrollLock.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/jquery.appear.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/jquery.countTo.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/core/js.cookie.min.js"></script>
        <script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/v1/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <?php echo $__env->yieldContent('javascripts'); ?> 
     
    </body>
</html>