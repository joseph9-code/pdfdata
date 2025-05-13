<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-white">

    <!-- Hero Section -->
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('background.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <!-- Navbar -->
        <div class="relative z-10 px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Study Material</h1>
            <nav class="space-x-4 font-semibold hidden md:flex">
                <a href="#" class="hover:text-green-400">About</a>
                <a href="#" class="hover:text-green-400">Skills</a>
                <a href="#" class="hover:text-green-400">Services</a>
                <a href="#" class="hover:text-green-400">Gallery</a>
                <a href="#" class="hover:text-green-400">The Team</a>
                <a href="#" class="hover:text-green-400">Pricing</a>
                <a href="#" class="hover:text-green-400">Contact</a>
            </nav>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
            <p class="text-sm tracking-widest uppercase text-green-400 mb-2">Introducing Study Material</p>
            <h2 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">
                The Template for All <br class="hidden md:block">Kinds of Business
            </h2>
            <p class="max-w-xl text-gray-200 mb-8">
             This was designed especially for agency, marketing, landing page, portfolio, creative, startup, and corporate.
            </p>
            <a href="#" class="bg-green-500 hover:bg-green-600 px-6 py-3 text-white font-bold rounded-md transition">
                Explore Now
            </a>
        </div>
    </div>

</body>
</html>
