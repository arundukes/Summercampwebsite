
<?php $__env->startSection('main-body'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
</head>
<body>
    <h2 style="color:red;"><?php echo e($parentname); ?></h2>
    <p><?php echo e($message); ?></p>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.useregister', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\summercamp\resources\views/user/mail.blade.php ENDPATH**/ ?>