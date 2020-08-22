
<?php $__env->startSection('content'); ?>
<?php if(count($order)): ?>
<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="well">  
     <h3><?php echo e($item->name); ?>  <a href="<?php echo e($item->id); ?>" class="btn list-group-item-danger">  <?php echo e($item->phone); ?>     </a>  <?php echo e($item->address); ?>   <?php echo e($item->total); ?>$  <?php echo e($item->total/3.5); ?></h3> 
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<a href="/project6/project/home" class="btn btn-primary">GoBack</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/orderlist.blade.php ENDPATH**/ ?>