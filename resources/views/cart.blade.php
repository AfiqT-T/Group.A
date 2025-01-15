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
                        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                            {{-- <a href="#menu" class="cta-btn">Our Menu</a> --}}
                            {{-- <a href="#book-a-table" class="cta-btn">Book a Table</a> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div> --}}
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
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td>{{ $item->menu_id }}</td>
                                        <td>{{ $item->menu_name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ number_format($item->price, 2) }}</td>
                                        <td>{{ number_format($item->price * $item->quantity, 2) }}</td>
                                        <td>
                                            <a href="{{ route('cart.remove',  ['menu_id' => $item->menu_id]) }}">Remove</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Cart Summary -->
                    <div class="cart-summary mt-4">

                        <h4>Total Amount: <span id="cart-total">RM {{ number_format($totalPrice, 2) }}</span></h4>
                        <a href="{{ route('cart.showp') }}" class="btn btn-gopay">Go to Payment</a>

                    </div>

                </div>
            </section>
        </main>
    </main>
@endsection
