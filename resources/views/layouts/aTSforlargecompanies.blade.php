<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ATS for Large Companies | Hire.Ms</title>

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
      <h2 class="text-4xl font-bold mb-6">ATS for Large Companies</h2>
      <p class="text-lg mb-8">Scale your hiring with confidence. Our enterprise-ready ATS is built to support high-volume recruitment, global teams, and complex workflows without compromising speed or efficiency.</p>
      <a href="contact" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Discover Enterprise Features</a>
    </div>
  </section>

  <!-- Enterprise Features -->
  <section id="enterprise-features" class="max-w-7xl mx-auto py-16 px-6">
    <h3 class="text-3xl font-bold text-center mb-12">Designed for Enterprise Needs</h3>
    <div class="grid md:grid-cols-3 gap-10 text-center">
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">High-Volume Hiring</h4>
        <p>Efficiently manage thousands of applicants with bulk actions, smart filters, and automated screening tools.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Global Collaboration</h4>
        <p>Enable recruiters and managers across regions to work together seamlessly with multi-language and multi-location support.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-500">Advanced Compliance</h4>
        <p>Stay compliant with data protection regulations and industry standards, including GDPR and EEOC reporting.</p>
      </div>
    </div>
  </section>

  <!-- Integrations Section -->
  <section class="bg-gray-100 py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-6">Seamless Integrations</h3>
      <p class="mb-12">Connect your ATS with HRIS, payroll, background checks, and collaboration tools to keep everything in sync.</p>
      <div class="grid md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">HRIS Systems</div>
        <div class="bg-white p-6 rounded-lg shadow">Video Interviews</div>
        <div class="bg-white p-6 rounded-lg shadow">Background Checks</div>
        <div class="bg-white p-6 rounded-lg shadow">Analytics Platforms</div>
      </div>
    </div>
  </section>

  <!-- Case Study Section -->
  <section class="max-w-7xl mx-auto py-16 px-6">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div>
        <h3 class="text-3xl font-bold mb-6">Proven Results for Large Teams</h3>
        <p class="mb-6">Global enterprises trust our ATS to reduce time-to-hire, increase recruiter productivity, and deliver an outstanding candidate experience across multiple regions.</p>
        <a href="customers" class="text-blue-500 font-semibold hover:underline">Read Case Studies →</a>
      </div>
      <div class="bg-white rounded-lg shadow p-8 text-center">
        <h4 class="text-2xl font-bold text-blue-500 mb-4">40% Faster Hiring</h4>
        <p class="text-gray-600">Companies reduced hiring time by nearly half while managing 10,000+ applications per month.</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 text-center bg-blue-500 text-white">
    <h3 class="text-3xl font-bold mb-6">Scale Recruitment with Confidence</h3>
    <p class="mb-8">Empower your enterprise with an ATS built for global hiring and long-term success.</p>
    <a href="contact" class="bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Request Enterprise Demo</a>
  </section>

  <!-- Footer -->
  @include('layouts.footer')

</body>
</html>
