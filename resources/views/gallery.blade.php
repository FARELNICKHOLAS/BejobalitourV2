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
<body class="relative pt-20 bg-blue-300">

    <div class="relative z-10">
        @include('components.navbar')
        <div class="max-w-7xl mx-auto p-7">
            <h1 class="text-3xl font-bold text-white text-center mb-8">Our Journey</h1>
            <div class="ourimages">
                @foreach ($images as $image)
                    <img src="{{ asset('image/gallery/' . $image) }}" alt="Gallery Image">
                @endforeach
            </div>
        </div>
        <div class="h-16"></div>
        @include('components.footer')
    </div>
</body>


</html>
