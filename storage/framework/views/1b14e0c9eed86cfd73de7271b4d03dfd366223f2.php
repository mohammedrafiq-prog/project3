<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php echo $__env->make('inc.mass', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                      <div class="well">
                    Name : <?php echo e(Auth::user()->name); ?> <br>
                    Email: <?php echo e(auth()->user()->email); ?>

                      </div>
                  <a href="issue/create" class="btn btn-secondary">contact</a> 
                  <a href="pizza/create" class="btn btn-secondary">Add</a> 
                  <a href="order/create" class="btn btn-secondary">order</a> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/home.blade.php ENDPATH**/ ?>