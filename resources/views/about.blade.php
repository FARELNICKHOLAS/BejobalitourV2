<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bejobalitour | About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body class="relative pt-20 ">
    @include('components.navbar')
    <div class="flex items-center h-screen">
    <div class="text-center mx-auto text-white">
      <h1 class="text-6xl font-semibold text-black"><a class="text-green-500">About</a> Us<h1>
    </div>
  </div>
    @include('components.footer')
</body>


</html>
