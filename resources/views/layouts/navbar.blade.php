{{-- resources/views/partials/navbar.blade.php --}}

<!-- Navbar con Dropdown (click en lugar de hover) -->
<div class="container mx-auto flex justify-between items-center p-4 relative">
  <!-- Logo -->
  <a href="./index.html">
    <img src="../imagenes/logo_mobile.JPG" alt="Logo-mobile" class="w-12 h-14 md:hidden rounded-lg"/>
    <img src="../imagenes/logo.JPG" alt="logo-desktop" class="hidden md:block static -mt-9 -mb-10 w-20">
  </a>

  <!-- Menú principal -->
  <nav x-data="{ openProduct: false, openResources: false }">
    <ul class="flex space-x-6 items-center">

      <!-- Dropdown Product -->
      <li class="relative">
        <button @click="openProduct = !openProduct; openResources = false"
                class="text-white hover:opacity-80 flex items-center">
          Product
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openProduct" x-transition
             @click.outside="openProduct = false"
             class="absolute left-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-2 z-50">
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Applicant Tracking System</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">ATS for large companies</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">ATS for SMEs</a>
        </div>
      </li>

      <!-- Dropdown Resources -->
      <li class="relative">
        <button @click="openResources = !openResources; openProduct = false"
                class="text-white hover:opacity-80 flex items-center">
          Resources
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openResources" x-transition
             @click.outside="openResources = false"
             class="absolute left-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-2 z-50">
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Help Center</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Associates</a>
        </div>
      </li>

      <li><a href="#" class="text-white hover:opacity-80">Prices</a></li>

      <!-- Botones Login/Register -->
      @if (Route::has('login'))
      <nav class="flex items-center justify-end gap-4">
        @auth
          <a href="{{ url('/dashboard') }}"
             class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm">
             Dashboard
          </a>
        @else
          <a href="{{ route('login') }}"
             class="inline-block px-5 py-1.5 text-[#FFFF] hover:opacity-80 border border-transparent hover:border-[#19140035] rounded-sm text-sm">
             Log in
          </a>
          @if (Route::has('register'))
            <a href="{{ route('register') }}"
               class="inline-block px-5 py-1.5 border-[#FFFF] hover:border-[#1915014a] border text-[#FFFF] hover:opacity-80 rounded-sm text-sm">
               Register
            </a>
          @endif
        @endauth
      </nav>
      @endif
    </ul>
  </nav>
</div>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
