;

<?php $__env->startSection('content'); ?>;

<h1 align=center>Registrations</h1>

<?php if(count($registers)>0): ?>
    <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="well">
            <h3><?php echo e($student->name); ?></h3>
        <small>Registered at <?php echo e($student->created_at); ?></small><br><br>
        </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
    <p>No Registrations yet!!!</p>

<?php endif; ?>

<?php $__env->stopSection(); ?>;
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lapp\resources\views/pages/index.blade.php ENDPATH**/ ?>