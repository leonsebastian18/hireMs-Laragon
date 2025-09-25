<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Applicant Tracking System | Hire.Ms</title>

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
      <h2 class="text-4xl font-bold mb-6">Applicant Tracking System</h2>
      <p class="text-lg mb-8">Simplify your hiring process with an all-in-one ATS designed to streamline recruitment, manage candidates, and improve collaboration.</p>
      <a href="contact" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Explore Features</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="max-w-7xl mx-auto py-16 px-6">
    <h3 class="text-3xl font-bold text-center mb-12">Why Choose Our ATS?</h3>
    <div class="grid md:grid-cols-3 gap-10 text-center">
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Centralized Dashboard</h4>
        <p>Manage all applications, job postings, and candidate stages from a single intuitive interface.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Automated Workflows</h4>
        <p>Save time with automated candidate tracking, email templates, and interview scheduling tools.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Analytics & Insights</h4>
        <p>Track hiring performance, identify bottlenecks, and make data-driven recruitment decisions.</p>
      </div>
    </div>
  </section>

  <!-- Demo Section -->
  <section class="bg-gray-100 py-16 px-6">
    <div class="max-w-7xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-6">Experience the Power of ATS</h3>
      <p class="mb-8">From posting a job to making a hire, streamline the journey with a platform that adapts to your needs.</p>
      <a href="contact" class="bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-blue-600">Request a Demo</a>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 text-center bg-blue-500 text-white">
    <h3 class="text-3xl font-bold mb-6">Transform Your Hiring Today</h3>
    <p class="mb-8">Simplify recruitment, improve collaboration, and hire top talent faster with our ATS solution.</p>
    <a href="contact" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Get Started</a>
  </section>

  <!-- Footer -->
  @include('layouts.footer')

</body>
</html>
