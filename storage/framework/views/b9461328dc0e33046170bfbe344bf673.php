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

        <main class="main">
            <section id="cart" class="cart section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="section-title">Your Cart</h2>
                    <p class="section-description">Review your items before checkout.</p>

                    <!-- Cart Table -->
                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
                            <thead>
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price (RM)</th>
                                    <th>Total Price (RM)</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->menu_id); ?></td>
                                        <td><?php echo e($item->menu_name); ?></td>
                                        <td><?php echo e($item->quantity); ?></td>
                                        <td><?php echo e(number_format($item->price, 2)); ?></td>
                                        <td><?php echo e(number_format($item->price * $item->quantity, 2)); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('cart.remove',  ['menu_id' => $item->menu_id])); ?>">Remove</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Cart Summary -->
                    <div class="cart-summary mt-4">

                        <h4>Total Amount: <span id="cart-total">RM <?php echo e(number_format($totalPrice, 2)); ?></span></h4>
                        <a href="<?php echo e(route('cart.showp')); ?>" class="btn btn-gopay">Go to Payment</a>

                    </div>

                </div>
            </section>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AliArabesque\resources\views/cart.blade.php ENDPATH**/ ?>