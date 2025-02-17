<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
  <title>Bejobalitour | Travel Services</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body class="pt-20">
  @include('components.navbar')

  <!-- Hero Section Starts -->
  <div class="flex items-center h-screen" style="background-image: url('image/bejohome.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="text-center mx-auto text-white">
      <h1 class="text-6xl font-medium"><a class="text-green-300">Bejo</a> Bali Tour <h1>
          <p class="font-light text-3xl mt-5">Explore Bali, Embrace Paradise</p>
          <a class="px-10 py-4 inline-block text-xl border-2 border-green-300 text-white bg-transparent rounded-full hover:bg-green-300 hover:text-black transition-all duration-300 mt-10 transform hover:scale-105" href="#intro">Get Started</a>
    </div>
  </div>
  </section>
  <!-- Hero Section Ends -->


<!-- Introduction Starts -->
<section class="py-16 px-5 bg-gray-700 min-h-screen flex flex-col justify-center" id="intro">
    <div class="max-w-screen-lg mx-auto text-center">
        <h2 class="text-5xl font-bold text-white leading-tight">
            Discover a <span class="text-green-300">Seamless</span> Travel Experience with Us!
        </h2>
    </div>

    <div class="swiper mySwiper mt-10">
        <div class="swiper-wrapper">
            @foreach ($packages as $package)
                <div class="swiper-slide flex justify-center items-center pt-10">
                    <div class="bg-gray-800 backdrop-blur-md bg-opacity-80 shadow-lg rounded-xl p-6 w-[90%] max-w-3xl h-[50vh] flex flex-col transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('image/' . $package->image) }}" alt="{{ $package->title }}" 
                            class="rounded-lg w-full h-[60%] object-cover shadow-md">
                        <div class="flex-grow flex flex-col justify-between mt-4 text-center">
                            <h2 class="text-green-400 font-bold text-3xl">{{ $package->title }}</h2>
                            <h3 class="text-xl font-semibold text-green-300">{{ $package->tourname }}</h3>
                            <p class="text-white text-lg font-medium">Rp {{ number_format($package->price, 0, ',', '.') }}</p>
                            <a href="{{ route('showpackages', $package->slug) }}" 
                               class="mt-4 mb-4 bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-300 transition-all duration-300 inline-block w-2/3 mx-auto text-lg font-semibold">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Introduction Ends -->




  <!-- How to order Starts -->
  <div class="bg-gray-200 py-16 px-4 sm:px-6 lg:px-8 ">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-7">How to Book Your Ride | Cara Memesan Kendaraan Anda</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-8">
      <div class="bg-gray-800 shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-blue-400 mb-4">1. Explore and Choose Your Tour Packages</h3>
        <p class="text-white mb-6">Explore our <a href="/destination" class="text-blue-400">Tour Packages</a>, and pick your Tour plan based on budget, and more.</p>
      </div>
  
      <div class="bg-gray-800 shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-green-400 mb-4">2. Complete Your Reservation</h3>
        <p class="text-white mb-6">Fill in your booking details given, including your full name, email Adress, and any special requests.</p>
      </div>
      
      <div class="bg-gray-800 shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-yellow-400 mb-4">3. Confirmation & Payment</h3>
        <p class="text-white mb-6">Review your reservation details that will given by our Customer Service, Make a payment, and confirm your booking.</p>
      </div>
      
      <div class="bg-gray-800 shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-orange-400 mb-4">4. Enjoy Your Ride</h3>
        <p class="text-white mb-6">Arrive at the pick-up location, show your booking confirmation, and start your comfortable journey in Bali!</p>
      </div>
    </div>
  </div>
</div>
<div class="text-center bg-gray-200">
        <a class="bg-green-500 text-white px-8 py-5 rounded-lg shadow-md hover:bg-green-600 transition duration-300 font-semibold text-lg" href = "/bookform">
            Book Now
        </a>
    </div>
<!-- How to order Ends -->

<div class="h-16 bg-gray-200"></div>

@include('components.footer')
</body>

</html>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 5000, // 5 seconds
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 20,
      breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  });
</script>
