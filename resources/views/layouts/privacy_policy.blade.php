<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Privacy Policy | Hire.Ms</title>
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

        <!-- Main content -->
        <main class="max-w-4xl mx-auto px-6 py-12">
            <h1 class="text-4xl font-semibold mb-6 text-gray-900">Privacy Policy</h1>

            <p class="mb-6">
                At <strong>Hire.Ms</strong>, your privacy is very important to us.
                This Privacy Policy explains how we collect, use, disclose, and safeguard your information
                when you use our applicant tracking system (ATS) and related services.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">1. Information we collect</h2>
            <p class="mb-6">
                We may collect personal information such as your name, email address, phone number, job application details,
                and any other data you provide while using our platform. Additionally, we collect technical information like IP addresses,
                browser type, and usage data for analytics and security purposes.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">2. How we use your information</h2>
            <ul class="list-disc list-inside mb-6 space-y-2">
                <li>To operate and maintain our ATS platform.</li>
                <li>To process job applications and facilitate recruitment activities.</li>
                <li>To improve our services and user experience.</li>
                <li>To comply with legal obligations and ensure security.</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">3. How we share your information</h2>
            <p class="mb-6">
                We do not sell your personal data. However, we may share information with trusted third-party service providers
                (e.g., hosting providers, analytics tools) only for the purposes described in this policy.
                We may also disclose information if required by law or to protect our legal rights.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">4. Data retention</h2>
            <p class="mb-6">
                We retain your personal information only as long as necessary to fulfill the purposes outlined in this policy,
                unless a longer retention period is required by law.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">5. Your rights</h2>
            <p class="mb-6">
                Depending on your location, you may have the right to access, correct, update, or request deletion of your personal data.
                You may also object to certain processing activities or request data portability.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">6. Security of your information</h2>
            <p class="mb-6">
                We implement appropriate technical and organizational measures to protect your information against unauthorized access,
                disclosure, alteration, or destruction. However, please note that no method of transmission over the internet is 100% secure.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">7. International data transfers</h2>
            <p class="mb-6">
                If you are accessing Hire.Ms from outside our operating country, your information may be transferred to and processed in countries
                with data protection laws that differ from those in your jurisdiction.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">8. Updates to this Privacy Policy</h2>
            <p class="mb-6">
                We may update this Privacy Policy from time to time. Any modifications will be posted on this page, with the "Last updated" date revised accordingly.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">9. Contact us</h2>
            <p class="mb-6">
                If you have any questions about this Privacy Policy or how we handle your data,
                please contact us at:
                <a href="mailto:support@hire.ms" class="text-blue-600 underline">support@hire.ms</a>.
            </p>
        </main>

        <!-- Footer -->
        @include('layouts.footer')

    </body>
</html>
