@extends('frontend.layouts.master')
@section('content')


   <!-- ROOM SECTION -->
<div class="container py-5">

    <h2 class="text-center mb-4 font-weight-bold">Our Rooms</h2>
    <p class="text-center mb-5">Choose the perfect room and enjoy your stay with comfort.</p>

    <div class="row">

        <!-- Single Room -->
        <div class="col-md-4 mb-4">
            <div class="card room-card">
                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b" class="room-img" alt="Single Room">
                <div class="card-body">
                    <h4 class="card-title">Single Room</h4>
                    <p class="card-text">A cozy and comfortable room ideal for solo travelers.</p>
                    <p class="font-weight-bold">Price: $50 / Night</p>
                    <a href="#" class="btn btn-primary btn-block">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Double Room -->
        <div class="col-md-4 mb-4">
            <div class="card room-card">
                <img src="{{ asset('image/do.jpg') }}" class="room-img" alt="Double Room">
                <div class="card-body">
                    <h4 class="card-title">Double Room</h4>
                    <p class="card-text">Spacious room perfect for couples or two guests.</p>
                    <p class="font-weight-bold">Price: $80 / Night</p>
                    <a href="#" class="btn btn-primary btn-block">Book Now</a>
                </div>
            </div>
         </div>

        <!-- Deluxe Room -->
        <div class="col-md-4 mb-4">
            <div class="card room-card">
                <img src="{{ asset('image/de.jpg') }}" class="room-img"  alt="Deluxe Room">
                <div class="card-body">
                    <h4 class="card-title">Deluxe Room</h4>
                    <p class="card-text">Luxurious room with premium amenities and beautiful views.</p>
                    <p class="font-weight-bold">Price: $120 / Night</p>
                    <a href="#" class="btn btn-primary btn-block">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Suite -->
        <div class="col-md-4 mb-4">
            <div class="card room-card">
                <img src="{{ asset('image/r.jpg') }}" class="room-img" alt="Suite Room">
                <div class="card-body">
                    <h4 class="card-title">Suite Room</h4>
                    <p class="card-text">A premium suite for families or guests seeking luxury.</p>
                    <p class="font-weight-bold">Price: $200 / Night</p>
                    <a href="#" class="btn btn-primary btn-block">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Family Room -->
        <div class="col-md-4 mb-4">
            <div class="card room-card">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="room-img" alt="Family Room">
                  <div class="card-body">
                    <h4 class="card-title">Family Room</h4>
                    <p class="card-text">Perfect choice for families looking for extra space.</p>
                    <p class="font-weight-bold">Price: $150 / Night</p>
                    <a href="#" class="btn btn-primary btn-block">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Luxury Suite -->
        <div class="col-md-4 mb-4">
            <div class="card room-card">
                <img src="{{ asset('image/ro.jpg') }}" class="room-img" alt="Luxury Suite">
                <div class="card-body">
                    <h4 class="card-title">Luxury Suite</h4>
                    <p class="card-text">Top-class luxurious suite with special services.</p>
                    <p class="font-weight-bold">Price: $250 / Night</p>
                    <a href="#" class="btn btn-primary btn-block">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>


    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        // Swiper for testimonials
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
@endsection
