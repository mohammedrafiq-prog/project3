
<?php $__env->startSection('content'); ?>
   <div class="well">
       <?php $__currentLoopData = $order->billings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li class="list-group-item-light"><?php echo e($item->name); ?>  <?php echo e($item->desc); ?>  <?php echo e($item->price); ?>$</li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
   
   <a href="create" class="btn btn-primary">GoBack</a>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/ordershow.blade.php ENDPATH**/ ?>