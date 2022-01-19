
<?php $__env->startSection('main-body'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>
</head>
<body>
<div class="main">
  
  <Table cellpadding="10px" class="table">
  
   
           <tr>
          <th>parent name</th>
          <th>kids name</th>
          <th>gender</th>
          <th>interest</th>
          <th>age</th>
          <th>Bio</th>
          </tr>
  
          <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($value->parentname); ?> </td>
          <td><?php echo e($value->kidsname); ?> </td>
          <td><?php echo e($value->gender); ?> </td>
          <td><?php echo e($value->interest); ?> </td>
          <td><?php echo e($value->age); ?> </td>
          <td><?php echo e($value->bio); ?> </td>
      </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
       
      
  </table>
  
 
  
  </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admindash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\summercamp\resources\views/user/user.blade.php ENDPATH**/ ?>