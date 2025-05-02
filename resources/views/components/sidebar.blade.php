<div x-data="{ isOpen: localStorage.getItem('sidebarOpen') === 'true' }" 
     class="min-h-screen bg-white border-r border-gray-200 transition-all duration-300 relative"
     :class="isOpen ? 'w-64' : 'w-20'">
    
    <!-- Toggle Button -->
    <button @click="isOpen = !isOpen; localStorage.setItem('sidebarOpen', isOpen)"
            class="absolute top-4 bg-white rounded-full p-1.5 border border-gray-200 shadow-sm"
            :class="isOpen ? '-right-3 rotate-0' : '-right-9 rotate-180'">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
             class="w-4 h-4 text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Logo -->
    <div class="flex items-center justify-center h-16 border-b">
        <img src="{{ asset('images/logo-untirta.png') }}" alt="Logo" class="h-10 w-10">
        <span x-show="isOpen" 
              x-transition:enter="transition-opacity duration-300"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              class="ml-3 font-semibold text-gray-800">Siakang</span>
    </div>

    <!-- Navigation -->
    <nav class="mt-6 px-2">
        <div class="space-y-4">
            <!-- Menu Section -->
            <div class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" x-show="isOpen">
                MENU
            </div>

            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-3" x-show="isOpen" x-transition:enter="transition-opacity duration-300">Dashboard</span>
            </a>

            <!-- Profile -->
            <a href="{{ route('profile.edit') }}" 
               class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200 {{ request()->routeIs('profile.edit') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="ml-3" x-show="isOpen" x-transition:enter="transition-opacity duration-300">Profile</span>
            </a>

            <!-- Halaman Booking -->
            <a href="{{ route('booking.create') }}" 
               class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200 {{ request()->routeIs('booking.create') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="ml-3" x-show="isOpen" x-transition:enter="transition-opacity duration-300">Halaman Booking</span>
            </a>

            <!-- Settings -->
            <a href="#" 
               class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200 text-gray-600 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="ml-3" x-show="isOpen" x-transition:enter="transition-opacity duration-300">Settings</span>
            </a>

            <!-- Virtual Tour -->
            <a href="{{ route('virtual-tour') }}" 
               class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200 {{ request()->routeIs('virtual-tour') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <span class="ml-3" x-show="isOpen" x-transition:enter="transition-opacity duration-300">Virtual Tour</span>
            </a>
        </div>
    </nav>
</div>
