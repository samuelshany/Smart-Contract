
<?php $__env->startSection('title'); ?> 
Wait users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $userss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4  d-flex justify-content-center text-center ">
        <div class="product border card  rounded  " >
           
        <img class="card-img-top " src="<?php echo e(asset($user->image)); ?>">
            <h3><?php echo e($user->name); ?></h3>
            <h3><?php echo e($user->national_id); ?></h3>
            <h4><?php echo e($user->email); ?></h4>
            <h3><?php echo e($user->age); ?></h3>
            <h3><?php echo e($user->address); ?></h3>
            <div>
            <form class="form-inline  mx-2 my-lg-0" action="<?php echo e(url('/E-contract/acceptuser',$user->national_id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button class="btn btn-warning" >Accept</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="<?php echo e(url('/E-contract/deleteuser',$user->national_id)); ?>"method="post">
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


<?php echo $__env->make('adminNave', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/showWaitusers.blade.php ENDPATH**/ ?>