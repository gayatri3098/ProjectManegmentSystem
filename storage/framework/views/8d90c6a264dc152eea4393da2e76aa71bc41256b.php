<?php $__env->startSection('content'); ?>
<div class="container">
    <legend>Subtasks</legend>
    <?php if(count($subtasks)): ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subtask</th>
                <th scope="col">Status</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $subtasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subtask): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td>
                    <a href="<?php echo e(route('subtask_show',$subtask->id)); ?>">
                        <?php echo $subtask->name; ?>

                    </a>
                </td>
                <td><?php echo $subtask->Status; ?></td>
                <td><?php echo $subtask->start_date; ?></td>
                <td><?php echo $subtask->end_date; ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>You don't have any subtasks yet .</p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\PMS\resources\views/subtask/index.blade.php ENDPATH**/ ?>