{{-- resources/views/partials/navbar.blade.php --}}

<!-- Navbar Responsive con Dropdowns (Tailwind + Alpine.js) -->
<header class="bg-[#0f172a] text-white">
  <div class="container mx-auto flex justify-between items-center p-4" x-data="{ openMenu: false, openProduct: false, openResources: false }">
    <!-- Logo -->
    <a href="./index.html">
      <img src="../imagenes/logo_mobile.JPG" alt="Logo-mobile" class="w-12 h-14 md:hidden rounded-lg"/>
      <img src="../imagenes/logo.JPG" alt="logo-desktop" class="hidden md:block static -mt-9 -mb-10 w-20">
    </a>

    <!-- Botón Hamburguesa (solo móvil) -->
    <button @click="openMenu = !openMenu" class="md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
           viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Menú -->
    <nav :class="{'block': openMenu, 'hidden': !openMenu}" class="absolute md:static top-16 left-0 w-full md:w-auto bg-[#0f172a] md:flex md:space-x-6 md:items-center hidden md:block z-50">
      <ul class="flex flex-col md:flex-row md:space-x-6 p-4 md:p-0">

        <!-- Dropdown Product -->
        <li class="relative" @click.away="openProduct = false">
          <button @click="openProduct = !openProduct; openResources = false"
                  class="flex items-center w-full py-2 hover:opacity-80">
            Product
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div x-show="openProduct" x-transition
               class="absolute md:absolute left-0 mt-2 w-40 bg-white text-gray-700 rounded-lg shadow-lg py-2 z-50">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Applicant Tracking System</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">ATS for large companies</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">ATS for SMEs</a>
          </div>
        </li>

        <!-- Dropdown Resources -->
        <li class="relative" @click.away="openResources = false">
          <button @click="openResources = !openResources; openProduct = false"
                  class="flex items-center w-full py-2 hover:opacity-80">
            Resources
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div x-show="openResources" x-transition
               class="absolute md:absolute left-0 mt-2 w-40 bg-white text-gray-700 rounded-lg shadow-lg py-2 z-50">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Help Center</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Associates</a>
          </div>
        </li>

        <!-- Prices -->
        <li><a href="#" class="block py-2 hover:opacity-80">Prices</a></li>

        <!-- Login/Register -->
        @if (Route::has('login'))
        <div class="flex flex-col md:flex-row md:space-x-4 mt-2 md:mt-0">
          @auth
            <a href="{{ url('/dashboard') }}" class="px-5 py-1.5 border border-gray-300 text-sm rounded-sm hover:border-gray-500">
              Dashboard
            </a>
          @else
            <a href="{{ route('login') }}" class="px-5 py-1.5 text-white hover:opacity-80 border border-transparent hover:border-gray-500 rounded-sm text-sm">
              Log in
            </a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="px-5 py-1.5 border border-white text-white hover:opacity-80 rounded-sm text-sm">
                Register
              </a>
            @endif
          @endauth
        </div>
        @endif
      </ul>
    </nav>
  </div>
</header>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
