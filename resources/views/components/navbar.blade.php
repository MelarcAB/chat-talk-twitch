<div x-data="{ open: false }" class="bg-gray-800">
    <nav class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset('img/chat-talk-logo-no-border.png') }}" alt="ChatTalk Logo" class="h-8  mr-2">
                <a href="{{ route('home') }}" class="text-2xl font-semibold text-white lg:text-left">ChatTalk</a>
            </div>
            <div class="lg:flex items-center hidden">
                <ul class="inline-flex items-center">
                    <li><a href="{{ route('home') }}" class="px-3 py-2 text-white hover:text-gray-200">Inicio</a></li>
                    <li x-data="{ open: false }" @click.away="open = false" class="relative">
                        <a @click="open = !open" href="#"
                            class="px-3 py-2 text-white hover:text-gray-200">{{ Auth::user()->username }} <i
                                class="fas fa-angle-down ml-1"></i></a>
                        <div x-show="open"
                            class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 text-black z-20">
                            <a href='' class="block px-4 py-2 text-sm">Configurar avatar y voz</a>
                            <a href='' class="block px-4 py-2 text-sm">Historial</a>
                            <a href='' class="block px-4 py-2 text-sm">Favoritos</a>
                            <a href='' class="block px-4 py-2 text-sm">Ayuda</a>
                        </div>
                    </li>
                    <li><a href="{{ route('logout') }}" class="px-3 py-2 text-white hover:text-gray-200">Logout</a></li>
                </ul>
            </div>
            <!-- mobile menu button -->
            <div class="lg:hidden">
                <button @click="open = !open"
                    class="navbar-burger flex items-center py-2 px-3 text-white rounded border border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- mobile menu -->
        <div :class="{ 'hidden': !open, 'block': open }" class="lg:hidden">
            <ul class="px-2 pt-2 pb-3 space-y-1">
                <li><a href="{{ route('home') }}"
                        class="block px-3 py-2 rounded text-white hover:text-gray-200">Inicio</a></li>
                <li x-data="{ open: false }" @click.away="open = false" class="relative">
                    <a @click="open = !open" href="#"
                        class="block px-3 py-2 rounded text-white hover:text-gray-200">{{ Auth::user()->username }} <i
                            class="fas fa-angle-down ml-1"></i></a>
                    <div x-show="open"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 text-black z-20">
                        <a href="" class="block px-4 py-2 text-sm">Configurar avatar y voz</a>
                        <a href="" class="block px-4 py-2 text-sm">Historial</a>
                        <a href="" class="block px-4 py-2 text-sm">Favoritos</a>
                        <a href="" class="block px-4 py-2 text-sm">Ayuda</a>
                    </div>
                </li>
                <li><a href="{{ route('logout') }}"
                        class="block px-3 py-2 rounded text-white hover:text-gray-200">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>
