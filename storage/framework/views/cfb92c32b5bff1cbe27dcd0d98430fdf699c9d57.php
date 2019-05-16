<?php $__env->startSection('page_title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <div class="px-30 py-10">
    <a class="link-effect font-w700" href="#">
        <i class="si si-fire"></i>
        <span class="font-size-xl text-primary-dark">star</span><span class="font-size-xl">Corp</span>
    </a>
    <h2 class="h5 font-w400 text-muted  mt-20 mb-10">Please sign in</h2>
    </div>
<!-- END Header -->

<!-- Sign In Form -->
<!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
<!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <form class="js-validation-signin px-30" method="post" action="<?php echo e(url('/login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material floating">
                <input type="email" class="form-control" id="email" name="email" required />
                <label for="login-username">Email</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <div class="form-material floating">
                <input type="password" class="form-control" id="password" name="password" required />
                <label for="login-password">Password</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember" name="remember" />
                <label class="custom-control-label" for="remember">Remember Me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
            <i class="si si-login mr-10"></i> Sign In
        </button>
        <div class="mt-30">
            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?php echo e(url('/register')); ?>">
                <i class="fa fa-plus mr-5"></i> Create Account
            </a>
            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?php echo e(url('/password/reset')); ?>">
                <i class="fa fa-warning mr-5"></i> Forgot Password
            </a>
        </div>
    </div>
    </form>
<!-- END Sign In Form -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.authentication', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>