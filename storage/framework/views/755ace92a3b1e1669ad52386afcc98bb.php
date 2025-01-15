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



<section id="feedback" class="feedback section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Feedback</h2>
        <p>We’d love to hear your feedback!</p>
    </div>

    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <form action="<?php echo e(route('feedback.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="order_id">Order ID</label>
                <input type="text" name="order_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="user_name">Your Name</label>
                <input type="text" name="user_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="rating">Rating</label><br>
                <span class="star-rating">
                    <input type="radio" name="rating" value="1" id="star-1">
                    <label for="star-1">★</label>

                    <input type="radio" name="rating" value="2" id="star-2">
                    <label for="star-2">★</label>

                    <input type="radio" name="rating" value="3" id="star-3">
                    <label for="star-3">★</label>

                    <input type="radio" name="rating" value="4" id="star-4">
                    <label for="star-4">★</label>

                    <input type="radio" name="rating" value="5" id="star-5">
                    <label for="star-5">★</label>
                </span>
            </div>

            <div class="form-group">
                <label for="comments">Feedback</label>
                <textarea name="comments" class="form-control" rows="4"></textarea>
            </div>
            <br>

            <button type="submit" class="btn btn-submit">Submit</button>
        </form>

    </div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AliArabesque\resources\views/feedback.blade.php ENDPATH**/ ?>