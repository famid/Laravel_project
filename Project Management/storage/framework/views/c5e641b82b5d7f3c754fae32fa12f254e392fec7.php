<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Project: <strong><?php echo e($project->title); ?></strong></h4></div>

                <div class="card-body col-md-12">
                    <div class="row">
                        <div class="card col-md-8 pt-3 pb-3">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary" href="<?php echo e(route('admin.project.edit', [encrypt($project->id)])); ?>">Edit</a>
                                </li>
                                
                                <li class="nav-item ml-2">
                                    <a class="nav-link btn btn-secondary" href="<?php echo e(route('admin.project.task.create',[encrypt($project->id)])); ?>">Add Task</a>
                                </li>
                            </ul>

                            <hr>
                            
                            <div class="col-md-12">
                                <strong>Title: </strong><?php echo e($project->title); ?><br>
                                <strong>Description: </strong><?php echo e($project->description); ?><br>
                                <strong>Total Point: </strong><?php echo e($project->total_point); ?><br>
                                <strong>Deadline: </strong><?php echo e($project->deadline); ?><br>

                                <hr>
                                <?php if(count($runningTasks) == 0): ?>
                                    No Task Available
                                <?php else: ?>
                                    <strong>Tasks:</strong>
                                    <table width="100%">
                                        <tr>
                                            <th>Title</th>
                                            <th>Total Point</th>
                                            <th>Deadline</th>
                                        </tr>
                                        <?php $__currentLoopData = $runningTasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <div class="card col-md-4 pt-3 pb-3">                            
                            <?php if(count($expiredTasks) == 0): ?>
                                No Expired Task
                            <?php else: ?>
                                <h5><strong>Expired Tasks</strong></h5>
                                <hr>

                                <table width="100%">
                                    <tr>
                                        <th>Title</th>
                                        <th>Total Point</th>
                                    </tr>
                                    <?php $__currentLoopData = $expiredTasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('admin.project.task.show', [encrypt($task->id)])); ?>" class="link-stabilize"><?php echo e($task->title); ?></a>  
                                            </td>
                                            <td><?php echo e($task->point); ?></td>
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/project/show.blade.php ENDPATH**/ ?>