
<?php $__env->startSection('contact'); ?>
    
<?php $__currentLoopData = $pizzas->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
<?php echo Form::open(['action' => 'orderc@store']); ?>

   
    <div class="well" >
    <img src="<?php echo e(asset('public/front/img/tech_photo8.jpg')); ?>" alt="img not fouund"><br>
     <?php echo e($item->name); ?> <br>
     <?php echo e($item->price); ?><br>
     <?php echo e($item->desc); ?><br>
  <input class="btn" type="checkbox" name="<?php echo e($item->id); ?>">
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="well">   
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
    </div>
    <div>
    <?php echo e(Form::submit('Submit', ['class'=> 'btn btn-primary'])); ?>

    </div>
 <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/order.blade.php ENDPATH**/ ?>