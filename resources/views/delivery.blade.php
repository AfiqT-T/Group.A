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
            <!-- Delivery Status Section -->
            <section id="delivery-status" class="delivery-status section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="section-title">Delivery Status</h2>
                    <p class="section-description">Track your order and manage your delivery address below.</p>

                    <div class="row">
                        <!-- Left Column: Delivery Timeline -->
                        <div class="col-lg-8">
                            <div class="timeline">
                                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                                    <span class="timeline-icon"><i class="bi bi-box-seam"></i></span>
                                    <div class="timeline-content">
                                        <h4>Order Placed</h4>
                                        <p>January 10, 2025 - 10:00 AM</p>
                                    </div>
                                </div>
                                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                                    <span class="timeline-icon"><i class="bi bi-truck"></i></span>
                                    <div class="timeline-content">
                                        <h4>Out for Delivery</h4>
                                        <p>January 10, 2025 - 2:00 PM</p>
                                    </div>
                                </div>
                                <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                                    <span class="timeline-icon"><i class="bi bi-geo-alt"></i></span>
                                    <div class="timeline-content">
                                        <h4>Delivered</h4>
                                        <p>January 10, 2025 - 4:00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p data-aos="fade-up" data-aos-delay="200">Your order has been successfully delivered!</p>
                                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <a href="feedback" class="btn btn-feedback">Give Feedback</a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Address Edit Section -->
                        <div class="col-lg-4">
                            <div class="address-card" data-aos="fade-up" data-aos-delay="500">
                                <h4>Your Delivery Details</h4>
                                <p id="user-name">Jasmine Hanis</p>
                                <p id="user-contact">+6019-2546879</p>
                                <p id="delivery-address">Block A, Mahallah Aminah, International Islamic University
                                    Malaysia, 53100 Kuala Lumpur</p>
                                <p id="note-to-rider">Drop at Guard House</p>
                                <button class="btn btn-primary btn-edit-address" data-bs-toggle="modal"
                                    data-bs-target="#editAddressModal">
                                    Edit Address
                                </button>
                            </div>
                        </div>
                    </div>




                    <!-- Edit Details Modal -->
                    <div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAddressModalLabel">Edit Delivery Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editDetailsForm">
                                        <div class="mb-3">
                                            <label for="userName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="userName" value="Jasmine Hanis"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userContact" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="userContact"
                                                value="+6019-2546879" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deliveryAddress" class="form-label">Address</label>
                                            <textarea class="form-control" id="deliveryAddress" rows="3" required>Block A, Mahallah Aminah, International Islamic University Malaysia, 53100 Kuala Lumpur</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="noteToRider" class="form-label">Note to Rider</label>
                                            <input type="text" class="form-control" id="noteToRider"
                                                value="Drop at Guard House">
                                        </div>
                                        <button type="button" class="btn btn-theme" onclick="saveDetails()">Save
                                            Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


        </main>

    </main>
@endsection
