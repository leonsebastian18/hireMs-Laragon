<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Help Center | Hire.Ms</title>
    <link rel="icon"  href="../imagenes/favicon.svg" sizes="180x180" alt="favicon"  type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
      rel="stylesheet"
    />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/css/atsHire-Ms.css', 'resources/js/app.js', 'resources/js/help.js'])
    @endif

  </head>
  <body class="antialiased bg-gray-50 text-gray-800">

    <!-- Header -->
    @include('layouts.navbar')


    <!-- Hero -->
<section class="bg-gradient-to-r from-blue-50 to-gray-100 py-20">
  <div class="text-center mt-16">
    <h1 class="text-4xl font-bold text-gray-900 mb-2">Help Center</h1>
    <p class="text-gray-600 mb-6">
      Find answers, guides, and resources to make the most of <strong>Hire.Ms.</strong>
    </p>

    <form id="searchForm" class="mt-8 max-w-xl mx-auto">
      <div class="flex items-center w-full bg-white rounded-full shadow-lg border border-blue-200 overflow-hidden">

        <!-- Contenedor input + spinner -->
        <div class="relative flex items-center flex-1">
          <input
            id="searchInput"
            type="text"
            placeholder="Search articles, FAQs, and guides..."
            class="w-full px-5 py-3 text-gray-700 focus:outline-none border-none rounded-l-full"
          />

          <!-- Spinner -->
          <div
            id="spinner"
            class="hidden absolute right-4 w-5 h-5 border-2 border-blue-500 border-t-transparent rounded-full animate-spin"
          ></div>
        </div>

        <!-- Botón -->
        <button
          type="submit"
          class="px-6 py-3 bg-blue-600 text-white font-medium hover:bg-blue-700 transition rounded-r-full"
        >
          Search
        </button>
      </div>
    </form>
  </div>
</section>

    <!-- Categories -->
    <section class="py-20">
      <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center text-gray-900">Browse by Category</h2>

        <div id="categoriesGrid" class="mt-12 grid md:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Example Category -->
          <div class="category bg-white rounded-2xl p-8 shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl font-semibold text-gray-900">Getting Started</h3>
            <p class="mt-2 text-gray-600 text-sm">Learn the basics and set up your account.</p>
            <ul class="mt-4 space-y-2 text-blue-600 text-sm">
              <li><a href="#">Creating your first job posting →</a></li>
              <li><a href="#">Setting up your company profile →</a></li>
              <li><a href="#">Inviting team members →</a></li>
            </ul>
          </div>

          <div class="category bg-white rounded-2xl p-8 shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl font-semibold text-gray-900">Candidate Management</h3>
            <p class="mt-2 text-gray-600 text-sm">Track, review, and hire candidates efficiently.</p>
            <ul class="mt-4 space-y-2 text-blue-600 text-sm">
              <li><a href="#">Managing the pipeline →</a></li>
              <li><a href="#">Collaborating with recruiters →</a></li>
              <li><a href="#">Interview scheduling →</a></li>
            </ul>
          </div>

          <div class="category bg-white rounded-2xl p-8 shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl font-semibold text-gray-900">Employer Branding</h3>
            <p class="mt-2 text-gray-600 text-sm">Showcase your culture and attract top talent.</p>
            <ul class="mt-4 space-y-2 text-blue-600 text-sm">
              <li><a href="#">Customizing your career page →</a></li>
              <li><a href="#">Highlighting employee stories →</a></li>
              <li><a href="#">Optimizing job descriptions →</a></li>
            </ul>
          </div>

          <div class="category bg-white rounded-2xl p-8 shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl font-semibold text-gray-900">Integrations</h3>
            <p class="mt-2 text-gray-600 text-sm">Connect Hire.Ms with your favorite tools.</p>
            <ul class="mt-4 space-y-2 text-blue-600 text-sm">
              <li><a href="#">Job board integrations →</a></li>
              <li><a href="https://slack.com/intl/es-co" target="_blank" rel="noopener noreferrer">Slack & Teams setup →</a></li>
              <li><a href="#">Analytics tools →</a></li>
            </ul>
          </div>

          <div class="category bg-white rounded-2xl p-8 shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl font-semibold text-gray-900">Billing & Subscriptions</h3>
            <p class="mt-2 text-gray-600 text-sm">Manage your plan, billing, and payments.</p>
            <ul class="mt-4 space-y-2 text-blue-600 text-sm">
              <li><a href="price">Upgrading plans →</a></li>
              <li><a href="contact">Payment methods →</a></li>
              <li><a href="contact">Invoices & receipts →</a></li>
            </ul>
          </div>

          <div class="category bg-white rounded-2xl p-8 shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <h3 class="text-xl font-semibold text-gray-900">Safety & Security</h3>
            <p class="mt-2 text-gray-600 text-sm">Learn how we keep your data safe.</p>
            <ul class="mt-4 space-y-2 text-blue-600 text-sm">
              <li><a href={{route('safety_security')}}>Privacy controls →</a></li>
              <li><a href={{route('safety_security')}}>Two-factor authentication →</a></li>
              <li><a href={{route('safety_security')}}>GDPR compliance →</a></li>
            </ul>
          </div>

        </div>

        <p id="noResults" class="text-center text-gray-500 mt-12 hidden">No results found.</p>
      </div>
    </section>

    <!-- Contact Support -->
    <section class="py-20 bg-gradient-to-r from-blue-50 to-gray-100">
      <div class="max-w-3xl mx-auto text-center px-6">
        <h2 class="text-3xl font-bold text-gray-900">Need more help?</h2>
        <p class="mt-4 text-gray-700">Our support team is available 24/7 to assist you with any issues or questions.</p>
        <a href="{{ url('contact') }}"
           class="mt-8 inline-block bg-blue-600 text-white font-medium px-6 py-3 rounded-xl hover:bg-blue-700 transition">
           Contact Support
        </a>
      </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')
