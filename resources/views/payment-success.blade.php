@extends('master.layout')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Mahallah Ali Cafe</span></h2>
                    <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
                </div>
            </div>
        </div>

    </section>

    <!-- Payment Success Section -->
    <section class="payment-success section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column align-items-center text-center">
                    <h2 class="section-title">Payment Successful!</h2>
                    <p class="success-message">Your payment has been processed successfully. Thank you for your order!</p>

                    <div class="order-details">
                        <h4>Order #016</h4>
                        <p><strong>Total:</strong> RM {{ number_format($totalPrice, 2) }}</p>
                        <p><strong>Payment Method:</strong> {{ $paymentMethod }}</p>
                    </div>


                    <div class="buttons-container mt-4">
                        <a href="{{ route('delivery')}}" class="btn btn-delivery">Check Order Status</a>
                        <a href="{{ url('/') }}" class="btn btn-home">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
