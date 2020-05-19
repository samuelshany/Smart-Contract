<html>
    <head>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/all.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/index.css">
        <title id="title"><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <nav id="navBar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo e(url('/E-contract/home')); ?>">E-contract</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mt-1">
        <a class="nav-link "  href="<?php echo e(url('/E-contract/home')); ?>"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item mt-1">
      <a class="nav-link "  href="<?php echo e(url('/E-contract/addcar')); ?>"><i class="fas fa-car"></i>Add car </a>
      </li>
      <li class="nav-item mt-1">
      <a class="nav-link "  href="myCars.php"><i class="fas fa-car"></i>My cars </a>
      </li>    
    </ul>
    <form class="form-inline my-2 my-lg-0 mx-2" action="<?php echo e(url('/E-contract/logout')); ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  
  </div>
        
        
    </nav>
    </body>
</html><?php /**PATH C:\xampp\htdocs\E-contract\resources\views/layouts/userDashboard.blade.php ENDPATH**/ ?>