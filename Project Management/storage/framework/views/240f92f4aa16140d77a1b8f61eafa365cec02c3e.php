<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Task: <strong><?php echo e($task->title); ?></strong></h4>
                    <h6>Project: <a href="<?php echo e(route('admin.project.show', [encrypt($task->project->id)])); ?>" class="link-stabilize"><strong><?php echo e($task->project->title); ?></strong></a></h6>
                 </div>

                <div class="card-body col-md-12">
                    <div class="row">
                        <div class="card col-md-8 pt-3 pb-3">
                            <ul class="nav">
                                <li class="nav-item mr-2">
                                    <a class="nav-link btn btn-secondary" href="<?php echo e(route('admin.project.task.edit', [encrypt($task->id)])); ?>">Edit</a>
                                </li>
                                
                            </ul>
        
                            <hr>
                            
                            <div id="task-info" class="col-md-12">
                                <strong>Title: </strong><?php echo e($task->title); ?> <br>
                                <strong>Description: </strong><?php echo e($task->description); ?> <br>
                                <strong>Point: </strong><?php echo e($task->point); ?> <br>
                                <strong>Deadline: </strong><?php echo e($task->deadline); ?> <br>
        
                                <hr>

                                <?php if(count($taskEmployees) == 0): ?>
                                    No Employee Available
                                <?php else: ?>
                                    <strong>Employees:</strong>
                                    <br><br>
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
                        <div id="not-employee" class="card col-md-4 pt-3 pb-3">
                            <div >
                                <h5><strong>Add Employee to Task</strong></h5>
                                <hr>
                                <?php echo e($notTaskEmployees->links()); ?>                                
                                <form id="message" action="#" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php $__currentLoopData = $notTaskEmployees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="checkbox" name="employee<?php echo e($employee->id); ?>" id="" value="<?php echo e($employee->id); ?>"> <?php echo e($employee->name); ?> <br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <br>
                                    <button id="send" type="button" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="script">
    <script> 
        $(document).ready(function(){
            $("#send").on("click", function() {
                $.ajax({
                    type: "post",
                    url: "<?php echo e(route('admin.project.task.employee.add', [encrypt($task->id)])); ?>",
                    data: $("#message").serialize(),
                    success: function(response) {
                        $("#task-info").html($(response).find('#task-info').html());
                        $("#not-employee").html($(response).find('#not-employee').html());
                        $("#script").html($(response).find('#script').html());
                    },
                    error: function() {
                        alert("Something went wrong!");
                    }
                });
            });
        });
        
    </script>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/task/show.blade.php ENDPATH**/ ?>