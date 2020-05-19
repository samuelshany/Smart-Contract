
<?php $__env->startSection('title'); ?> 
Wait cars
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $carss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4  d-flex justify-content-center text-center ">
        <div class="product border card  rounded  " >
           
            
            <h3><?php echo e($car->model); ?></h3>
            <h3><?php echo e($car->serial); ?></h3>
            <h4><?php echo e($car->color); ?></h4>
           
            <div>
            <form class="form-inline  mx-2 my-lg-0" action="<?php echo e(url('/E-contract/acceptcar',$car->serial)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button class="btn btn-warning" >Accept</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="<?php echo e(url('/E-contract/deletecar',$car->serial)); ?>"method="post">
            <?php echo csrf_field(); ?>
            <button class="btn btn-danger ">delete</button>
            </form>
            </div>
        </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminNave', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/showWaitcars.blade.php ENDPATH**/ ?>