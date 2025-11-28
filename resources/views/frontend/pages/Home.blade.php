@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

 <div class="max-w-7xl mx-auto px-4 lg:px-6 mt-6">
    <div class="swiper mySwiper rounded-2xl overflow-hidden shadow-lg">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="{{ asset('image/1.jpg') }}"
                     class="w-full h-[250px] sm:h-[400px] md:h-[500px] object-cover"
                     alt="Slide 1">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('image/2.jpg') }}"
                     class="w-full h-[250px] sm:h-[400px] md:h-[500px] object-cover"
                     alt="Slide 2">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('image/3.jpg') }}"
                     class="w-full h-[250px] sm:h-[400px] md:h-[500px] object-cover"
                     alt="Slide 3">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('image/4.jpg') }}"
                     class="w-full h-[250px] sm:h-[400px] md:h-[500px] object-cover"
                     alt="Slide 4">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('image/5.webp') }}"
                     class="w-full h-[250px] sm:h-[400px] md:h-[500px] object-cover"
                     alt="Slide 5">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('image/7.webp') }}"
                     class="w-full h-[250px] sm:h-[400px] md:h-[500px] object-cover"
                     alt="Slide 7">
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


  {{-- Check availability form --}}


    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h5 class="text-xl font-semibold mb-6">Check Booking Availability</h5>

            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 items-end">
                    <div class="lg:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Check-in</label>
                        <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="lg:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Check-out</label>
                        <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="lg:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Adult</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="lg:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Children</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="lg:col-span-2">
                        <button type="submit" class="w-full md:w-auto px-6 py-2 bg-gray-900 text-white rounded-md hover:bg-gray-800 transition duration-200">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

     {{-- Our Rooms --}}


    <section class="mt-12 pt-8">
        <h2 class="text-3xl font-bold text-center mb-8">OUR ROOMS</h2>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Room Card 1 --}}
                <div class="bg-white border-0 shadow-lg rounded-lg overflow-hidden max-w-sm mx-auto">
                    <img src="{{ asset('image/r.jpg') }}" class="w-full h-48 object-cover" alt="Room">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-2">Simple Room </h5>
                        <h6 class="text-lg text-gray-600 mb-4">₹200 per night</h6>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Features</h6>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">2 Rooms</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">1 Bathroom</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">1 Balcony</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">2 Sofa</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Facilities</h6>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Wifi</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">TV</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">AC</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Room Heater</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Rating</h6>
                            <div class="flex gap-1">
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                            </div>
                        </div>

                        <div class="flex justify-between gap-2">
                            <a href="#" class="flex-1 text-center px-4 py-2 bg-gray-900 text-white text-sm rounded hover:bg-gray-800 transition duration-200">
                                Book Now
                            </a>
                            <a href="#" class="flex-1 text-center px-4 py-2 border border-gray-900 text-gray-900 text-sm rounded hover:bg-gray-50 transition duration-200">
                                More details
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Room Card 2 --}}
                <div class="bg-white border-0 shadow-lg rounded-lg overflow-hidden max-w-sm mx-auto">
                    <img src="{{ asset('image/do.jpg') }}" class="w-full h-48 object-cover" alt="Room">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-2">Double Room </h5>
                        <h6 class="text-lg text-gray-600 mb-4">₹300 per night</h6>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Features</h6>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">2 Rooms</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">1 Bathroom</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">1 Balcony</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">2 Sofa</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Facilities</h6>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Wifi</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">TV</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">AC</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Room Heater</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Rating</h6>
                            <div class="flex gap-1">
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                            </div>
                        </div>

                        <div class="flex justify-between gap-2">
                            <a href="#" class="flex-1 text-center px-4 py-2 bg-gray-900 text-white text-sm rounded hover:bg-gray-800 transition duration-200">
                                Book Now
                            </a>
                            <a href="#" class="flex-1 text-center px-4 py-2 border border-gray-900 text-gray-900 text-sm rounded hover:bg-gray-50 transition duration-200">
                                More details
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Room Card 3 --}}
                <div class="bg-white border-0 shadow-lg rounded-lg overflow-hidden max-w-sm mx-auto">
                    <img src="{{ asset('image/ro.jpg') }}" class="w-full h-48 object-cover" alt="Room">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-2">Family Room </h5>
                        <h6 class="text-lg text-gray-600 mb-4">₹350 per night</h6>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Features</h6>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">2 Rooms</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">1 Bathroom</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">1 Balcony</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">2 Sofa</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Facilities</h6>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Wifi</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">TV</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">AC</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Room Heater</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="text-sm font-semibold mb-2">Rating</h6>
                            <div class="flex gap-1">
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                                <i class="bi bi-star-fill text-yellow-400"></i>
                            </div>
                        </div>

                        <div class="flex justify-between gap-2">
                            <a href="#" class="flex-1 text-center px-4 py-2 bg-gray-900 text-white text-sm rounded hover:bg-gray-800 transition duration-200">
                                Book Now
                            </a>
                            <a href="#" class="flex-1 text-center px-4 py-2 border border-gray-900 text-gray-900 text-sm rounded hover:bg-gray-50 transition duration-200">
                                More details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="#k px-6 py-2 border border-gray-900 text-gray-900 font-semibold rounded hover:bg-gray-50 transition duration-200">
                    More Rooms >>>
                </a>
            </div>
        </div>
    </section>

     <!--Our Facilities  -->
                                                                <h2 class="mt-5 pt-4 ,b-4 text-center fw-bold h-font">OUR
                                                                    FACILITIES</h2>
                                                                <div class="container">
                                                                    <div
                                                                        class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                                                                        <div
                                                                            class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                                                            <img src="images/features/wifi.svg"
                                                                                width="80px">
                                                                            <h5 class="mt-3">Wifi</h5>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                                                            <img src="images/features/wifi.svg"
                                                                                width="80px">
                                                                            <h5 class="mt-3">SPA</h5>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                                                            <img src="images/features/wifi.svg"
                                                                                width="80px">
                                                                            <h5 class="mt-3">Swimming pool</h5>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                                                            <img src="images/features/wifi.svg"
                                                                                width="80px">
                                                                            <h5 class="mt-3">24/7 Service</h5>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                                                                            <img src="images/features/wifi.svg"
                                                                                width="80px">
                                                                            <h5 class="mt-3">Banquet hall</h5>
                                                                        </div>
                                                                        <div class="col-lg-12 text-center mt-5">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More
                                                                                Facilities>>></a>
                                                                        </div>
                                                                    </div>
                                                                </div>


 <!-- About Section -->
    <div class="container my-5">
        <h2 class="text-center section-title">Welcome to Our Luxury Hotel</h2>
        <p class="text-center mb-5">
            We provide premium rooms, world-class services, and unforgettable experiences for our guests.
            Our mission is to offer comfort, reliability, and outstanding hospitality.
        </p>

        <div class="row">
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1551776235-dde6d4829808?auto=format&fit=crop&w=1200&q=80"
                     alt="Hotel"
                     class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <div class="about-box shadow-sm">
                    <h4>Who We Are</h4>
                    <p>
                        Our hotel has been serving guests with warmth and dedication for many years.
                        We aim to create a relaxing and memorable environment for everyone who stays with us.
                    </p>

                    <h4>What We Offer</h4>
                    <ul>
                        <li>Luxurious and comfortable rooms</li>
                        <li>24/7 customer support</li>
                        <li>Online room booking system</li>
                        <li>Restaurant, spa, and swimming pool</li>
                        <li>High-quality services at affordable prices</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <h2>Contact Us</h2>
    <div class="container">

        <!-- POP Contact Form -->
        <div class="contact-card">
            <h3 style="text-align:center; margin-bottom:20px;">Send Us a Message</h3>

            <form>
                <label>Your Name</label>
                <input type="text" placeholder="Enter your full name">

                <label>Your Email</label>
                <input type="email" placeholder="Enter your email address">

                <label>Your Phone</label>
                <input type="text" placeholder="Enter your phone number">

                <label>Your Message</label>
                <textarea rows="5" placeholder="Type your message here"></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

        <!-- POP Hotel Information -->
        <div class="hotel-info">
            <h3>Hotel Information</h3>
            <p><strong>📍 Address:</strong> Lakeside, Pokhara, Nepal</p>
            <p><strong>📞 Phone:</strong> ‪+977-9800000000‬</p>
            <p><strong>📧 Email:</strong> info@hotelbooking.com</p>
            <p><strong>🕒 Hours:</strong> Available 24/7</p>

            <hr style="border-color: rgba(255,255,255,0.4);">

            <h3>Follow Us</h3>
            <p>🌐 Facebook: @HotelBookingNepal</p>
            <p>🌐 Instagram: @hotelbooking_nepal</p>
        </div>

    </div>



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>

new Swiper('.mySwiper', {
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>




@endsection
