<?php $__env->startSection('content'); ?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg.jpg" alt="Hero Image" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Mahallah Ali Cafe</span></h2>
                    <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Section -->
    <section id="payment" class="payment section" >
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2 class="section-title">Payment Order #016</h2>

            <div class="payment-container">
                <form action="<?php echo e(route('payment.process')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <!-- Payment Method Section -->
                    

                    <section class="payment-method" style="background-color: #7a7a7a; padding: 20px; border-radius: 8px;">
                        <h2 class="section-title" style="color: white; text-align: center; margin-bottom: 20px;">Select Payment Method</h2>

                        <div class="payment-options" style="display: flex; justify-content: space-around; align-items: center; gap: 20px;">
                            <label class="payment-option" style="flex: 1; text-align: center; display: block; margin: 0;">
                                <input type="radio" name="payment_method" value="Credit Card" required>
                                <img src="<?php echo e(asset('assets/img/card.png')); ?>" alt="Credit Card" style="width: 60px; margin-bottom: 8px;">
                                <span style="color: white; font-size: 16px;">Credit Card</span>
                            </label>

                            <label class="payment-option" style="flex: 1; text-align: center; display: block; margin: 0;">
                                <input type="radio" name="payment_method" value="Cash" required>
                                <img src="<?php echo e(asset('assets/img/cash.png')); ?>" alt="Cash" style="width: 60px; margin-bottom: 8px;">
                                <span style="color: white; font-size: 16px;">Cash</span>
                            </label>

                            <label class="payment-option" style="flex: 1; text-align: center; display: block; margin: 0;">
                                <input type="radio" name="payment_method" value="Online Banking" required>
                                <img src="<?php echo e(asset('assets/img/onlinebank.png')); ?>" alt="Online Banking" style="width: 60px; margin-bottom: 8px;">
                                <span style="color: white; font-size: 16px;">Online Banking</span>
                            </label>
                        </div>
                    </section>


                    <!-- Order Summary Section -->
                    <section class="order-summary" >
                        <h3>Your Order:</h3>
                        <ul>
                            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($item->menu_name); ?> <span class="checkmark">✔</span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <p class="subtotal">Subtotal: <strong>RM <?php echo e(number_format($totalPrice, 2)); ?></strong></p>
                    </section>

                    <!-- Confirm Payment Button -->
                    <button type="submit" class="btn btn-pay">Confirm Payment</button>
                </form>
            </div>
        </div>
    </section>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AliArabesque\resources\views/payment.blade.php ENDPATH**/ ?>