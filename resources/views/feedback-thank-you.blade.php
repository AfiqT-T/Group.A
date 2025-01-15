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


    <section id="feedback-thank-you" class="feedback-thank-you section">
    <div class="container text-center">
        <h2 class="section-title">Thank You!</h2>
        <p>Your feedback has been successfully submitted. We appreciate your time and effort.</p>
        <a href="{{ url('/') }}" class="btn btn-home">Return to Home</a>
    </div>
</section>
</main>

@endsection
