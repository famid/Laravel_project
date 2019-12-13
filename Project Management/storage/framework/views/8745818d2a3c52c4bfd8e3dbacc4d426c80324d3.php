<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4><strong>Edit </strong><?php echo e($project->title); ?></h4></div>

                    <div class="card-body">
                        <form action="<?php echo e(route('admin.project.update', [encrypt($project->id)])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="form-group">
                                <label for="title">Project Title</label>
                                <input type="text" name="title" id="" class="form-control" value="<?php echo e($project->title); ?>">
                                <?php echo e($errors->first('title')); ?>

                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="" cols="30" rows="5" class="form-control"><?php echo e($project->description); ?></textarea>
                                <?php echo e($errors->first('description')); ?>

                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" name="deadline" id="" class="form-control" value="<?php echo e($project->deadline); ?>">
                                <?php echo e($errors->first('deadline')); ?>

                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projects\ProjectManagement\resources\views/admin/project/edit.blade.php ENDPATH**/ ?>