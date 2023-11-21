<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p class="alert alert-danger"><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <div class="row">
        <a href="/project/create" class="btn btn-primary"><i class="fa fa-plus"></i> New Project</a>
    </div>
    <?php if($length == 0 ): ?>
    <br>
    <div class="row">
        <p>You don't have any project yet .</p>
    </div>
    <?php else: ?>
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">project</th>
                    <th scope="col">Status</th>
                    <th scope="col">Time to finish</th>
                </tr>
            </thead>
            <tbody>
                    <?php for($i = 0 ; $i < $length ; $i++): ?>
                        <?php if($projects[$i]->status == 'Finished'): ?>
                            <tr class="table-success">
                                <th scope="row"><?php echo $i+1; ?></th>
                                <td>
                                    <a href="<?php echo action('ProjectController@edit' , $projects[$i]->id); ?>">
                                        <?php echo $projects[$i]->project_name; ?>

                                    </a>
                                </td>
                                <td><?php echo $projects[$i]->status; ?></td>
                                <td><?php echo $time_to_finish[$i]; ?></td>
                            </tr>
                        <?php elseif($projects[$i]->status == 'Passive'): ?>
                            <tr class="table-danger">
                                <th scope="row"><?php echo $i+1; ?></th>
                                <td>
                                    <a href="<?php echo action('ProjectController@edit' , $projects[$i]->id); ?>">
                                        <?php echo $projects[$i]->project_name; ?>

                                    </a>
                                </td>
                                <td><?php echo $projects[$i]->status; ?></td>
                                <td><?php echo $time_to_finish[$i]; ?></td>
                            </tr>
                        <?php else: ?>
                            <tr">
                                <th scope="row"><?php echo $i+1; ?></th>
                                <td>
                                    <a href="<?php echo action('ProjectController@edit' , $projects[$i]->id); ?>">
                                        <?php echo $projects[$i]->project_name; ?>

                                    </a>
                                </td>
                                <td><?php echo $projects[$i]->status; ?></td>
                                <td><?php echo $time_to_finish[$i]; ?></td>
                            </tr>
                        <?php endif; ?>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\PMS\resources\views/projects/index.blade.php ENDPATH**/ ?>