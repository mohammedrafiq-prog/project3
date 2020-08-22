<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">
    <title>Document</title>
</head>
<body>
   <?php echo $__env->make('inc.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container">
    
      
          <div class="col-md-8 col-lg-8 "> 
            <?php echo $__env->make('inc.mass', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                                    
            <?php echo $__env->yieldContent('contact'); ?>
            
          
            
         
    </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\project6\project\resources\views/layouts/app1.blade.php ENDPATH**/ ?>