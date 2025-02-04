<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bejobalitour | Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
