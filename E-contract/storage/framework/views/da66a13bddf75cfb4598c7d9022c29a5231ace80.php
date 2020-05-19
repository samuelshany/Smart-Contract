

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12 d-flex justify-content-center text-center ">
        <div class="product card border   rounded  "style="width: 18rem;" >    
        <img class="card-img-top " src="<?php echo e(asset($u->image)); ?>">
        <div class="card-body">
            <h3><?php echo e($u->name); ?></h3>
            <h3><?php echo e($u->national_id); ?></h3>
            <h4><?php echo e($u->email); ?></h4>
            <h3><?php echo e($u->age); ?></h3>
            <h3><?php echo e($u->address); ?></h3>
        </div>
        </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<h1 class="my-5" style=" padding-left: 45%">cars</h1>
<div class="container">
<div class="row">
<?php for($i=0; $i < count($carrs); $i++): ?>
<?php $__currentLoopData = $carrs[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6  d-flex justify-content-center text-center ">
        <div class="product border card  rounded " >
           
            
            <h3><?php echo e($car->model); ?></h3>
            <h3><?php echo e($car->serial); ?></h3>
            <h4><?php echo e($car->color); ?></h4>
        </div>
  
        
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endfor; ?>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminNave', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/searchResult.blade.php ENDPATH**/ ?>