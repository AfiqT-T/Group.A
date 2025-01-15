@extends('master.layout')

@section('content')
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
                <form action="{{ route('payment.process') }}" method="POST">
                    @csrf

                    <!-- Payment Method Section -->
                    {{-- <section class="payment-method" style="background-color: #7a7a7a;">
                        <h2>Select Payment Method</h2>
                        <div class="payment-options">
                            <label class="payment-option">
                                <input type="radio" name="payment_method" value="Credit Card" required>
                                <img src="{{ asset('assets/img/card.png') }}" alt="Credit Card">
                                <span>Credit Card</span>
                            </label>
                            <label class="payment-option">
                                <input type="radio" name="payment_method" value="Cash" required>
                                <img src="{{ asset('assets/img/cash.png') }}" alt="Cash">
                                <span>Cash</span>
                            </label>
                            <label class="payment-option">
                                <input type="radio" name="payment_method" value="Online Banking" required>
                                <img src="{{ asset('assets/img/onlinebank.png') }}" alt="Online Banking">
                                <span>Online Banking</span>
                            </label>
                        </div>
                    </section> --}}

                    <section class="payment-method" style="background-color: #7a7a7a; padding: 20px; border-radius: 8px;">
                        <h2 class="section-title" style="color: white; text-align: center; margin-bottom: 20px;">Select Payment Method</h2>

                        <div class="payment-options" style="display: flex; justify-content: space-around; align-items: center; gap: 20px;">
                            <label class="payment-option" style="flex: 1; text-align: center; display: block; margin: 0;">
                                <input type="radio" name="payment_method" value="Credit Card" required>
                                <img src="{{ asset('assets/img/card.png') }}" alt="Credit Card" style="width: 60px; margin-bottom: 8px;">
                                <span style="color: white; font-size: 16px;">Credit Card</span>
                            </label>

                            <label class="payment-option" style="flex: 1; text-align: center; display: block; margin: 0;">
                                <input type="radio" name="payment_method" value="Cash" required>
                                <img src="{{ asset('assets/img/cash.png') }}" alt="Cash" style="width: 60px; margin-bottom: 8px;">
                                <span style="color: white; font-size: 16px;">Cash</span>
                            </label>

                            <label class="payment-option" style="flex: 1; text-align: center; display: block; margin: 0;">
                                <input type="radio" name="payment_method" value="Online Banking" required>
                                <img src="{{ asset('assets/img/onlinebank.png') }}" alt="Online Banking" style="width: 60px; margin-bottom: 8px;">
                                <span style="color: white; font-size: 16px;">Online Banking</span>
                            </label>
                        </div>
                    </section>


                    <!-- Order Summary Section -->
                    <section class="order-summary" >
                        <h3>Your Order:</h3>
                        <ul>
                            @foreach ($cartItems as $item)
                                <li>{{ $item->menu_name }} <span class="checkmark">✔</span></li>
                            @endforeach
                        </ul>
                        <p class="subtotal">Subtotal: <strong>RM {{ number_format($totalPrice, 2) }}</strong></p>
                    </section>

                    <!-- Confirm Payment Button -->
                    <button type="submit" class="btn btn-pay">Confirm Payment</button>
                </form>
            </div>
        </div>
    </section>

</main>
@endsection
