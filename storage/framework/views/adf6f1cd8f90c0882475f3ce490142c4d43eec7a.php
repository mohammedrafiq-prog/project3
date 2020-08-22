
<?php $__env->startSection('content'); ?>
<?php if(count($issue)): ?>
  <?php $__currentLoopData = $issue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="well">  
     <h3><?php echo e($item->issue); ?><a href="<?php echo e($item->id); ?>" class="btn list-group-item-danger"><?php echo e($item->name); ?> </a></h3> 
      </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/issuelist.blade.php ENDPATH**/ ?>