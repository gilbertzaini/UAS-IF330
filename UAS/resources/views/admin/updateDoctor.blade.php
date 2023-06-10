@extends('layouts.master')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h1 style="font-size: 1.2rem; font-weight:bold;">Profil Dokter</h1>
                <form method="post" action="{{ route('doctor.update', ['id'=>$doctor->id]) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div>
                        <img style="height: 10rem; width: 10rem; image-fit: contain;" src="data:image/jpeg;base64,{{ base64_encode($doctor->foto) }}"/>
                        <x-text-input id="tanggalLahir" type="file" name="foto" class="mt-2 block w-full" autocomplete="foto" />
                        <x-input-error class="mt-2" :messages="$errors->get('foto')" />
                    </div>  

                    <div>
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="name" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $doctor->nama)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                    </div>

                    <div>
                        <x-input-label for="spesialis" :value="__('Spesialis')" />
                        <x-text-input id="tempatLahir" name="spesialis" type="text" class="mt-1 block w-full" :value="old('spesialis', $doctor->spesialis)" required autocomplete="spesialis" />
                        <x-input-error class="mt-2" :messages="$errors->get('spesialis')" />
                    </div>                  

                    <div class="flex items-center gap-4">
                        <x-primary-button style="background-color: grey;">{{ __('Save') }}</x-primary-button>
                    </div>
                </form>                
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h1 style="font-size: 1.2rem; font-weight:bold;">Jadwal Dokter</h1>
            <div id="jadwalDokter" class="mt-6 space-y-6">
                <table>
                    <tbody>
                        @foreach($doctor->jadwal as $jadwal)
                        <tr>
                            <td>{{$jadwal->jadwalPraktik}}</td>
                            <td style="width: 10%;"></td>
                            <td>
                                <div class="my-auto">
                                    <form method="post" action="{{ route('jadwal.destroy', ['jadwal_id'=>$jadwal->id, 'doctor_id'=>$doctor->id]) }}" class="py-auto">
                                        @csrf
                                        @method('delete')
                                        <div class="d-flex align-center justify-center">
                                            <button class="btn btn-danger">
                                                {{ __('Delete') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach                        
                </table>
                <div class="mt-3 d-flex justify-start align-center">
                    <a style="height: auto; background-color: #808080;" class="btn btn-success" href="{{ route('jadwal.create', ['id'=>$doctor->id]) }}">
                        {{ __('Tambah Jadwal') }}
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@stop