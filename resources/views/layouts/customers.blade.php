<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Our Customers | Hire.Ms</title>
    <link rel="icon"  href="../imagenes/favicon.svg" sizes="180x180" alt="favicon"  type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/css/atsHire-Ms.css', 'resources/js/app.js', 'resources/js/script.js'])
    @endif
  </head>
  <body class="antialiased bg-gray-50 text-gray-800">

    <!-- Header -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-gray-100 py-20">
      <div class="max-w-6xl mx-auto px-6 lg:px-12 grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
            Trusted by <span class="text-blue-600">185,000+ recruiters</span> worldwide
          </h1>
          <p class="mt-6 text-lg text-gray-700">
            Thousands of companies use <strong>Hire.Ms</strong> to attract, retain and hire the best talent.
            Discover why HR teams rely on us to grow smarter and faster.
          </p>
        </div>
        <div class="grid grid-cols-3 gap-4">
          <img src="/imagenes/logo_1.jpg" class="rounded-2xl shadow-md" alt="Customer 1">
          <img src="/imagenes/logo_2.jpg" class="rounded-2xl shadow-md" alt="Customer 2">
          <img src="/imagenes/logo_3.jpg" class="rounded-2xl shadow-md h-40" alt="Customer 3">
          <img src="/imagenes/logo_4.jpg" class="rounded-2xl shadow-md" alt="Customer 4">
          <img src="/imagenes/logo_5.jpg" class="rounded-2xl shadow-md" alt="Customer 5">
          <img src="/imagenes/logo_6.jpg" class="rounded-2xl shadow-md" alt="Customer 6">
        </div>
      </div>
    </section>

    <!-- Logos Section -->
    <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
        <p class="text-lg font-medium text-gray-700 mb-8">
          Loved by the most forward-thinking HR teams
        </p>
        <div class="flex flex-wrap justify-center gap-10 grayscale opacity-90">
          <img src="./imagenes/logo1.png" alt="Logo 1" class="h-20">
          <img src="./imagenes/logo2.png" alt="Logo 2" class="h-20">
          <img src="./imagenes/logo3.png" alt="Logo 3" class="h-20">
          <img src="./imagenes/logo4.png" alt="Logo 4" class="h-20">
          <img src="./imagenes/logo5.png" alt="Logo 5" class="h-20">
        </div>
      </div>
    </section>

    <!-- Case Studies -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 lg:px-12">
    <h2 class="text-3xl font-bold text-center text-gray-900">Customer Stories</h2>
    <p class="text-center text-gray-600 mt-3 mb-12">
      We’re proud to help companies all over the world scale and succeed with Hire.Ms.
    </p>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-full h-48 mb-4 overflow-hidden rounded-lg">
          <img src="/imagenes/story1.jpg" alt="Story 1" class="w-full h-full object-cover">
        </div>
        <h3 class="font-semibold text-lg">How Acme Corp boosts diversity</h3>
        <p class="text-gray-600 mt-2 text-sm">
          Acme Corp achieved recognition for fair and inclusive hiring practices by leveraging Hire.Ms.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-full h-48 mb-4 overflow-hidden rounded-lg">
          <img src="/imagenes/story2.jpg" alt="Story 2" class="w-full h-full object-cover">
        </div>
        <h3 class="font-semibold text-lg">Reducing turnover in retail</h3>
        <p class="text-gray-600 mt-2 text-sm">
          Thanks to Employer Branding powered by Hire.Ms, a leading retail brand achieved one of the lowest turnover rates.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-full h-48 mb-4 overflow-hidden rounded-lg">
          <img src="/imagenes/story3.jpg" alt="Story 3" class="w-full h-full object-cover">
        </div>
        <h3 class="font-semibold text-lg">Scaling recruitment globally</h3>
        <p class="text-gray-600 mt-2 text-sm">
          TRIGO Group elevated candidate experience and optimized recruitment across multiple countries.
        </p>
      </div>
    </div>
  </div>
</section>


    <!-- Metrics -->
    <section class="py-20 bg-gradient-to-r from-blue-50 to-gray-100">
      <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
        <div class="grid md:grid-cols-3 gap-12">
          <div>
            <p class="text-4xl font-bold text-blue-600">845,000+</p>
            <p class="text-gray-700 mt-2">Successful hires</p>
          </div>
          <div>
            <p class="text-4xl font-bold text-blue-600">185,000+</p>
            <p class="text-gray-700 mt-2">Recruiters using Hire.Ms</p>
          </div>
          <div>
            <p class="text-4xl font-bold text-blue-600">10,000+</p>
            <p class="text-gray-700 mt-2">Companies trust us</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center text-gray-900">What our customers say</h2>
        <p class="text-center text-gray-600 mt-3 mb-12">
          Hear directly from HR leaders using Hire.Ms to transform their recruitment process.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-gray-50 p-6 rounded-2xl shadow">
            <p class="text-gray-700 italic">"Hire.Ms has revolutionized how we attract and manage candidates, making recruitment faster and smarter."</p>
            <p class="mt-4 font-semibold text-gray-900">Nerea Salvador, ATREVIA</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-2xl shadow">
            <p class="text-gray-700 italic">"We reduced turnover and improved candidate experience significantly thanks to Hire.Ms."</p>
            <p class="mt-4 font-semibold text-gray-900">Marga Maldonado, Top Doctors</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-2xl shadow">
            <p class="text-gray-700 italic">"Hire.Ms integrates all our job portals seamlessly, saving us time and effort in recruitment."</p>
            <p class="mt-4 font-semibold text-gray-900">Ricardo Abalde, Five Guys</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

  </body>
</html>
