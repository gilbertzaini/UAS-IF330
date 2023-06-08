<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-rpg-health class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="url('/jadwal')" :active="request()->url() === url('/jadwal')">
                        Jadwal
                    </x-nav-link>
                </div>
            </div>

            <!-- Auth Links -->
            @auth
            <div class="hidden sm:flex sm:items-center sm:space-x-4 justify-center">
                <x-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-nav-link>
                
                <form method="POST" action="{{ route('logout') }}" class="ml-5">
                    @csrf
                    <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="pt-3" style="margin-top: 3px;">
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </div>
            @endauth

            <!-- Guest Links -->
            @guest
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                <x-nav-link :href="url('/login')" :active="request()->url() === url('/login')">
                    Login
                </x-nav-link>
                <x-nav-link :href="url('/register')" :active="request()->url() === url('/register')" class="ml-5">
                    Register
                </x-nav-link>
            </div>
            @endguest
        </div>
    </div>
</nav>
