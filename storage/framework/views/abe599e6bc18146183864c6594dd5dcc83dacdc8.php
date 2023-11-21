<?php $__env->startSection('content'); ?>
<div class="container">
    <form method="post" action="<?php echo e(route('savesupervisor',$task->id)); ?>">
         <input type="hidden" name="_method" value="PUT">

        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e($error); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
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
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('danger')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

       



















        <legend>Add Super Visor</legend>
        <div class="form-group">
           
            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Project Name" name="name"
                value="<?php echo $task->name; ?>">
        
          <div class="form-group">
            <label for="formGroupExampleInput">User Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="user name of super visor" name="supervisor">
               
        </div>

            <input  name="project" value="<?php echo e($project->id); ?>"  type="hidden" />

            
        <div class="form-group">
            <!-- Date input -->
          
            <input class="form-control" id="start_date" name="start_date" value="<?php echo $project->start_date; ?>"
                type="hidden" />
        </div>

        <div class="form-group">
            <!-- Date input -->
           
            <input class="form-control" id="end_date" name="end_date" value="<?php echo $project->end_date; ?>"
                type="hidden" />
        </div>



         
             <input class="form-control" id="end_date" name="desc" value="<?php echo $task->description; ?>"  type="hidden" />
           
       

        

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script>
    $(document).ready(function(){
                  var start_date=$('input[id="start_date"]'); //our date input has the name "date"
                  var end_date=$('input[id="end_date"]');
                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                  var options={
                    format: 'yyyy/mm/dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                  };
                  start_date.datepicker(options);
                  end_date.datepicker(options);
                });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gayatri/Downloads/Project-System-Laravel/resources/views/tasks/addsupervisor.blade.php ENDPATH**/ ?>