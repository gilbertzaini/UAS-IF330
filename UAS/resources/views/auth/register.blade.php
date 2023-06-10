<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name and Jenis Kelamin -->
        <div class="flex items-center justify-between">
            <div style="width:75%;">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="ml-1 h-full">
                <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />
                <div>
                    <select name="jenisKelamin" id="jenisKelamin" class="mt-1 block w-full text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Tempat Lahir and Tanggal Lahir -->
        <div class="mt-4 flex">
            <div class="w-1/2">
                <x-input-label for="tempatLahir" :value="__('Tempat Lahir')" />
                <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" name="tempatLahir" :value="old('tempatLahir')" required autocomplete="tempatLahir" />
                <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
            </div>
            <div class="w-1/2 ml-4">
                <x-input-label for="tanggalLahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="date" name="tanggalLahir" :value="old('tanggalLahir')" required autocomplete="tanggalLahir" />
                <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
            </div>
        </div>

        <!-- Nomor Telepon -->
        <div class="mt-4">
            <x-input-label for="noTelp" :value="__('Nomor Telepon')" />
            <x-text-input id="noTelp" class="block mt-1 w-full" type="text" name="noTelp" :value="old('noTelp')" required autocomplete="noTelp" />
            <x-input-error :messages="$errors->get('noTelp')" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autocomplete="alamat" />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>