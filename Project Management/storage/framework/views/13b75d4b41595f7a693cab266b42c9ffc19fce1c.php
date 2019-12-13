<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><strong>Project</strong></h4>
                </div>

                <div class="card-body col-md-12">
                    <div class="row">
                        <div class="card col-md-8 pt-3 pb-3">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" href="<?php echo e(route('admin.project.create')); ?>">Create Project</a>
                                </li>
                            </ul>

                            <hr>
                            <?php if(count($runningProjects) == 0): ?>
                                No Project Available
                            <?php else: ?>
                                <?php echo e($runningProjects->links()); ?>

                                <table width="100%">
                                    <tr>
                                        <th>Title</th>
                                        <th>Total Point</th>
                                        <th>Deadline</th>
                                    </tr>
                                    <?php $__currentLoopData = $runningProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('admin.project.show', [encrypt($project->id)])); ?>" class="link-stabilize"><?php echo e($project->title); ?></a>  
                                            </td>
                                            <td><?php echo e($project->total_point); ?></td>
                                            <td><?php echo e($project->deadline); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            <?php endif; ?>
                        </div>                        
                        <div class="card col-md-4 pt-3 pb-3">                            
                            <?php if(count($expiredProjects) == 0): ?>
                                No Expired Project
                            <?php else: ?>
                                <h5><strong>Expired Projects</strong></h5>
                                <hr>
                                <?php echo e($expiredProjects->links()); ?>

                                <table width="100%">
                                    <tr>
                                        <th>Title</th>
                                        <th>Total Point</th>
                                    </tr>
                                    <?php $__currentLoopData = $expiredProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('admin.project.show', [encrypt($project->id)])); ?>" class="link-stabilize"><?php echo e($project->title); ?></a>  
                                            </td>
                                            <td><?php echo e($project->total_point); ?></td>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/project/index.blade.php ENDPATH**/ ?>