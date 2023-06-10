<nav x-data="{ open: false }" class="bg-white border-b border-gray-100" style="position:sticky; top:0; z-index: 100;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href={{route('admin.index')}}>
                        <x-rpg-health class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="url('/jadwal')" :active="request()->url() === url('/jadwal')">
                        Jadwal
                    </x-nav-link>
                    <x-nav-link :href="route('admin.user')" :active="request()->route() === route('admin.user')">
                        Daftar User
                    </x-nav-link>
                    <x-nav-link :href="route('admin.approval')" :active="request()->route() === route('admin.approval')">
                        Daftar Reservasi
                    </x-nav-link>
                    <x-nav-link :href="route('admin.doctor')" :active="request()->route() === route('admin.doctor')">
                        Daftar Dokter
                    </x-nav-link>
                </div>
            </div>

            <!-- Auth Links -->
            @auth
            <div class="hidden sm:flex sm:items-center sm:space-x-4 justify-center" style="height: 100%;">
                <x-nav-link :href="route('admin.index')" style="height: 100%;">
                    {{ __('Profile') }}
                </x-nav-link>
                
                <form method="POST" action="{{ route('logout') }}" class="ml-5 my-auto" style="height: 100%;">
                    @csrf
                    <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="height: 100%;" class="my-auto">
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </div>
            @endauth
        </div>
    </div>
</nav>
