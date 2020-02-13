


<body>
    <form action="/student" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="name">
        <button type=submit> Submit</button>
    </form>
    <?php if(session('message')): ?>
    <p> <?php echo e(session('message')); ?></p>
    <?php endif; ?>

</body>
<?php /**PATH C:\xampp\htdocs\lapp\resources\views/personal.blade.php ENDPATH**/ ?>