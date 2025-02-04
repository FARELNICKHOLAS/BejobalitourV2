<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bejobalitour | Booking Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<section id="booking-form" class="py-16 px-5 bg-blue-200">
    <div class="max-w-screen-md mx-auto bg-white p-10 rounded-lg shadow-2xl">
        <h2 class="text-4xl font-bold text-gray-800 text-center mb-8">Book Your Ride</h2>
        <form action="{{ route('tour-booking.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="relative">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <div class="flex items-center mt-1">
                    <i class="fas fa-user absolute ml-3 text-gray-400"></i>
                    <input type="text" name="name" id="name" class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            <div class="relative">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="flex items-center mt-1">
                    <i class="fas fa-envelope absolute ml-3 text-gray-400"></i>
                    <input type="email" name="email" id="email" class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            <div class="relative">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number (Whatsapp Number)</label>
                <div class="flex items-center mt-1">
                    <i class="fas fa-phone absolute ml-3 text-gray-400"></i>
                    <input type="text" name="phone" id="phone" class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            <div class="relative">
                <label for="tour_start" class="block text-sm font-medium text-gray-700">Tour Date Starts</label>
                <div class="flex items-center mt-1">
                    <i class="fas fa-calendar-alt absolute ml-3 text-gray-400"></i>
                    <input type="date" name="tour_start" id="tour_start" class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            <div class="relative">
                <label for="tour_end" class="block text-sm font-medium text-gray-700">Tour Date Ends</label>
                <div class="flex items-center mt-1">
                    <i class="fas fa-calendar-alt absolute ml-3 text-gray-400"></i>
                    <input type="date" name="tour_end" id="tour_end" class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            <div class="relative">
                <label for="number_of_people" class="block text-sm font-medium text-gray-700">Number of Person</label>
                <div class="flex items-center mt-1">
                    <i class="fas fa-users absolute ml-3 text-gray-400"></i>
                    <input type="number" name="number_of_people" id="number_of_people" class="pl-10 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            <div class="relative">
                <label for="special_requests" class="block text-sm font-medium text-gray-700">Special Requests</label>
                <textarea name="special_requests" id="special_requests" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-green-500 text-white px-10 py-4 rounded-lg shadow-md hover:bg-green-600 hover:shadow-xl transform hover:scale-105 transition duration-300 font-semibold text-lg">
                    <i class="fas fa-paper-plane mr-2"></i> Submit Booking
                </button>
            </div>
        </form>
    </div>
</section>

</body>
</html>