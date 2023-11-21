<?php $__env->startSection('content'); ?>
<div class="container">
    <legend>Tasks</legend>
    <?php if(count($tasks)): ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task</th>
                <th scope="col">Status</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo $counter++; ?></th>
                <td><a
                        href="<?php echo action('TaskController@edit' , [ 'project_id' => $task->project_id , 'task_id' => $task->id ] ); ?>">
                        <?php echo $task->name; ?></a>
                </td>
                <td><?php echo $task->status; ?></td>
                <td><?php echo $task->start_date; ?></td>
                <td><?php echo $task->end_date; ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>You don't have any tasks yet .</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\PMS\resources\views/tasks/index.blade.php ENDPATH**/ ?>