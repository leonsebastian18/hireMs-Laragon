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
  <section class="bg-blue-500 text-white py-20">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-6">Join Our Team</h2>
      <p class="text-lg mb-8">At Company, we believe that people are the heart of innovation. Explore opportunities to grow your career and make a meaningful impact.</p>
      <a href="#jobs" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">View Open Positions</a>
    </div>
  </section>

  <!-- Culture & Values -->
  <section class="max-w-7xl mx-auto py-16 px-6">
    <h3 class="text-3xl font-bold text-center mb-12">Our Culture & Values</h3>
    <div class="grid md:grid-cols-3 gap-10 text-center">
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Innovation</h4>
        <p>We foster creativity and forward-thinking ideas that push boundaries and inspire change.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Collaboration</h4>
        <p>Teamwork is at the core of our success. We grow stronger together by sharing knowledge and skills.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Growth</h4>
        <p>We are committed to professional and personal development, offering resources to help you succeed.</p>
      </div>
    </div>
  </section>

  <!-- Job Listings -->
  <section id="jobs" class="bg-gray-100 py-16 px-6">
    <div class="max-w-7xl mx-auto">
      <h3 class="text-3xl font-bold text-center mb-12">Current Opportunities</h3>
      <div class="grid md:grid-cols-2 gap-8">

        <!-- Job 1 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-2">Frontend Developer</h4>
          <p class="text-gray-600 mb-4">We are looking for a creative developer with experience in React and Tailwind CSS.</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Apply Now →</a>
        </div>

        <!-- Job 2 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-2">Project Manager</h4>
          <p class="text-gray-600 mb-4">Join our team to lead projects, coordinate resources, and deliver impactful results.</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Apply Now →</a>
        </div>

        <!-- Job 3 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-2">Data Analyst</h4>
          <p class="text-gray-600 mb-4">Help us turn data into insights and support decision-making processes.</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Apply Now →</a>
        </div>

        <!-- Job 4 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
          <h4 class="text-xl font-semibold mb-2">Marketing Specialist</h4>
          <p class="text-gray-600 mb-4">Drive brand awareness and lead campaigns that reach audiences worldwide.</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Apply Now →</a>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 text-center bg-blue-500 text-white">
    <h3 class="text-3xl font-bold mb-6">Your Career Starts Here</h3>
    <p class="mb-8">Discover opportunities to challenge yourself, grow professionally, and build the future with us.</p>
    <a href="#jobs" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Explore Careers</a>
  </section>

  <!-- Footer -->
   @include('layouts.footer')

</body>
</html>
