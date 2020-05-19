


<?php $__env->startSection('title'); ?>
login 
<?php $__env->stopSection(); ?>      
<?php $__env->startSection('content'); ?>
        <div class="container w-25 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12" id="vari">
                    <form action="<?php echo e(url('/E-contract/check')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-group mt-5">
                            <label>User Email</label>
                            <input type="text" class="form-control" name="userEmail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="userPassword">
                         </div>
                        <button class="btn btn-primary mb-4"   >login</button>
                    </form> 
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
        
  
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/login.blade.php ENDPATH**/ ?>