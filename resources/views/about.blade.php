<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bejobalitour | About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body class="relative">
    @include('components.navbar')
    <div class="flex h-screen bg-gray-700 items-center">
    <div class="text-center mx-auto text-white">
      <a class="text-5xl font-semibold text-white group transition duration-300 ease-in-out hover:scale-105 hover:text-green-300" href="#aboutus">Who are we?</a>
    </div>
  </div>

  <section class="relative flex h-screen items-center" id="aboutus" style="background-image: url('image/aboutusimage.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <!-- Dark Overlay (Limited to Section) -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>

  <!-- Content Wrapper (Keeps Text Above Overlay) -->
  <div class="relative max-w-screen-lg mx-auto text-center text-white">
    <h2 class="text-4xl font-bold">
      Bejo Bali Tour <a class="text-4xl font-bold text-green-300">Travel</a>
    </h2>
    <p class="mt-7 text-2xl font-light">
      Bejobalitour is designed to offer a seamless and comfortable transportation experience in Bali. We focus on providing only 4-seater and 12-seater cars to cater to both small and larger groups. Whether you're exploring the island with a few friends or a larger group, you can rely on our well-maintained and spacious vehicles to get you to your destination safely and comfortably. With a user-friendly interface, booking your ride is just a tap away.
    </p>
  </div>
</section>


    @include('components.footer')
</body>


</html>
