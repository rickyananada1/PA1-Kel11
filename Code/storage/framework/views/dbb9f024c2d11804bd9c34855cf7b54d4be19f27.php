<link rel="icon" href="assets5/beach.png">
<title>lumbanbinanga.com</title>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>


    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/animate.css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')); ?>">

    <style>
        body {
            font-family: Poppins, sans-serif;
            font-size: 16px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3 {
            font-weight: 600;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
        }

        h3 {
            font-size: 16px;
        }

        p {
            margin-bottom: 16px;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        a:hover {
            color: #555;
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .hero {
            background-color: #ffffff;
            padding: 100px 0;
        }

        .hero h1 {
            margin-top: 0;
        }

        .hero .btn-get-started {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .hero .btn-get-started:hover {
            background-color: #555;
        }

        .contact {
            background-color: #ffffff;
            padding: 50px 0;
        }

        .contact h2 {
            margin-bottom: 30px;
        }

        .contact p {
            margin-bottom: 10px;
        }

        .contact .btn-contact {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .contact .btn-contact:hover {
            background-color: #555;
        }

        @media (max-width: 768px) {
            .container {
                max-width: 500px;
            }
        }
    </style>

    <section id="hero" class="d-flex align-items-center"
        style="width: 100%; height: 89vh; ">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class=" text-center ">
                    <h1> Hi <b><?php echo e(Auth::user()->name); ?></b> Welcome To lumbanbinanga.com <br></h1>
                    <h2> <b> Thank You For Fisiting Our website </b></h2>
                </div>
            </div>
            <div class="text-center">
                <a href="/contact" class="btn-get-started scrollto text-decoration-none"><b>Kontak Kami</b> </a>
                <h2> <b> Don't hesitate to contact us if you have problems </b></h2>
            </div>
        </div>
        </div>
    </section>
    
    <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\lumbanbinanga.com\PA1-Kel11\Code\resources\views/users/index.blade.php ENDPATH**/ ?>