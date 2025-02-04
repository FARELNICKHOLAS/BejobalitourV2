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
</head>

<body class="pt-20">
  @include('components.navbar')

  <!-- Hero Section Starts -->
  <div class="flex items-center h-screen" style="background-image: url('image/bejohome.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="text-center mx-auto text-white">
      <h1 class="text-6xl font-semibold"><a class="text-green-500">Bejo</a> Bali Tour <h1>
          <p class="font-light text-3xl mt-5">Explore Bali, Embrace Paradise</p>
          <a class="px-10 py-4 inline-block text-xl border-2 border-white text-white bg-transparent rounded-full hover:bg-white hover:text-black transition-all duration-300 mt-10 transform hover:scale-105" href="#intro">Get Started</a>
    </div>
  </div>
  </section>
  <!-- Hero Section Ends -->

  <!-- Introduction Starts -->
  <section class="py-16 px-5" id="intro">
    <div class="max-w-screen-lg mx-auto text-center">
      <h2 class="text-3xl font-semibold text-gray-800">
        Discover a Seamless Travel Experience with Us!
      </h2>
      <p class="mt-7 text-lg text-gray-600">
      Bejobalitour is designed to offer a seamless and comfortable transportation experience in Bali. We focus on providing only 4-seater and 12-seater cars to cater to both small and larger groups. Whether you're exploring the island with a few friends or a larger group, you can rely on our well-maintained and spacious vehicles to get you to your destination safely and comfortably. With a user-friendly interface, booking your ride is just a tap away.
      </p>
      <p class="mt-7 text-lg text-gray-600">
      Layanan Bejobalitour dibuat untuk memberikan kemudahan dalam perjalanan Anda di Bali. Kami hanya menyediakan kendaraan yang nyaman dan aman, dengan pilihan mobil berkapasitas 4 kursi dan 12 kursi. Apakah Anda bepergian sendirian, bersama pasangan, atau dalam rombongan keluarga dan teman, kami siap melayani dengan kendaraan terbaik untuk pengalaman perjalanan yang menyenangkan dan tanpa hambatan.
      </p>

    </div>
  </section>
  <!-- Introduction Ends -->

  <div class="marquee mt-5">
    <div class="marquee-content">
      <span>Wonderful Bali Island • Wonderful Bali Island • Wonderful Bali Island  •</span>
      <span>Wonderful Bali Island • Wonderful Bali Island • Wonderful Bali Island  •</span>
    </div>
  </div>

  <!-- How to order Starts -->
  <div class="bg-blue-100 py-16 px-4 sm:px-6 lg:px-8 mt-5">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-7">How to Book Your Ride | Cara Memesan Kendaraan Anda</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-8">
      <div class="bg-white shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-blue-500 mb-4">1. Explore and Choose Your Tour Packages</h3>
        <p class="text-gray-600 mb-6">Explore our <a href="/destination" class="text-blue-600">Tour Packages</a>, and pick your Tour plan based on budget, and more.</p>
      </div>
  
      <div class="bg-white shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-green-500 mb-4">2. Complete Your Reservation</h3>
        <p class="text-gray-600 mb-6">Fill in your booking details given, including your full name, email Adress, and any special requests.</p>
      </div>
      
      <div class="bg-white shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-yellow-500 mb-4">3. Confirmation & Payment</h3>
        <p class="text-gray-600 mb-6">Review your reservation details that will given by our Customer Service, Make a payment, and confirm your booking.</p>
      </div>
      
      <div class="bg-white shadow-lg rounded-lg p-8 hover:scale-105 hover:shadow-2xl transition-all duration-300 transform">
        <h3 class="text-xl font-bold text-orange-500 mb-4">4. Enjoy Your Ride</h3>
        <p class="text-gray-600 mb-6">Arrive at the pick-up location, show your booking confirmation, and start your comfortable journey in Bali!</p>
      </div>
    </div>
  </div>
</div>
<div class="text-center bg-blue-100">
        <a class="bg-green-500 text-white px-8 py-5 rounded-lg shadow-md hover:bg-green-600 transition duration-300 font-semibold text-lg" href = "/bookform">
            Book Now
        </a>
    </div>
<!-- How to order Ends -->

<div class="h-16 bg-blue-100"></div>

@include('components.footer')
</body>

</html>