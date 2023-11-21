<?php

  use App\Task;
  use App\User;

?>




<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="container col-md-10 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h1 class="header"><?php echo $project->project_name; ?></h1>
                <p><strong>Start Date :</strong> <?php echo $project->start_date; ?></p>
                <p><strong>End Date :</strong> <?php echo $project->end_date; ?></p>
                <p><strong>Description :</strong> <?php echo $project->description; ?></p>
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo action('ProjectController@update' , $project->id ); ?>"
                        class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
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
        <h2>Tasks</h2>
        <a href="<?php echo action('TaskController@create' , $project->id ); ?>" class="btn btn-success"><i
                class="fa fa-plus"></i>
            New Task</a>
        <div class="row mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>


                        <th scope="col">Super Visor</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?></th>
                        <td>
                            <a
                                href="<?php echo action('TaskController@edit' , [ 'project_id' => $project->id , 'task_id' => $task->id ] ); ?>">
                                <?php echo $task->name; ?>

                            </a>
                        </td>
                        <td><?php echo $task->start_date; ?></td>
                        <td><?php echo $task->end_date; ?></td>
                        <td><?php echo $task->status; ?></td>


  
<?php
  $user=User::where('id',$task->user_id)->first();
  if($task->user_id==null){
      ?> <td>  <a href="<?php echo e(route('addsupervisor',$task->id)); ?>" > Add Super Visor </a>  </td> <?php
  }else{
      echo "<td> $user->name </td>" ;
  }

?>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gayatri/Downloads/Project-System-Laravel/resources/views/projects/edit.blade.php ENDPATH**/ ?>