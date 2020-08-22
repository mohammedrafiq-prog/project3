
<?php $__env->startSection('contact'); ?>
<h1>CONTACT</h1>  
<?php echo Form::open(['action' => 'pizzac@store']); ?>

    <div class="form-group">
      <?php echo e(Form::label('name', 'Name')); ?>

      <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('price', 'price')); ?>

      <?php echo e(Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'price'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('message', 'Message')); ?>

      <?php echo e(Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'desc'])); ?>

    </div>
    <div>
      <?php echo e(Form::submit('Submit', ['class'=> 'btn btn-primary'])); ?>

    </div>
  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/add.blade.php ENDPATH**/ ?>