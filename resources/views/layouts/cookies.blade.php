<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cookie Policy | Hire.Ms</title>

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

        <!-- Main content -->
        <main class="max-w-4xl mx-auto px-6 py-12">
            <h1 class="text-4xl font-semibold mb-6 text-gray-900">Cookie Policy</h1>

            <p class="mb-6">
                At <strong>Hire.Ms</strong>, we use cookies and similar technologies to enhance your browsing experience,
                analyze traffic, and personalize content. This Cookie Policy explains what cookies are, how we use them,
                and the choices you have regarding their use.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">1. What are cookies?</h2>
            <p class="mb-6">
                Cookies are small text files that are stored on your device when you visit a website. They help websites
                recognize your device and remember information about your preferences or past actions.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">2. How we use cookies</h2>
            <ul class="list-disc list-inside mb-6 space-y-2">
                <li><strong>Essential cookies:</strong> Required for the operation of our website and ATS platform.</li>
                <li><strong>Performance cookies:</strong> Help us understand how users interact with Hire.Ms and improve functionality.</li>
                <li><strong>Functional cookies:</strong> Remember your preferences and settings.</li>
                <li><strong>Advertising cookies:</strong> May be used to deliver relevant ads and measure campaign effectiveness.</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">3. Third-party cookies</h2>
            <p class="mb-6">
                We may allow trusted partners to place cookies on our website to provide analytics and personalized services.
                These third parties may collect information about your online activities across different websites.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">4. Your choices</h2>
            <p class="mb-6">
                You can manage or disable cookies through your browser settings. Please note that disabling certain cookies
                may affect the functionality of Hire.Ms.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">5. Updates to this policy</h2>
            <p class="mb-6">
                We may update this Cookie Policy from time to time. Any changes will be posted on this page with an updated
                revision date.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">6. Contact us</h2>
            <p class="mb-6">
                If you have any questions about our use of cookies, please contact us at:
                <a href="mailto:support@hire.ms" class="text-blue-600 underline">support@hire.ms</a>.
            </p>
        </main>

        <!-- Footer -->
        @include('layouts.footer')

    </body>
</html>
