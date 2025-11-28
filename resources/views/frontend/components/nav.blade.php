 <nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wide">
                HotelEase
            </a>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="lg:hidden focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-black  font-medium">Home</a>
                <a href="{{ route('room') }}" class="text-gray-700 hover:text-black font-medium">Rooms</a>
                <a href="{{ route('facilities') }}" class="text-gray-700 hover:text-black font-medium">Facilities</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-black font-medium">About us</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-black font-medium">Contact</a>
            </div>

            <!-- Buttons -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="{{ route('login') }}"
                   class="px-4 py-2 border border-gray-800 rounded-lg hover:bg-gray-800 hover:text-white transition">
                    Login
                </a>
                <a href="{{ route('register') }}"
                   class="px-4 py-2 border border-gray-800 rounded-lg hover:bg-gray-800 hover:text-white transition">
                    Register
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden flex-col space-y-3 pb-4">
            <a href="{{ route('home') }}" class="block text-gray-700">Home</a>
            <a href="{{ route('room') }}" class="block text-gray-700">Rooms</a>
            <a href="{{ route('facilities') }}" class="block text-gray-700">Facilities</a>
            <a href="{{ route('about') }}" class="block text-gray-700">About us</a>
            <a href="{{ route('contact') }}" class="block text-gray-700">Contact</a>

            <div class="flex gap-3 pt-2">
                <a href="{{ route('login') }}"
                   class="px-4 py-2 border border-gray-800 rounded-lg w-full text-center">
                    Login
                </a>
                <a href="{{ route('register') }}"
                   class="px-4 py-2 border border-gray-800 rounded-lg w-full text-center">
                    Register
                </a>
            </div>
        </div>
    </div>
</nav>
