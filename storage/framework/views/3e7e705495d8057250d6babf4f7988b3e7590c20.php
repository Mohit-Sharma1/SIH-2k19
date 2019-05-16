<?php $__env->startSection('page_title', 'Ideas My Account'); ?>

<?php $__env->startSection('content'); ?>
<div class="row p-4">
        <div class="col-12">
            <!-- Announcement Options -->
            <div class="push">
                <!--<button type="button" class="btn btn-rounded btn-danger btn-noborder float-right">
                    <i class="fa fa-times mx-5"></i>
                    <span class="d-none d-sm-inline">Delete</span>
                </button>-->
                <a  href="<?php echo e(url('/my-account/ideas/create')); ?>">
                <button type="button" class="btn btn-rounded btn-success btn-noborder">
                    <i class="fa fa-plus mx-5"></i>
                    <span class="d-none d-sm-inline">Create</span>
                </button>
                </a>
            </div>
        </div>
        <?php $__currentLoopData = $myideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myidea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-md-6 col-xl-6">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <img class="img-avatar" src="<?php echo e(url('/assets/v1/img/avatars/avatar3.jpg')); ?>" alt="">
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php echo e($myidea['title']); ?></div>
                    <div class="font-size-sm text-muted">This is a long description of the project. This is a long description of the project. This is a long description of the project.</div>
                </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>