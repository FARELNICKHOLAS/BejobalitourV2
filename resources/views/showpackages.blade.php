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

<body class="pt-20 bg-gray-700">
@include('components.navbar')
<div class="container mx-auto px-4 py-6">
  <a href="{{ url('/destination') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg">Back</a>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('storage/' . $package->image) }}" class="w-full h-64 object-cover rounded-lg mb-4">
        <h1 class="text-3xl font-bold">{{ $package->tourname }}</h1>
        <p class="text-gray-600 text-lg mb-4">Rp {{ number_format($package->price, 0, ',', '.') }}</p>
        <p class="text-gray-800">{{ $package->description }}</p>
    </div>
</div>
</body>
</html>