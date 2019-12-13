<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Create <strong>Task</strong> on Project <strong><?php echo e($project->title); ?></strong></h4>
                </div>

                <div class="card-body">
                    <form action="<?php echo e(route('admin.project.task.store', [encrypt($project->id)])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="" class="form-control" value="<?php echo e(old('title')); ?>">
                            <?php echo e($errors->first('title')); ?>

                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control"><?php echo e(old('description')); ?></textarea>
                            <?php echo e($errors->first('description')); ?>

                        </div>                        
                        <div class="form-group">
                                <label for="point">Point</label>
                                <input type="number" name="point" id="" class="form-control" value="<?php echo e(old('point')); ?>" min="1" max="<?php echo e($taskMaxPoint); ?>">
                                <?php echo e($errors->first('point')); ?>

                            </div>
                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <input type="date" name="deadline" id="" class="form-control" max="<?php echo e($project->deadline); ?>" value="<?php echo e(old('deadline')); ?>">
                            <?php echo e($errors->first('deadline')); ?>

                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/task/create.blade.php ENDPATH**/ ?>