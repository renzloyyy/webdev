<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('navbar')

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold mb-6 text-center">Contact Me</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                <input type="text" id="name" placeholder="Enter your name" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" id="email" placeholder="Enter your email" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                <textarea id="message" rows="4" placeholder="Write your message here" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
