<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Task: <strong><?php echo e($task->title); ?></strong></h4>
                    <h6>Project: <a href="<?php echo e(route('admin.project.show', [encrypt($task->project->id)])); ?>" class="link-stabilize"><strong><?php echo e($task->project->title); ?></strong></a></h6>
                 </div>

                <div class="card-body">
                    <strong>Title: </strong><?php echo e($task->title); ?> <br>
                    <strong>Description: </strong><?php echo e($task->description); ?> <br>
                    <strong>Point: </strong><?php echo e($task->point); ?> <br>
                    <strong>Ended: </strong><?php echo e($task->deadline); ?> <br>

                    <hr>

                    <?php if(count($taskEmployees) == 0): ?>
                        No Employee Available
                    <?php else: ?>
                        <strong>Employees:</strong>
                        <br>
                        <?php echo e($taskEmployees->links()); ?>   
                        <table width="100%">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            <?php $__currentLoopData = $taskEmployees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($employee->name); ?></td>
                                    <td><?php echo e($employee->email); ?></td>
                                    <td><?php echo e($employee->pivot->status); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/task/show_expired.blade.php ENDPATH**/ ?>