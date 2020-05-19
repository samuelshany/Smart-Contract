
<?php $__env->startSection('title'); ?> 
Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12  d-flex justify-content-center text-center ">
        <div class="product border card  rounded  " >
            <img class="card-img-top " src="<?php echo e(asset($us->image)); ?>">
            <h1><?php echo e(session('national_id')); ?></h1>
            <h3><?php echo e($us->name); ?></h3>
            <h3><?php echo e($us->national_id); ?></h3>
            <h4><?php echo e($us->email); ?></h4>
            <h3><?php echo e($us->age); ?></h3>
            <h3><?php echo e($us->address); ?></h3>
            <div>
            
            </div>
        </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('usernave', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/userindex.blade.php ENDPATH**/ ?>