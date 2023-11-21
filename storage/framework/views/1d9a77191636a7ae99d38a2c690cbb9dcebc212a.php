<?php $__env->startSection('content'); ?>
<div class="container">
    <form method="post">
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
        <legend>Create Project</legend>
        <div class="form-group">
            <label for="formGroupExampleInput">Project Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Project Name" name="name">
        </div>

        <div class="form-group">
            <!-- Date input -->
            <label class="control-label" for="date">Start Date</label>
            <input class="form-control" id="start_date" name="start_date" placeholder="YYYY/MM/DD" type="text" />
        </div>

        <div class="form-group">
            <!-- Date input -->
            <label class="control-label" for="date">End Date</label>
            <input class="form-control" id="end_date" name="end_date" placeholder="YYYY/MM/DD" type="text" />
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\PMS\resources\views/projects/create.blade.php ENDPATH**/ ?>