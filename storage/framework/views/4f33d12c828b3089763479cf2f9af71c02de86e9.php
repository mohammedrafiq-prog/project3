
<?php $__env->startSection('content'); ?>
    <h1 class="text-secondary card-title"><?php echo e($issue->name); ?> </h1>
  <div class="well">
    <h3><a class="btn list-group-item-danger"><?php echo e($issue->created_at); ?></a></h3> 
    <hr>
    <p><?php echo e($issue->issue); ?></p></div>
   <a href="create" class="btn btn-primary">GoBack</a>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/showissue.blade.php ENDPATH**/ ?>