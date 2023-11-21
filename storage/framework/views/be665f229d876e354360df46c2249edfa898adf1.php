<?php $__env->startSection('content'); ?>


<head>
    <style>
        .profile-head h5
        {
            color: #333;
            margin-bottom: 15px;
        }
        .profile-head h6{
            color: #0062cc;
            margin-bottom: 15px;
        }


        .profile-img .file  select, textarea
        {
            opacity: 0;
            width: 80%;
            float: left;
            cursor: pointer;
        }
        .profile-img
        {
            position: relative;
        }
        .profile-img img
        {
            width: 80%;
            height: 70%;

        }
        .profile-img .file
        {
            overflow: hidden;
            width: 80%;
            border-radius: 0 0 10px 10px ;
            border: none;
            padding: 2%;
            font-weight:600;
            color: #5c555d;
            cursor: pointer;

        }
        .profile-edit-btn
        {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 500;
            font-size: 17px;
            color: #5c555d;
            cursor: pointer;
        }

        .profile-tab label
        {
           font-weight: 600;
        }
        .profile-tab p
        {
            font-weight: 500;
            font-size: 17px;
            color: #0062cc;
        }
    </style>
</head>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gayatri/Downloads/Project-System-Laravel/resources/views/members/view.blade.php ENDPATH**/ ?>