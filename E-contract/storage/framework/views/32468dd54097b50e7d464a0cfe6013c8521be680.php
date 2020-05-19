


<?php $__env->startSection('title'); ?>
sign up
<?php $__env->stopSection(); ?>      
<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger">
                                <?php echo e($error); ?>   
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
        <div class="container w-25 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12" id="vari">
                  
                <form action="<?php echo e(url('/E-contract/store')); ?>" method="post"  enctype="multipart/form-data" >
                <?php echo csrf_field(); ?>
                        <div class="form-group mt-1">
                            <label>User Name</label>
                            <input type="text" value="<?php echo e(old('userName')); ?>" class="form-control" name="userName" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>User Email</label>
                            <input type="email" value="<?php echo e(old('email')); ?>" class="form-control" name="email" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Age</label>
                            <input type="text" value="<?php echo e(old('age')); ?>" class="form-control" name="age" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>National Id</label>
                            <input type="text" value="<?php echo e(old('national_id')); ?>" class="form-control" name="national_id" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Address</label>
                            <input type="text" value="<?php echo e(old('address')); ?>" class="form-control" name="address" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <div class="form-group mt-1">
                            <label>National Id image</label>
                            <input type="file"  class="form-control" name="nImage" required accept="image/*">
                        </div>
                        <button class="btn btn-primary mb-4" id="login" onclick="hello()">Sign up</button>
                    </form> 
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/signup.blade.php ENDPATH**/ ?>