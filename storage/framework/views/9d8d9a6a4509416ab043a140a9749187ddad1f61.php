<?php $__env->startSection('page_title', 'Tags'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="push">
                <button type="button" class="btn btn-rounded btn-success btn-noborder" data-toggle="modal" data-target="#filters" onclick="location.href='<?php echo e(url('/')); ?>/tags/create'">
                    <i class="fa fa-plus mx-5"></i>
                    <span class="d-none d-sm-inline">Create</span>
                </button>
            </div>
            <div class="block p-4">
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>Ttile</th>
                            <th class="d-none d-sm-table-cell" style="width: 50%;">Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="font-w600"><?php echo e($tag['title']); ?></td>
                            <td class="d-none d-sm-table-cell"><?php echo e($tag['description']); ?></td>
                            <td><?php echo e($tag['created_at']); ?></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="actions">
                                    <button type="button" class="btn btn-warning" onclick="location.href='<?php echo e(url('/')); ?>/tags/<?php echo e($tag['id']); ?>'">
                                        <i class="si si-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" onclick="location.href='<?php echo e(url('/')); ?>/tags/edit/<?php echo e($tag['id']); ?>'">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='<?php echo e(url('/')); ?>/tags/delete/<?php echo e($tag['id']); ?>'">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>