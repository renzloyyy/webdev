<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renzloyyy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navbar')
    <div class="max-w-5xl mx-auto mt-12">
        <div class="bg-white shadow-2xl rounded-2xl p-12">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="w-full text-center md:text-left">
                    <h1 class="text-5xl font-bold mb-4">Welcome to Renzloyyy's Website</h1>
                    <p class="text-lg text-gray-700">Your gateway to amazing experiences.</p>
                    <a href="{{ route('services') }}" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">Explore Services</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-5xl mx-auto mt-12">
        <div class="bg-white shadow-2xl rounded-2xl p-12">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="w-full text-center md:text-left">
                    <h2 class="text-3xl font-bold mb-4">About Me</h2>
                    <p class="text-lg text-gray-700">Ang pogi pogi ko</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center py-4 mt-12 bg-gray-200 text-gray-700">
        <p>&copy; 2025 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>