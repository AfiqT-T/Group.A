@extends('master.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
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
                </div>
            </div>

        </section>

        <section id="menu" class="menu section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Menu</h2>
                <p>Check Our Tasty Menu</p>
            </div><!-- End Section Title -->

            <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul class="menu-filters isotope-filters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-soup">Sup Fiesta</li>
                            <li data-filter=".filter-nusantara">Rasa Nusantara</li>
                            <li data-filter=".filter-sips">Sip & Savor</li>

                        </ul>
                    </div>
                </div><!-- Menu Filters -->

                <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item isotope-item filter-soup">
                        <img src="assets/img/menu/sizzlingmee.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Sizzling Yee Mee</a><span>RM7.00</span>
                        </div>
                        <div class="menu-ingredients">
                            The dish is serves in a boiling-hot roasted sizzling gravy which packs with a punch of wonderful
                            flavours.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-soup">
                        <img src="assets/img/menu/riceclaypot.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Chicken Rice Claypot</a><span>RM8.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Clay pot rice is known for its rich flavor and aroma.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-soup">
                        <img src="assets/img/menu/tomyamclaypot.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Tom Yum Claypot</a><span>RM7.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Thai soup made with a variety of seafood or meat in a claypot, along with herbs and spices.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-soup">
                        <img src="assets/img/menu/creamytomyam.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Creamy Tomyam Noodle</a><span>RM8.50</span>
                        </div>
                        <div class="menu-ingredients">
                            The richer, more voluptuous sister of the classic "clear broth" Tom Yum.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-soup">
                        <img src="assets/img/menu/bihunsup.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Bihoon Soup</a><span>RM6.50</span>
                        </div>
                        <div class="menu-ingredients">
                            Malay-style rice noodle soup consists of rice noodles, broth, and spices.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-soup">
                        <img src="assets/img/menu/kuetiausup.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Kuetiau Soup</a><span>RM6.50</span>
                        </div>
                        <div class="menu-ingredients">
                            A flat rice noodle used in many dishes across Southeast Asia served with hot broth.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-nusantara">
                        <img src="assets/img/menu/nasigepuk.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Nasi Ayam Gepuk</a><span>RM7.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Chicken is marinated with spices, deep-fried to golden perfection, and
                            smashed to tenderize while infusing it with flavor. </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-nusantara">
                        <img src="assets/img/menu/nasiayam.jpeg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Nasi Ayam</a><span>RM7.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Flavorful rice, baked chicken, aromatic soup and side sauces.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-nusantara">
                        <img src="assets/img/menu/nasigeprek.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Nasi Ayam Geprek</a><span>RM7.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Chicken is marinated with spices, deep-fried to golden perfection, and smashed to tenderize
                            while infusing it with flavor.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-nusantara">
                        <img src="assets/img/menu/buburayam.jpeg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Bubur Ayam</a><span>RM8.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Juicy chicken strips in mouth-watering porridge, garnished with spring onions, sliced ginger,
                            fried shallots and diced chilies.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-nusantara">
                        <img src="assets/img/menu/sateayam.avif" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Sate Ayam</a><span>RM8.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Chicken meat marinated in sweet soy sauce and cooked on an open flame grill
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-nusantara">
                        <img src="assets/img/menu/nasilemak.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Nasi lemak</a><span>RM6.50</span>
                        </div>
                        <div class="menu-ingredients">
                            Fragrant rice cooked in coconut milk and pandan leaves, served with a side of sambal (a spicy
                            paste), eggs and anchovies.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-sips">
                        <img src="assets/img/menu/honeytea.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Honey Tea</a><span>RM3.00</span>
                        </div>
                        <div class="menu-ingredients">
                            The honey can complement the tea's flavor and add a floral note.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-sips">
                        <img src="assets/img/menu/freshorange.webp" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Fresh Orange</a><span>RM4.50</span>
                        </div>
                        <div class="menu-ingredients">
                            Liquid extract of the orange tree fruit, produced by squeezing or reaming oranges.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-sips">
                        <img src="assets/img/menu/greentea.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Green Tea</a><span>RM3.00</span>
                        </div>
                        <div class="menu-ingredients">
                            A delicate flavor that can be fruity or exquisite.
                        </div>
                    </div><!-- Menu Item -->

                    <div class="col-lg-6 menu-item isotope-item filter-sips">
                        <img src="assets/img/menu/hotchoco.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Hot Chocolate</a><span>RM5.00</span>
                        </div>
                        <div class="menu-ingredients">
                            A heated drink consisting of shaved or melted chocolate or cocoa powder,heated milk or water,
                            and usually a sweetener.
                        </div>
                    </div><!-- Menu Item -->


                </div>

                <!-- Menu Container -->



        </section><!-- /Menu Section -->

        <!-- Add-to-Cart Section -->
        <section id="specials" class="specials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Add to Cart</h2>
                <p>Choose Your Order</p>
            </div>

            <!-- Menu Table -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Menu ID</th>
                            <th>Menu Name</th>
                            <th>Vendor ID</th>
                            <th>Vendor Name</th>
                            <th>Price (RM)</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->menu_id }}</td>
                                <td>{{ $menu->menu_name }}</td>
                                <td>{{ $menu->vendor_id }}</td>
                                <td>{{ $menu->vendor_name }}</td>
                                <td>{{ number_format($menu->price, 2) }}</td>
                                <td>
                                    <form method="POST" action="{{ route('cart.add') }}">
                                        @csrf
                                        <input type="number" name="quantity" value="1" min="1"
                                            class="form-control" style="width: 80px;">
                                        <input type="hidden" name="menu_id" value="{{ $menu->menu_id }}">
                                        <input type="hidden" name="menu_name" value="{{ $menu->menu_name }}">
                                        <input type="hidden" name="vendor_id" value="{{ $menu->vendor_id }}">
                                        <input type="hidden" name="vendor_name" value="{{ $menu->vendor_name }}">
                                        <input type="hidden" name="price" value="{{ $menu->price }}">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('cart') }}" class="btn btn-cart">
                    Go to Cart
                </a>
            </div>
        </section>
    </main>


    </html>
@endsection
