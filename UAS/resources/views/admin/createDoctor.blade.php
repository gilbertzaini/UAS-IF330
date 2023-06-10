@extends('layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="post" action="{{ route('doctor.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="name" name="nama" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                    </div>

                    <div>
                        <x-input-label for="spesialis" :value="__('Spesialis')" />
                        <x-text-input id="tempatLahir" name="spesialis" type="text" class="mt-1 block w-full" required autocomplete="spesialis" />
                        <x-input-error class="mt-2" :messages="$errors->get('spesialis')" />
                    </div>
                    
                    <div>
                        <x-input-label for="foto" :value="__('Foto')" />
                        <x-text-input id="tanggalLahir" type="file" name="foto" class="mt-1 block w-full" autocomplete="foto" />
                        <x-input-error class="mt-2" :messages="$errors->get('foto')" />
                    </div>    

                    <div class="flex items-center gap-4">
                        <x-primary-button style="background-color: grey;">{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop