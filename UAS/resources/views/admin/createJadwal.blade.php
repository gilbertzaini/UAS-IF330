@extends('layouts.master')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="POST" action="{{ route('jadwal.store') }}" class="mt-6 space-y-6">
                    @csrf

                    <div style="display: none;">
                        <x-text-input name="id" type="text" value="{{$doctor->id}}" class="mt-1 block w-full" required readonly/>
                    </div>

                    <div>
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input name="nama" type="text" value="{{$doctor->nama}}" class="mt-1 block w-full" required readonly/>
                        <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                    </div>

                    <div>
                        <x-input-label for="jadwalPraktik" :value="__('Jadwal Praktik Baru')" />
                        <x-text-input name="jadwalPraktik" type="text" class="mt-1 block w-full" required />
                        <x-input-error class="mt-2" :messages="$errors->get('jadwalPraktik')" />
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button style="background-color: grey;">{{ __('Tambah') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop