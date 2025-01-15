<?php $__env->startSection('content'); ?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Mahallah Ali Cafe</span></h2>
                    <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
                    <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                        
                        
                    </div>
                </div>
                
            </div>
        </div>

    </section><!-- /Hero Section -->


    <section id="feedback-thank-you" class="feedback-thank-you section">
    <div class="container text-center">
        <h2 class="section-title">Thank You!</h2>
        <p>Your feedback has been successfully submitted. We appreciate your time and effort.</p>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-home">Return to Home</a>
    </div>
</section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AliArabesque\resources\views/feedback-thank-you.blade.php ENDPATH**/ ?>