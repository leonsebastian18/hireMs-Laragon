<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Safety & Security | Hire.Ms</title>
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
            <h1 class="text-4xl font-semibold mb-6 text-gray-900">Safety & Security</h1>

            <p class="mb-6">
                At <strong>Hire.Ms</strong>, we take the safety and security of our users and their data very seriously.
                This page outlines the measures we take to protect your information and ensure that our Applicant Tracking System (ATS)
                is a safe environment for employers and candidates.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">1. Data protection</h2>
            <p class="mb-6">
                All personal and professional data stored in Hire.Ms is protected using industry-standard encryption both in transit and at rest.
                We comply with applicable data protection regulations to safeguard your information.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">2. Secure access</h2>
            <p class="mb-6">
                Our platform uses secure authentication mechanisms, including encrypted login credentials and session management,
                to prevent unauthorized access. Users are encouraged to use strong passwords and enable two-factor authentication when available.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">3. Platform monitoring</h2>
            <p class="mb-6">
                Hire.Ms continuously monitors system activity to detect unusual behavior, unauthorized access attempts, and potential threats.
                Regular security audits and vulnerability testing are performed to maintain a secure environment.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">4. User responsibility</h2>
            <p class="mb-6">
                While we provide robust security measures, users also play a role in maintaining safety.
                This includes protecting login credentials, using secure networks when accessing the platform,
                and reporting any suspicious activity immediately.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">5. Incident response</h2>
            <p class="mb-6">
                In the event of a security incident, we have protocols in place to investigate, contain, and remediate the issue.
                Users will be notified promptly if their data is affected, in compliance with applicable legal requirements.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">6. Continuous improvement</h2>
            <p class="mb-6">
                Security is an ongoing commitment. We regularly update our systems, apply patches, and adopt best practices
                to stay ahead of emerging threats and provide a safe platform for our users.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">7. Contact us</h2>
            <p class="mb-6">
                If you have questions or concerns about safety and security at Hire.Ms, please contact our security team at:
                <a href="mailto:support@hire.ms" class="text-blue-600 underline">support@hire.ms</a>.
            </p>
        </main>

        <!-- Footer -->
        @include('layouts.footer')

    </body>
</html>
