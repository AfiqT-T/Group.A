@extends('master.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <main class="main">

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

            </section>
            <title>Order History - Ali Arabesque</title>
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    font-family: Arial, sans-serif;
                    background-color: #fdf6e9;
                }

                .navbar {
                    background-color: #000;
                    padding: 1rem;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .navbar .logo {
                    color: white;
                    font-size: 1.2rem;
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                }

                .navbar .nav-links {
                    display: flex;
                    gap: 1rem;
                }

                .nav-links a {
                    color: white;
                    text-decoration: none;
                }

                .container {
                    max-width: 1200px;
                    margin: 2rem auto;
                    padding: 0 1rem;
                }

                .order-card {
                    background-color: #4a2512;
                    border-radius: 8px;
                    margin-bottom: 1rem;
                    color: white;
                }

                .order-header {
                    padding: 1rem;
                    display: flex;
                    justify-content: space-between;
                    background-color: #3a1d0e;
                    border-radius: 8px 8px 0 0;
                }

                .item-row {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 1rem;
                }

                .item-info {
                    display: flex;
                    gap: 1rem;
                    align-items: center;
                }

                .item-image {
                    width: 60px;
                    height: 60px;
                    object-fit: cover;
                    border-radius: 4px;
                }

                .total-row {
                    display: flex;
                    justify-content: flex-end;
                    padding: 1rem;
                    border-top: 1px solid rgba(255, 255, 255, 0.1);
                }

                h1 {
                    color: #4a2512;
                    margin-bottom: 2rem;
                }

                .status-badge {
                    padding: 0.25rem 0.5rem;
                    border-radius: 4px;
                    font-size: 0.875rem;
                }

                .status-completed {
                    background-color: #22543d;
                }

                .status-pending {
                    background-color: #744210;
                }

                .status-cancelled {
                    background-color: #742a2a;
                }
            </style>
    </head>

        <div class="container">
            <h1>Order History</h1>

            @foreach ($orders as $order)
                <div class="order-card">
                    <div class="order-header">
                        <div>
                            Order #{{ $order->id }} - {{ $order->order_date->format('d M Y, H:i') }}
                        </div>
                        <div class="status-badge status-{{ $order->status }}">
                            {{ ucfirst($order->status) }}
                        </div>
                    </div>
                    <div class="item-row">
                        <div class="item-info">
                            <div>{{ $order->item_name }}</div>
                        </div>
                        <div>
                            <div>Quantity: {{ $order->quantity }}</div>
                            <div>RM {{ number_format($order->price, 2) }}</div>
                        </div>
                    </div>
                    <div class="total-row">
                        Total: RM {{ number_format($order->total_amount, 2) }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="nav-links">
            <li><a href="{{ route('mainpage') }}">Back</a></li>
        </div>

    </body>

    </html>
@endsection
