<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script> {{-- Include Tailwind CSS --}}
    <style>
        /* Smooth transition for mobile menu */
        .mobile-menu {
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .mobile-menu.open {
            max-height: 500px;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="#" class="text-2xl font-bold">MyLogo</a>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="{{route('home')}}" class="hover:text-gray-400 transition duration-300">Home</a>
                    <a href="#" class="hover:text-gray-400 transition duration-300">About</a>
                    <a href="{{route('services')}}" class="hover:text-gray-400 transition duration-300">Services</a>
                    <a href="{{route('contact')}}" class="hover:text-gray-400 transition duration-300">Contact</a>
                    <a href="{{ route('personal') }}" class="hover:text-gray-400 transition duration-300">Personal Profile</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Links -->
        <div id="mobile-menu" class="mobile-menu bg-gray-800 text-white px-4 py-2 md:hidden flex flex-col space-y-2">
            <a href="{{route('home')}}" class="py-2 border-b border-gray-600 hover:text-gray-400 transition duration-300">Home</a>
            <a href="#" class="py-2 border-b border-gray-600 hover:text-gray-400 transition duration-300">About</a>
            <a href="{{route('services')}}" class="py-2 border-b border-gray-600 hover:text-gray-400 transition duration-300">Services</a>
            <a href="{{route('contact')}}" class="py-2 hover:text-gray-400 transition duration-300">Contact</a>
             <a href="{{ route('personal') }}" class="hover:text-gray-400 transition duration-300">Personal</a>
        </div>
    </nav>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            let menu = document.getElementById('mobile-menu');
            menu.classList.toggle('open');
        });
    </script>

</body>
</html>
