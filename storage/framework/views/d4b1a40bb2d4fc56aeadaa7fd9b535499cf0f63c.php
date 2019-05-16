<?php $__env->startSection('page_title', 'Announcements'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row" style="background-color: white;">
        <div class="col-12">
            <div class="block p-4">
                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                <div class="push">
                    <a  href="<?php echo e(url('/announcements/create')); ?>">
                    <button type="button" class="btn btn-rounded btn-success btn-noborder">
                        <i class="fa fa-plus mx-5"></i>
                        <span class="d-none d-sm-inline">Create</span>
                    </button>
                    </a>
                </div>
                <?php endif; ?>
                <div class="block-content">
                    <table class="table table-hover table-vcenter table-striped">
                        <thead>
                            <tr>
                                <th>Ttile</th>
                                <th>Description</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td class="font-w600" style="width: 33%;">
                                <?php echo e($announcement['title']); ?>

                                </td>
                                <td>
                                    <div class="text-muted mt-5"><?php echo e($announcement['description']); ?></div>
                                </td>
                                <td class="d-xl-table-cell font-w600 font-size-sm text-muted" style="width: 20%;"><?php echo e($announcement['created_at']); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>