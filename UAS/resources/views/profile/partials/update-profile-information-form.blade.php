<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="tempatLahir" :value="__('Tempat Lahir')" />
            <x-text-input id="tempatLahir" name="tempatLahir" type="text" class="mt-1 block w-full" :value="old('tempatLahir', $user->tempatLahir)" required autocomplete="tempatLahir" />
            <x-input-error class="mt-2" :messages="$errors->get('tempatLahir')" />
        </div>
        
        <div>
            <x-input-label for="tanggalLahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggalLahir" type="date" name="tanggalLahir" class="mt-1 block w-full" :value="old('tanggalLahir', $user->tanggalLahir)" required autocomplete="tanggalLahir" />
            <x-input-error class="mt-2" :messages="$errors->get('tanggalLahir')" />
        </div>
        
        <div>
            <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />
            <select id="jenisKelamin" name="jenisKelamin" class="mt-1 block w-full text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                <option value="L" @if(old('jenisKelamin', $user->jenisKelamin) === 'L') selected @endif>{{ __('L') }}</option>
                <option value="P" @if(old('jenisKelamin', $user->jenisKelamin) === 'P') selected @endif>{{ __('P') }}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('jenisKelamin')" />
        </div>
        
        <div>
            <x-input-label for="noTelp" :value="__('Nomor Telepon')" />
            <x-text-input id="noTelp" name="noTelp" type="text" class="mt-1 block w-full" :value="old('noTelp', $user->noTelp)" required autocomplete="noTelp" />
            <x-input-error class="mt-2" :messages="$errors->get('noTelp')" />
        </div>
        
        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" :value="old('alamat', $user->alamat)" required autocomplete="alamat" />
            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
        </div>       

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
