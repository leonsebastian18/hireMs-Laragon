<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Tracking System</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./Css/atsHire-Ms.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./Script/script.js" defer></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Encabezado -->
    <header class="bg-white shadow-md header-container">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="./index.html">
                <img src="../imagenes/logo_mobile.JPG" alt="Logo-mobile" class="w-12 h-14 md:hidden rounded-lg"/>
                <img src="../imagenes/logo.JPG" alt="logo-desktop" class="hidden md:block static -mt-9 -mb-10  w-20">
            </a>


            <nav>
                <ul class="flex space-x-4">
                    <li><a href="./signin.html" class="text-white hover:opacity-80">Login</a></li>
                    <li><a href="#" class="text-white hover:opacity-80">Product</a></li>
                    <li><a href="#" class="text-white hover:opacity-80">Prices</a></li>
                    <li><a href="#" class="text-white hover:opacity-80">Resources</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sección Principal -->
    <main class="container mx-auto p-6 text-center">
        <h2 class="text-4xl font-bold mb-6 text-gray-800">One step closer to your star</h2>
        <p class="text-gray-600 mb-4">This system allows you to streamline your recruitment processes, because we know that you always need our stars.</p>
        <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Request a demonstration</button>

        <!-- Imágenes del ATS -->
        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mt-8">
            <div class="flex justify-center">
                <img src="./imagenes/Index.png" alt="Demo_index" class="rounded-lg shadow-md w-[366px] h-[366px] md:w-[485.33px] md:h-[485.33px]">
            </div>
        </div>
    </main>

    <!-- Sección de Características -->
    <section class="bg-white py-10 mt-10">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-semibold mb-6 text-gray-800">Everything you need to hire better</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-4">
                    <h4 class="text-xl font-bold text-blue-600">Intelligent Automation</h4>
                    <p class="text-gray-600 mt-2">Automate repetitive tasks and focus on what really matters.</p>
                </div>
                <div class="p-4">
                    <h4 class="text-xl font-bold text-blue-600">Candidate Experience</h4>
                    <p class="text-gray-600 mt-2">Offer your candidates a pleasant experience during the recruitment process.</p>
                </div>
                <div class="p-4">
                    <h4 class="text-xl font-bold text-blue-600">Efficient Collaboration</h4>
                    <p class="text-gray-600 mt-2">Improve communication and teamwork within your HR department.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de estadistica -->
    <section class="bg-white py-10 mt-10">
        <div class="w-full px-4">
            <h2 class="text-center text-xl md:text-2xl font-bold text-[#050F1F] mb-6">
                Application Statistics
            </h2>

            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <!-- Gráfico de barras -->
                <div class="bg-white rounded-lg shadow-md p-4 w-full max-w-xs md:max-w-sm aspect-square flex justify-center items-center">
                    <canvas id="barChart" class="w-full h-full"></canvas>
                </div>

                <!-- Gráfico de pastel -->
                <div class="bg-white rounded-lg shadow-md p-4 w-full max-w-xs md:max-w-sm aspect-square flex justify-center items-center">
                    <canvas id="pieChart" class="w-full h-full"></canvas>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Opiniones -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-semibold mb-6 text-gray-800">What our customers say</h3>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <div class="bg-white p-4 rounded-lg shadow-md max-w-sm">
                    <p class="text-gray-700 italic">"The best ATS we've ever used, it streamlines our entire process."</p>
                    <span class="font-bold block mt-2">- Client A</span>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md max-w-sm">
                    <p class="text-gray-700 italic">"It helped us find talent faster and with greater accuracy."</p>
                    <span class="font-bold block mt-2">- Client B</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white p-6 mt-10">
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
            <div>
                <h4 class="font-bold mb-2">Product</h4>
                <ul>
                    <li>Applicant Tracking System</li>
                    <li>ATS for large companies</li>
                    <li>ATS for SMEs</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Resources</h4>
                <ul>
                    <li>Help Center</li>
                    <li>Associates</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Company</h4>
                <ul>
                    <li>Employment</li>
                    <li>Customers</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Legal</h4>
                <ul>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                    <li>Safety and security</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-6">
            <p>More than just an ATS, Hire.Ms is the recruiting software that helps you find the ideal candidate.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#"><img src="https://img.freepik.com/vector-gratis/nuevo-diseno-icono-x-logotipo-twitter-2023_1017-45418.jpg" alt="X" class="w-6 rounded-lg"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/220/220200.png" alt="Facebook" class="w-6 rounded-lg"></a>
                <a href="#"><img src="data:image/jpeg;base64,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" alt="Instagram" class="w-6 rounded-lg"></a>
                <a href="#"><img src="data:image/png;base64,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" alt="LinkedIn" class="w-6 rounded-lg"></a>
            </div>
        </div>
    </footer>
</body>
</html>
