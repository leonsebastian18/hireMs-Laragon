{{-- resources/views/partials/navbar.blade.php --}}

        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="./index.html">
                <img src="../imagenes/logo_mobile.JPG" alt="Logo-mobile" class="w-12 h-14 md:hidden rounded-lg"/>
                <img src="../imagenes/logo.JPG" alt="logo-desktop" class="hidden md:block static -mt-9 -mb-10  w-20">
            </a>


            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-white hover:opacity-80">Product</a></li>
                    <li><a href="#" class="text-white hover:opacity-80">Prices</a></li>
                    <li><a href="#" class="text-white hover:opacity-80">Resources</a></li>
                    @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-[#FFFF] hover:opacity-80 border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 border-[#FFFF] hover:border-[#1915014a] border text-[#FFFF] hover:opacity-80 rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
                </ul>
            </nav>
        </div>
