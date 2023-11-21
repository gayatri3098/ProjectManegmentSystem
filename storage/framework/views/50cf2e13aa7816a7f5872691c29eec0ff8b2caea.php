<?php $__env->startSection('content'); ?>
 <?php if(session('statuss')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('statuss')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

<div class="container">
    

    <div class="container col-md-10 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h1 class="header"><?php echo $task->name; ?></h1>
                <p><strong>Start Date :</strong> <?php echo $task->start_date; ?></p>
                <p><strong>End Date :</strong> <?php echo $task->end_date; ?></p>
                <p><strong>Description :</strong> <?php echo $task->description; ?></p>
                <p><strong>Status :</strong>     <?php echo $task->status; ?></p>

                
                <?php if($task->status=='waiting'): ?>
     <form method="post" action="<?php echo e(route('Running',$task->id)); ?>">
         <?php echo csrf_field(); ?>
                 <input type="hidden" name="status" value="Running">

                <button type="submit" class="btn btn-primary">Running</button>
                
     </form><br>
     <?php endif; ?>
     <form method="post">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo action('ProjectController@update' , $project->id ); ?>"
                        class="btn btn-primary">Edit</a>
     </form>


            </div>
        </div>
    </div>

    <div class="container col-md-10 col-md-offset-2">
        <hr>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(session('status')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('status')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
         <?php if(session('danger')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
      
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gayatri/Downloads/Project-System-Laravel/resources/views/tasks/edit.blade.php ENDPATH**/ ?>