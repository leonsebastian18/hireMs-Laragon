<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ATS for SMEs | Hire.Ms</title>

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
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-6">ATS for SMEs</h2>
      <p class="text-lg mb-8">Empower your small or medium business with an ATS designed to simplify recruitment, save time, and attract the right talent without breaking the budget.</p>
      <a href="contact" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">See How It Works</a>
    </div>
  </section>

  <!-- SME Features -->
  <section id="sme-features" class="max-w-7xl mx-auto py-16 px-6">
    <h3 class="text-3xl font-bold text-center mb-12">Built for Small & Medium Businesses</h3>
    <div class="grid md:grid-cols-3 gap-10 text-center">
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Affordable & Scalable</h4>
        <p>Get all the essential recruitment tools you need at a cost tailored to growing businesses, with room to scale as you expand.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Easy to Use</h4>
        <p>No complex setups—our intuitive design helps your team start hiring in minutes, not weeks.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Faster Hiring</h4>
        <p>Automate repetitive tasks like job postings, resume screening, and interview scheduling to focus on what matters most: finding the right people.</p>
      </div>
    </div>
  </section>

  <!-- Success Stories -->
  <section class="bg-gray-100 py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-6">Success Stories from SMEs</h3>
      <p class="mb-12">Discover how small and medium businesses streamline hiring with our ATS and achieve real growth.</p>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow text-left">
          <h4 class="text-xl font-semibold text-blue-500 mb-2">Local Retailer</h4>
          <p class="text-gray-600 mb-4">Cut hiring time by 50% while improving the quality of candidates for seasonal roles.</p>
          <a href="customers" class="text-blue-500 font-semibold hover:underline">Read More →</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-left">
          <h4 class="text-xl font-semibold text-blue-500 mb-2">Tech Startup</h4>
          <p class="text-gray-600 mb-4">Scaled from 10 to 100 employees in under a year with seamless ATS support.</p>
          <a href="customers" class="text-blue-500 font-semibold hover:underline">Read More →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 text-center bg-blue-500 text-white">
    <h3 class="text-3xl font-bold mb-6">Grow Your Business with Smart Hiring</h3>
    <p class="mb-8">Simplify recruitment, save time, and attract top talent with our ATS for SMEs.</p>
    <a href="contact" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Start Free Trial</a>
  </section>

  <!-- Footer -->
  @include('layouts.footer')

</body>
</html>
