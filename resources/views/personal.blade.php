
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navbar')
    <div class="max-w-5xl mx-auto mt-12">
        <div class="bg-white shadow-2xl rounded-2xl p-12">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <!-- Profile Image -->
                <div class="w-1/3 flex justify-center">
                    <img src="{{ asset('pikot.jpeg') }}" class="w-56 h-56 rounded-full object-cover" alt="Profile Picture">
                </div>
                <!-- Profile Info -->
                <div class="w-2/3">
                    <h1 class="text-4xl font-bold mb-4">Renz Louie Besande</h1>
                    <p class="text-lg"><strong class="font-semibold">Location:</strong> Tampoong, Sogod, Southern Leyte</p>
                    <p class="text-lg"><strong class="font-semibold">Field of Study:</strong> BS Information Technology 3D</p>
                    <p class="text-lg"><strong class="font-semibold">Career Goal:</strong> Software Developer</p>
                    <p class="text-lg"><strong class="font-semibold">Skills:</strong></p>
                    <ul class="list-disc pl-8 text-lg">
                        <li>Programming (C#, C, Java, PHP)</li>
                        <li>Databases (MySQL Workbench)</li>
                    </ul>
                    <p class="text-lg"><strong class="font-semibold">Hobbies:</strong> Playing guitar, singing, online gaming, listening to music, exercising</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
