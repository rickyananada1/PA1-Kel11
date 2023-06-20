
      
      
      <?php if(Route::has('login')): ?>
      <?php if(auth()->guard()->check()): ?>
      
       

       <?php echo $__env->make('users.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


     
     <?php else: ?>
     
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top d-flex align-items-center">
         <div class="container d-flex justify-content-between">

         <div class="logo">
             <h1><a href="#hero"><span>lumbanbinanga</span>.com</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar">
             <ul>
             <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
             <li><a class="nav-link scrollto" href="#about">About</a></li>
             <li><a class="nav-link scrollto" href="#services">Features</a></li>
             <li><a class="nav-link scrollto" href="#team">Destination</a></li>
             <li>
                 <a href="<?php echo e(route('login')); ?>" ">Log in</a>
             </li>
             <?php if(Route::has('register')): ?>
             <li>
                 <a href="<?php echo e(route('register')); ?>" ">Register</a>
                 
             </li>
             <?php endif; ?>
             <?php endif; ?>

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>

         </nav>
         <!-- .navbar -->
         </div>
         <?php endif; ?>

     </header>
     <!-- End Header --><?php /**PATH C:\xampp\htdocs\lumbanbinanga.com\PA1-Kel11\Code\resources\views/layouts/body/header.blade.php ENDPATH**/ ?>