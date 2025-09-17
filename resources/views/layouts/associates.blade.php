<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associates | Company</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
    @include('layouts.navbar')

  <!-- Hero Section -->
  <section class="bg-blue-500 text-white py-20">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-6">Our Associates</h2>
      <p class="text-lg mb-8">Building stronger connections with trusted partners who share our vision for excellence, innovation, and growth.</p>
      <a href="#join" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Become an Associate</a>
    </div>
  </section>

  <!-- Associates Benefits -->
  <section class="max-w-7xl mx-auto py-16 px-6">
    <h3 class="text-3xl font-bold text-center mb-12">Why Partner With Us?</h3>
    <div class="grid md:grid-cols-3 gap-10 text-center">
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-600">Global Network</h4>
        <p>Access a wide network of professionals, organizations, and opportunities worldwide.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-600">Shared Resources</h4>
        <p>Collaborate and leverage shared resources, tools, and knowledge to maximize success.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg transition">
        <h4 class="text-xl font-semibold mb-4 text-blue-600">Long-Term Growth</h4>
        <p>Build meaningful relationships that ensure sustainability and long-term growth.</p>
      </div>
    </div>
  </section>

  <!-- Featured Associates -->
  <section class="bg-gray-100 py-16 px-6">
    <div class="max-w-7xl mx-auto">
      <h3 class="text-3xl font-bold text-center mb-12">Meet Some of Our Associates</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://via.placeholder.com/150" alt="Associate 1" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h4 class="text-xl font-semibold">Associate One</h4>
          <p class="text-sm text-gray-600">Technology Partner</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://via.placeholder.com/150" alt="Associate 2" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h4 class="text-xl font-semibold">Associate Two</h4>
          <p class="text-sm text-gray-600">Logistics Partner</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://via.placeholder.com/150" alt="Associate 3" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h4 class="text-xl font-semibold">Associate Three</h4>
          <p class="text-sm text-gray-600">Consulting Partner</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Join CTA -->
  <section id="join" class="py-20 text-center bg-blue-500 text-white">
    <h3 class="text-3xl font-bold mb-6">Join Our Associate Program</h3>
    <p class="mb-8">Collaborate with us to create opportunities, drive growth, and make a lasting impact.</p>
    <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Apply Now</a>
  </section>

  <!-- Footer -->
  @include('layouts.footer')

</body>
</html>
