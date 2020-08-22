<?php $__env->startSection('contact'); ?>  
<div class="well">
<?php echo Form::open(['action' => 'orderc@store']); ?>

    <div class="form-group">
      <?php echo e(Form::label('name', 'Name')); ?>

      <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('Address', 'Address')); ?>

      <?php echo e(Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'enter address'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('number', 'number')); ?>

      <?php echo e(Form::text('number', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])); ?>

    
    </div>
    <div>
      <?php echo e(Form::submit('Submit', ['class'=> 'btn btn-primary'])); ?>

    </div>
  <?php echo Form::close(); ?></div>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/inc/orderdet.blade.php ENDPATH**/ ?>