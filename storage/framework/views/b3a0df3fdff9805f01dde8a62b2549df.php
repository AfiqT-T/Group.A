<?php $__env->startSection('content'); ?>
    <main>
        <div class="payment-id">
            <header class="payment-header">
                <h1>Payment Order #016</h1>
            </header>
        </div>

        <div class="payment-container">
            <form action="/process-payment" method="POST">
                <?php echo csrf_field(); ?>
                <section class="payment-method">
                    <h2>Payment Method</h2>
                    <div class="payment-options">
                        <label class="payment-option">
                            <input type="radio" name="payment_method" value="cash" checked>
                            <img src="assets/img/cash.png" alt="Cash payment option">
                            <span>Cash</span>
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment_method" value="card">
                            <img src="assets/img/card.png" alt="Card payment option">
                            <span>Card</span>
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment_method" value="online">
                            <img src="assets/img/onlinebank.png" alt="Online banking payment option">
                            <span>Online Pay</span>
                        </label>
                    </div>
                </section>

                <!-- Order Summary Section -->
                <section class="order-summary">
                    <h3>Your order:</h3>
                    <ul>
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item->menu_name); ?> <span class="checkmark">✔</span></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <p class="subtotal">Subtotal: <strong>RM <?php echo e(number_format($totalPrice, 2)); ?></strong></p>
                </section>

                <div class="payment-buttons">
                    <button type="button" class="edit-order">Edit Order</button>
                    <button type="submit" class="confirm-pay">Confirm and Pay</button>
                </div>
            </form>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AliArabesque\resources\views/payments.blade.php ENDPATH**/ ?>