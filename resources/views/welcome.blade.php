<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
 @livewireStyles 
</head>
<body class="text-white">

  <!-- Hero Section (Top Half with Background Image) -->
  <div
    class="relative h-[80vh] bg-cover bg-center"
    style="background-image: url('{{ asset('images/fordV8.jpg') }}');"
  >
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- Navbar -->
    <div class="relative z-10 px-6 py-4 flex justify-between items-center">
      <h1 class="text-3xl font-bold">Welcome</h1>
      <nav class="space-x-4 font-semibold hidden md:flex">
        <a href="#" class="hover:text-green-400">About</a>
        <a href="#" class="hover:text-green-400">Skills</a>
        <a href="#" class="hover:text-green-400">Services</a>
        <a href="#" class="hover:text-green-400">Gallery</a>
        <a href="#" class="hover:text-green-400">Pricing</a>
        <a href="#" class="hover:text-green-400">Contact</a>
      </nav>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
      <p class="text-sm tracking-widest uppercase text-green-400 mb-2">
        Introducing Study Material
      </p>
      <h2 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">
        A place where you find <br class="hidden md:block" />
        the best study material
      </h2>
      <p class="max-w-xl text-gray-200 mb-8">
        This was designed especially for agency, marketing, landing page,
        portfolio, creative, startup, and corporate.
      </p>
      <a
        href="#"
        class="bg-green-500 hover:bg-green-600 px-6 py-3 text-white font-bold rounded-md transition"
      >
        Explore Now
      </a>
    </div>
  </div>

  <!-- Main Content Section (Bottom Half - Scrollable Content) -->
  <div class="bg-gray-900 text-white pt-32 pb-16 px-6">
    <!-- Three Cards -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-16 -mt-28">

      <!-- Card 1 -->
      <a
        href="{{ route('pdf-download.page') }}"
        class="block bg-white text-gray-900 rounded-2xl shadow-lg p-6 hover:shadow-xl transition"
      >
        <h4 class="text-xl font-semibold mb-2">General Knowledge</h4>
        <p class="text-gray-600">
            Access a wide range of study materials, including notes, guides,
            and more.
        </p>
      </a>

      <!-- Card 2 -->
      <a
        href="/videos"
        class="block bg-white text-gray-900 rounded-2xl shadow-lg p-6 hover:shadow-xl transition"
      >
        <h4 class="text-xl font-semibold mb-2">MPSC</h4>
        <p class="text-gray-600">
          Watch expert-led tutorials and explanation videos for deeper learning.
        </p>
      </a>

      

      <!-- Card 3 -->
      <a
        href="/quizzes"
        class="block bg-white text-gray-900 rounded-2xl shadow-lg p-6 hover:shadow-xl transition"
      >
        <h4 class="text-xl font-semibold mb-2">UPSC</h4>
        <p class="text-gray-600">
          Test your knowledge with interactive quizzes and instant feedback.
        </p>
      </a>
       <a
        href="/quizzes"
        class="block bg-white text-gray-900 rounded-2xl shadow-lg p-6 hover:shadow-xl transition"
      >
        <h4 class="text-xl font-semibold mb-2">SSC</h4>
        <p class="text-gray-600">
          Test your knowledge with interactive quizzes and instant feedback.
        </p>
      </a>
    </div>

    <!-- Why Choose Us -->
    <section class="max-w-4xl mx-auto mb-10">
      <h3 class="text-3xl font-bold mb-4">Why Choose Us</h3>
      <p class="text-gray-300">
        We offer top-quality curated study material tailored to your academic
        or professional needs. Whether you're preparing for an exam or just
        want to learn something new, we've got you covered.
      </p>
    </section>

    <!-- Features -->
    <section class="max-w-4xl mx-auto mb-10">
      <h3 class="text-3xl font-bold mb-4">Features</h3>
      <ul class="list-disc list-inside text-gray-300 space-y-2">
        <li>Downloadable PDFs</li>
        <li>Mobile-friendly interface</li>
        <li>Admin upload dashboard</li>
        <li>Categorized study material</li>
      </ul>
    </section>

    <!-- Testimonials -->
    <section class="max-w-4xl mx-auto mb-10">
      <h3 class="text-3xl font-bold mb-4">Testimonials</h3>
      <p class="text-gray-300">
        "The best platform for exam prep! I found everything I needed in one
        place."
      </p>
    </section>

    <!-- Footer -->
    <footer class="pt-16 border-t border-gray-700 text-center text-gray-500">
      &copy; 2025 Study Material. All rights reserved.
    </footer>
  </div>
  @livewireScripts
</body>
</html>
