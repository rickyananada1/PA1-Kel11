<?php
$sliders = DB::table('sliders')->get();
?>

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="carousel-item active <?php echo e($key == 0 ? 'active' : ''); ?>" style="background-image: url(<?php echo e(asset($slider->image)); ?>)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo e($slider->title); ?>  </h2>
                <p class="animate__animated animate__fadeInUp"><?php echo e($slider->description); ?></p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Jelajahi Lebih Dalam</a>
              </div>
            </div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>
  <!-- End Hero Section -->
<?php /**PATH C:\xampp\htdocs\lumbanbinanga.com\PA1-Kel11\Code\resources\views/layouts/body/slider.blade.php ENDPATH**/ ?>