
<?php $__env->startSection('title'); ?> 
Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container w-25 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
<div class="col-md-12" id="vari">
                    <form action="<?php echo e(url('E-contract/storeCar')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-group mt-1">
                            <label>Car Model</label>
                            <input type="text" class="form-control" name="model" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Car serial</label>
                            <input type="text" class="form-control" name="serial" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Car color</label>
                            <input type="text" class="form-control" name="color" required>
                        </div>
                        
                        <button class="btn btn-primary mb-4" id="login" onclick="hello()">Add Car</button>
                    </form> 
                </div>
            </div>
</div>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('usernave', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/addCar.blade.php ENDPATH**/ ?>