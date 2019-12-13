<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Project: <strong><?php echo e($project->title); ?></strong></h4></div>

                <div class="card-body">
                    <div class="col-md-12">
                        <strong>Title: </strong><?php echo e($project->title); ?> <br>                      
                        <strong>Description: </strong><?php echo e($project->description); ?> <br>  
                        <strong>Total Point: </strong><?php echo e($project->total_point); ?> <br>  
                        <strong>Deadline: </strong><?php echo e($project->deadline); ?> <br>  

                        <hr>
                        <?php if(count($tasks) == 0): ?>
                            No Task Available
                        <?php else: ?>
                            <strong>Tasks:</strong>
                            <table width="100%">
                                <tr>
                                    <th>Title</th>
                                    <th>Total Point</th>
                                    <th>Deadline</th>
                                </tr>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('admin.project.task.show', [encrypt($task->id)])); ?>" class="link-stabilize"><?php echo e($task->title); ?></a>  
                                        </td>
                                        <td><?php echo e($task->point); ?></td>
                                        <td><?php echo e($task->deadline); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        <?php endif; ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/project/show_expired.blade.php ENDPATH**/ ?>