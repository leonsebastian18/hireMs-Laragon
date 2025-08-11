{{-- resources/views/partials/navbar.blade.php --}}
<header class="bg-white shadow-md header-container">
    <div class="container mx-auto flex justify-between items-center p-4">
        {{-- Logo --}}
        <a href="{{ url('/') }}">
            <img src="{{ asset('imagenes/logo_mobile.JPG') }}"
                 alt="Logo-mobile"
                 class="w-12 h-14 md:hidden rounded-lg" />
            <img src="{{ asset('imagenes/logo.JPG') }}"
                 alt="logo-desktop"
                 class="hidden md:block static -mt-9 -mb-10 w-20" />
        </a>

        {{-- Navegación --}}
        <nav>
            <ul class="flex space-x-4">
                @guest
                    <li><a href="{{ route('login') }}" class="text-white hover:opacity-80">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-white hover:opacity-80">Registrarse</a></li>
                @endguest

                @auth
                    <li><a href="{{ route('dashboard') }}" class="text-white hover:opacity-80">Dashboard</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-white hover:opacity-80">Cerrar Sesión</button>
                        </form>
                    </li>
                @endauth

                <li><a href="{{ url('/product') }}" class="text-white hover:opacity-80">Product</a></li>
                <li><a href="{{ url('/prices') }}" class="text-white hover:opacity-80">Prices</a></li>
                <li><a href="{{ url('/resources') }}" class="text-white hover:opacity-80">Resources</a></li>
            </ul>
        </nav>
    </div>
</header>
