<?php $__env->startSection('content'); ?>
<head>
    <style>
        .start
        {
            font-family: sans-serif;
            margin-top: 20px;
        }
        .shows
        {
            margin-top: 20px;
        }
        .shows img
        {
            width: 100%;
            border-radius: 10%;
            height: 100%;
        }
    </style>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome <?php echo e(Auth::user()->name); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <h3>You are logged in ^_^</h3>
                </div>
                
            </div>
        </div>
        
            
    </div>
          <h1 class="start text-center">Start Your Work</h1>
    <div class="row text-center shows">
        
        <div class="col-md-4 text-center">
            <img src="images/Hiring%20manager%205%20sec.gif">    
        </div>
        <div class="col-md-4">
            <img src="images/we_re-hiring_loop.gif">
        </div>
        <div class="col-md-4">
            <img src="images/Tech_recruiter_loop.gif">
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\Laravel Projects\Unfinish\Project-System-Laravel\resources\views/home.blade.php ENDPATH**/ ?>