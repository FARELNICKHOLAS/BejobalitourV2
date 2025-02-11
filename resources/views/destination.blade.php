<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bejobalitour | Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body class="relative pt-20 bg-gray-700">
    @include('components.navbar')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-4 text-white">Our Tour Package Plans</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-5">
        @foreach($packages as $package)
        <div class="border rounded-lg p-4 shadow-lg">
            <img src="{{ asset('storage/' . $package->image) }}" class="w-full h-40 object-cover rounded-lg mb-2">
            <h2 class="text-xl font-semibold text-green-300">{{ $package->tourname }}</h2>
            <p class="text-white">Rp {{ number_format($package->price, 0, ',', '.') }}</p>
            <a href="{{ route('showpackages', $package->slug) }}" class="text-green-300 font-semibold underline">Lihat Detail</a>
        </div>
        @endforeach
    </div>
</div>

    @include('components.footer')
</body>


</html>
