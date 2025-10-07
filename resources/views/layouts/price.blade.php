<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pricing | Hire.Ms</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/css/atsHire-Ms.css', 'resources/js/app.js', 'resources/js/price.js'])
    @endif
  </head>
  <body class="antialiased bg-gray-50 text-gray-800">

    <!-- Header -->
    @include('layouts.navbar')

    <!-- Hero -->
    <section class="bg-gradient-to-r from-blue-50 to-gray-100 py-20">
      <div class="max-w-5xl mx-auto text-center px-6">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900">
          Simple, Transparent Pricing
        </h1>
        <p class="mt-4 text-lg text-gray-700">
          Choose the right plan for your business. Scale your recruitment with Hire.Ms.
        </p>
      </div>
    </section>

    <!-- Pricing Plans -->
    <section class="py-20">
      <div class="max-w-6xl mx-auto px-6 lg:px-12 grid md:grid-cols-3 gap-8">

        <!-- Starter Plan -->
        <div class="bg-white rounded-2xl shadow-md p-8 border hover:shadow-lg transition">
          <h2 class="text-2xl font-bold text-gray-900">Starter</h2>
          <p class="mt-2 text-gray-600">Perfect for small businesses starting with recruitment</p>
          <p class="mt-6 text-4xl font-bold text-blue-600">$49<span class="text-lg font-medium text-gray-600">/mo</span></p>
          <ul class="mt-6 space-y-3 text-gray-700">
            <li>✔️ 1 Job posting</li>
            <li>✔️ Basic candidate management</li>
            <li>✔️ Email support</li>
          </ul>
        <a href="contact"
            class="plan-button block mt-8 text-center bg-blue-600 text-white font-medium rounded-xl py-3 hover:bg-blue-700 transition"
            data-plan="Starter">
                Get Started
        </a>
        </div>

        <!-- Professional Plan -->
        <div class="bg-white rounded-2xl shadow-lg border-2 border-blue-600 p-8 relative">
          <span class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded-full">
            Most Popular
          </span>
          <h2 class="text-2xl font-bold text-gray-900">Professional</h2>
          <p class="mt-2 text-gray-600">Best for growing teams that need flexibility</p>
          <p class="mt-6 text-4xl font-bold text-blue-600">$149<span class="text-lg font-medium text-gray-600">/mo</span></p>
          <ul class="mt-6 space-y-3 text-gray-700">
            <li>✔️ Up to 10 job postings</li>
            <li>✔️ Advanced candidate management</li>
            <li>✔️ Employer branding tools</li>
            <li>✔️ Priority email & chat support</li>
          </ul>
        <a href="contact"
            class="plan-button block mt-8 text-center bg-blue-600 text-white font-medium rounded-xl py-3 hover:bg-blue-700 transition"
                data-plan="Professional">
                Choose Professional
        </a>
        </div>

        <!-- Enterprise Plan -->
        <div class="bg-white rounded-2xl shadow-md p-8 border hover:shadow-lg transition">
          <h2 class="text-2xl font-bold text-gray-900">Enterprise</h2>
          <p class="mt-2 text-gray-600">Custom solutions for large organizations</p>
          <p class="mt-6 text-4xl font-bold text-blue-600">Custom<span class="text-lg font-medium text-gray-600"> pricing</span></p>
          <ul class="mt-6 space-y-3 text-gray-700">
            <li>✔️ Unlimited job postings</li>
            <li>✔️ Dedicated account manager</li>
            <li>✔️ Advanced analytics & reporting</li>
            <li>✔️ API & integrations</li>
            <li>✔️ 24/7 premium support</li>
          </ul>
          <a href="contact"
            class="plan-button block mt-8 text-center bg-gray-900 text-white font-medium rounded-xl py-3 hover:bg-gray-800 transition"
            data-plan="Enterprise">
            Contact Sales
            </a>
        </div>

      </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-900">Frequently Asked Questions</h2>
        <div class="mt-12 space-y-8">
          <div>
            <h3 class="font-semibold text-gray-900">Can I switch plans later?</h3>
            <p class="text-gray-700 mt-2">Yes, you can upgrade or downgrade your plan anytime from your account settings.</p>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900">Do you offer a free trial?</h3>
            <p class="text-gray-700 mt-2">Absolutely! You can try Hire.Ms free for 14 days with no credit card required.</p>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900">Is there a discount for annual billing?</h3>
            <p class="text-gray-700 mt-2">Yes, we offer up to 20% discount if you choose yearly billing.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

<!-- Forzar compilación de clases dinámicas de Tailwind -->

  </body>
</html>
